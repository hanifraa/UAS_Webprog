<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ItemFoodController extends Controller
{
    public function create()
    {
        return view('items.item-create');
    }

    public function store(Request $request)
    {
        $file = $request->file('item_pict');
        $file_name = $file->getClientOriginalName();
        $file_location = 'image';

        $file->move($file_location,$request->item_name.'-'.$file_name);

        $item = new Item();

        $item->item_name = $request->item_name;
        $item->price = $request->price;
        $item->item_desc = $request->item_desc;
        $item->item_pict = $request->item_name.'-'.$file_name;
        $item->save();

        return redirect()->route('homepage');

    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.item-edit',compact('item'));
    }

    public function update($id,Request $request)
    {
        // $item = Item::find($id);
        // $file = $request->file('item_pict');
        // $file_name = $file->getClientOriginalName();
        // $file_location = 'image';

        // if($request->has('item_pict')) {
        //     if(File::exists('image/'.$item->item_pict)){
        //         File::delete('image/'.$item->item_pict);
        //         $file->move($file_location,$request->item_name.'-'.$file_name);
        //     } else {
        //         $file->move($file_location,$request->item_name.'-'.$file_name);
        //     }
        // }

        // $item = new Item();

        // $item->item_name = $request->item_name;
        // $item->price = $request->price;
        // $item->item_desc = $request->item_desc;
        // $item->item_pict = $request->item_name.'-'.$file_name;
        // $item->save();

        // return redirect()->back();
        $item = Item::find($id);
        $file = $request->file('item_pict');
        $file_name = $file->getClientOriginalName();
        $file_location = 'image';

        if($request->has('item_pict')) {
            if(File::exists('image/'.$item->item_pict)){
                File::delete('image/'.$item->item_pict);
                $file->move($file_location,$request->item_name.'-'.$file_name);
            } else {
                $file->move($file_location,$request->item_name.'-'.$file_name);
            }
        }


        $item->item_name = $request->item_name;
        $item->price = $request->price;
        $item->item_desc = $request->item_desc;
        $item->item_pict = $request->item_name.'-'.$file_name;
        $item->save();

        return redirect()->back();
    }


    public function delete($id)
    {
        $item = Item::find($id);
        if(File::exists('image/'.$item->item_pict)){
            File::delete('image/'.$item->item_pict);

        } else {
            File::delete('image/'.$item->item_pict);
        }
        $item->delete();
        return redirect()->back();

    }



}
