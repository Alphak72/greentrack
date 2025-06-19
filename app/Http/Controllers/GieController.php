<?php

namespace App\Http\Controllers;

use App\Models\Gie;
use App\Models\User;
use Illuminate\Http\Request;

class GieController extends Controller
{
    public function index()
    {
        return view('admin.pages.gies.index');
    }

    public function show($id)
    {
        $gie = Gie::find($id);
        return view('admin.pages.gies.show', [
            'gie' => $gie
        ]);
    }

    public function delete($id)
    {
        $gie = Gie::find($id);
        $user = User::find($gie->user_id);
       
        $gie->delete();
        $user->delete();

        toastr()->success('Succès');
        return to_route('admin.gie.index');
    }
}
