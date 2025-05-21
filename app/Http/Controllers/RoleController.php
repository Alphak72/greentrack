<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::where('company', Auth::user()->company)
            ->latest()->get();
        return view('admin.pages.users.roles.index', [
            'roles' => $roles
        ]);
    }

    public function create()
    {
        return view('admin.pages.users.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name'
        ]);

        try {
            Role::create([
                'name' => $request->name,
                'company' => Auth::user()->company,
                'user_id' => Auth::user()->id
            ]);

            toastr()->success('Rôle et permissions ajouté avec succès.');
            return to_route('user.role.index');

        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);

        if($role->company == Auth::user()->company)
        {
            return view('admin.pages.users.roles.edit', [
                'role' => $role
            ]);
        } else {
            toastr()->error("La page que vous recherchez n'a pas été trouvée.");
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name'
        ]);

        try {
            Role::find($id)->update([
                'name' => $request->name,
                'company' => Auth::user()->company,
                'user_id' => Auth::user()->id
            ]);

            toastr()->success('Rôle et permissions modifié avec succès.');
            return to_route('user.role.index');

        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();

        toastr()->success('Rôle et permissions supprimé avec succès.');
        return to_route('user.role.index');
    }
}
