<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeAdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.demandes.index');
    }
}
