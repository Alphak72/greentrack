<?php

namespace App\Http\Controllers;

use App\Models\DemandeClient;
use Illuminate\Http\Request;

class PaiementClientController extends Controller
{
    public function index()
    {
        return view('client.pages.paiements.index');
    }

    public function perform()
    {
        return view('client.pages.paiements.perform');
    }

    public function create($id)
    {
        $demande = DemandeClient::find($id);
        return view('client.pages.paiements.create', [
            'demande' => $demande
        ]);
    }

    public function store(Request $request)
    {
        $demandes = DemandeClient::all();

        foreach ($demandes as $demande)
        {
            if ($demande->reference == $request->reference)
            {
                $id = $demande->id;
            }
        }
       
        DemandeClient::findOrFail($id)->update([
            'status' => 2
        ]);

        toastr()->success('Paiement effectué avec succès.');
        return to_route('client.paiement.index');
    }
}
