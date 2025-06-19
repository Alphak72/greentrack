<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Demande;
use App\Models\DemandeClient;
use App\Models\Gie;
use App\Models\Tarif;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('client.pages.demandes.index');
    }

    public function create()
    {
        $gies = Gie::latest()->get();
        $poubelles = Tarif::all();
        return view('client.pages.demandes.create', [
            'gies' => $gies,
            'poubelles' => $poubelles
        ]);
    }

    public function store(Request $request)
    {
        $gies = Gie::all();
        $clients = Client::all();
        $tarifs = Tarif::all();

        foreach ($gies as $gie)
        {
            if ($gie->id == $request->gie_id)
            {
                $company = $gie->user->company;
            }
        }

        foreach ($clients as $client)
        {
            if ($client->user_id == Auth()->user()->id)
            {
                $client_id = $client->id;
            }
        }

        foreach ($tarifs as $tarif)
        {
            if ($tarif->product == $request->desc)
            {
                $amount = $tarif->price - 500;
                $amountClient = $tarif->price;
            }
        }

        $request->validate([
            'reference' => 'required|unique:demande_clients,reference',
            'date' => 'required',
            'desc' => 'required|string',
            'gie_id' => 'required|numeric'
        ]);

        try {
            DemandeClient::create([
                'reference' => $request->reference,
                'date' => $request->date,
                'desc' => $request->desc,
                'amount' => $amountClient,
                'gie_id' => $request->gie_id,
                'user_id' => Auth()->user()->id
            ]);

            Demande::create([
                'reference' => $request->reference,
                'date' => $request->date,
                'desc' => $request->desc,
                'client_id' => $client_id,
                'company' => $company,
                'amount' => $amount
            ]);

            toastr()->success('Demande envoyée avec succès.');
            return to_route('client.demande.index');
        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $gies = Gie::latest()->get();
        $demande = DemandeClient::findOrFail($id);
        $poubelles = Tarif::all();
        return view('client.pages.demandes.edit', [
            'gies' => $gies,
            'demande' => $demande,
            'poubelles' => $poubelles
        ]);
    }

    public function update(Request $request, $id)
    {
        $gies = Gie::all();
        $clients = Client::all();
        $demandes = Demande::all();
         $tarifs = Tarif::all();

        foreach ($gies as $gie)
        {
            if ($gie->id == $request->gie_id)
            {
                $company = $gie->user->company;
            }
        }

        foreach ($clients as $client)
        {
            if ($client->user_id == Auth()->user()->id)
            {
                $client_id = $client->id;
            }
        }

        foreach ($demandes as $item)
        {
            if ($item->reference == $request->reference)
            {
                $status = $item->status;
            }
        }

        foreach ($tarifs as $tarif)
        {
            if ($tarif->product == $request->desc)
            {
                $amount = $tarif->price - 500;
                $amountClient = $tarif->price;
            }
        }

        $request->validate([
            'reference' => 'required|unique:demande_clients,reference,'.$id,
            'date' => 'required',
            'desc' => 'required|string',
            'gie_id' => 'required|numeric'
        ]);

        try {
            if ($status == 0) 
            {
                DemandeClient::findOrFail($id)->update([
                    'reference' => $request->reference,
                    'date' => $request->date,
                    'desc' => $request->desc,
                    'amount' => $amountClient,
                    'gie_id' => $request->gie_id,
                    'user_id' => Auth()->user()->id
                ]);

                Demande::find($id)->update([
                    'reference' => $request->reference,
                    'date' => $request->date,
                    'desc' => $request->desc,
                    'client_id' => $client_id,
                    'company' => $company,
                    'amount' => $amount
                ]);

                toastr()->success('Demande modifiée avec succès.');
                return to_route('client.demande.index');
            } else {
                toastr()->error("Vous n'avez plus la possiblité de modifier cette demande.");
                return to_route('client.demande.index');
            }
        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }
}
