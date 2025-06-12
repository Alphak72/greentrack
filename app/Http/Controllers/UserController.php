<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Gie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

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
        $roles = Role::all();
        return view('admin.pages.users.create', [
            'roles' => $roles
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'type_user' => 'required|numeric',
            'is_active' => 'required|numeric',
            'company' => 'required|string'
        ]);

        if ($request->role)
        {
            $role = $request->role;
        } else {
            $role = 'Administrateur';
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make('password'),
                'type_user' => $request->type_user,
                'is_active' => $request->is_active,
                'role' => $role,
                'company' => $request->company
            ]);

            if ($request->type_user == 2)
            {
                Gie::create([
                    'name' => $user->name,
                ]);
            }

            toastr()->success('User ajouté avec succès.');
            return to_route('user.index');

        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('admin.pages.users.edit', [
            'roles' => $roles,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|unique:users,username,'.$id,
            'type_user' => 'required|numeric',
            'is_active' => 'required|numeric',
        ]);

        if ($request->role)
        {
            $role = $request->role;
        } else {
            $role = 'Administrateur';
        }

        try {
            User::findOrFail($id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'type_user' => $request->type_user,
                'is_active' => $request->is_active,
                'role' => $role,
                'company' => Auth()->user()->company
            ]);

            toastr()->success('User modifié avec succès.');
            return to_route('user.index');

        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        toastr()->success('User supprimé avec succès.');
        return to_route('user.index');
    }
}
