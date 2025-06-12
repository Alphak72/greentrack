<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.pages.clients.index');
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('admin.pages.clients.show', [
            'client' => $client
        ]);
    }
}
