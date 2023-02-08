<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function buy($id)
    {
        $item = Item::find($id);

        $order = new Order();
        $order->account_id = Auth::user()->account_id;
        $order->item_id = $item->item_id;
        $order->price = $item->price;
        $order->save();

        return redirect()->route('mycart');


    }
    public function index()
    {
        $user = Auth::user();
        $role = Role::all();
        $gender = Gender::all();

        return view('profile.profile-index', compact('user', 'gender', 'role'));
    }

    public function update(Request $request)
    {

        $id = Auth::user()->account_id;
        $user = User::find($id);

        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'gender_id' => ['required'],
            'display_picture_link' => ['required', 'mimes:jpg,png,jpeg'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'confirmed', 'string', 'min:8', 'confirmed', 'regex:/[0-9]/'],

        ]);

        $file = $request->file('display_picture_link');
        $fileName = $file->getClientOriginalName();
        $directory = 'Display Picture';
        $fileStoredName = $request['first_name'] . '-' . $request['last_name'] . '-' . $fileName;

        if ($request->has('display_picture_link')) {
            if (File::exists('Display Picture/' . $user->display_picture_link)) {
                File::delete('Display Picture/' . $user->display_picture_link);
                $file->move($directory, $fileStoredName);
            } else {
                $file->move($directory, $fileStoredName);
            }
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender_id = $request->gender_id;
        $user->password = Hash::make($request->password);
        $user->display_picture_link =  $fileStoredName;
        $user->save();

        return redirect()->back();
    }

    public function mycart()
    {
        $cart = Order::with('Account', 'Item')->where('account_id', '=', Auth::user()->account_id)->get();

        $sum = $cart->sum('price');

        return view('profile.profile-mycart', compact('cart','sum'));
    }

    public function checkout()
    {
        return view('profile.profile-checkout');
    }

    public function delete_cart($id) {
        $cart = Order::find($id);
        $cart->delete();

        return redirect()->back();
    }
}
