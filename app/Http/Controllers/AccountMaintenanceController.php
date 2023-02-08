<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class AccountMaintenanceController extends Controller
{
    public function index()
    {

        $user = User::with('Role','Gender')->get();
        return view('accounts.account-index',compact('user'));
    }

    public function edit_role($id)
    {
        $user = User::find($id);
        $role = Role::all();
        return view('accounts.account-edit',compact('user','role'));
    }
    public function update_role($id,Request $request)
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->back();
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
