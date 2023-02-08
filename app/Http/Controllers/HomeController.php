<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $item = Item::paginate(12);
        return view('homepage',compact('item'));
    }

    public function detail($id)
    {
        $item = Item::find($id);

        return view('product-details',compact('item'));
    }
}
