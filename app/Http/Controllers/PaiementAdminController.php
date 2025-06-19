<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\DemandeClient;
use App\Models\Gie;
use Illuminate\Http\Request;

class PaiementAdminController extends Controller
{
    public function gie()
    {
        return view('admin.pages.paiements.gie.index');
    }

    public function client()
    {
        return view('admin.pages.paiements.client.index');
    }

    public function create($id)
    {
        $demande = Demande::find($id);
        return view('admin.pages.paiements.create', [
            'demande' => $demande
        ]);
    }

    public function store(Request $request)
    {
        $demandes = Demande::all();
        $demandeClients = DemandeClient::all();

        foreach ($demandes as $demande)
        {
            if ($demande->reference == $request->reference)
            {
                $id = $demande->id;
            }
        }
       
        Demande::findOrFail($id)->update([
            'status' => 2
        ]);

        toastr()->success('Paiement effectué avec succès.');
        return to_route('admin.paiement.gie.index');
    }
}
