<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        $tarifs = Tarif::latest()->get();
        return view('admin.pages.tarifs.index', [
            'tarifs' => $tarifs
        ]);
    }

    public function create()
    {
        return view('admin.pages.tarifs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string',
            'price' => 'required|numeric'
        ]);

        try {
            Tarif::create([
                'product' => $request->product,
                'price' => $request->price,
                'note' => $request->note
            ]);

            toastr()->success('Tarif ajouté avec succès.');
            return to_route('admin.tarif.index');

        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $tarif = Tarif::findOrFail($id);
        return view('admin.pages.tarifs.edit', [
            'tarif' => $tarif
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product' => 'required|string',
            'price' => 'required|numeric'
        ]);

        try {
            Tarif::find($id)->update([
                'product' => $request->product,
                'price' => $request->price,
                'note' => $request->note
            ]);

            toastr()->success('Tarif modifié avec succès.');
            return to_route('admin.tarif.index');

        } catch (\Exception $err) {
            toastr()->error($err->getMessage());
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $tarif = Tarif::findOrFail($id);
        $tarif->delete();

        toastr()->success('Tarif supprimé avec succès.');
        return to_route('admin.tarif.index');
    }
}
