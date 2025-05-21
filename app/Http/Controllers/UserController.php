<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerCreate()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);
        
        try {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'is_active' => 1,
                'role' => 'Client',
                'type_user' => 3
            ]);

            Client::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'user_id' => $user->id
            ]);

            toastr()->success("Compte ajouté avec succès.");
            return to_route('login');

        } catch (\Exception $err) {
            session()->flash('error', $err->getMessage());
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('admin.pages.users.index');
    }

    public function create()
    {
        return view('admin.pages.users.create');
    }
}
