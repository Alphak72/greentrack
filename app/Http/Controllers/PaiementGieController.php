<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class PaiementGieController extends Controller
{
    public function index()
    {
        return view('gie.pages.paiements.index');
    }

    public function show($id)
    {
        $paiement = Demande::findOrFail($id);
        return view('gie.pages.paiements.show', [
            'paiement' => $paiement
        ]);
    }
}
