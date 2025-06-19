<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\DemandeClient;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function attente()
    {
        return view('gie.pages.demandes.attente.index');
    }

    public function attenteShow($id)
    {
        $demande = Demande::find($id);
        return view('gie.pages.demandes.attente.show', [
            'demande' => $demande
        ]);
    }

    public function attenteStore($id)
    {
        Demande::find($id)->update([
            'status' => 1
        ]);

        DemandeClient::find($id)->update([
            'status' => 1
        ]);

        toastr()->success('Demande acceptée avec succès.');
        return to_route('gie.demande.attente');
    }

    public function attenteCancel($id)
    {
        Demande::find($id)->update([
            'status' => 3
        ]);

        DemandeClient::find($id)->update([
            'status' => 3
        ]);

        toastr()->success('Demande acceptée avec succès.');
        return to_route('gie.demande.attente');
    }
}
