<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function profile(){
        return view('customers.profile');
    }
    public function profile_edit(Request $request){
        return view('customers.edit_profile');
    }

    public function profile_update(Request $request){
        $request->validate([
            'nama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'tanda_rumah' => 'required',
        ]);

        $user = User::find($request->id_user);
        
        $update = $user->update([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'tanda_rumah' => $request->tanda_rumah
        ]);

        return redirect()->route('customer.profile');
    }
}
