<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class Temoignages extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('client_id', Auth()->user()->id)
            ->get();
        
        return view('client.pages.testimonials.index', [
            'testimonials' => $testimonials
        ]);
    }

    public function create()
    {
        return view("client.pages.testimonials.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc' => 'required'
        ]);

        Testimonial::create([
            'client_id' => $request->client_id,
            'desc' => $request->desc,
            'status' => 0
        ]);

        toastr()->success('Témoignage ajouté avec succès.');
        return to_route('temoignage.index');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view("client.pages.testimonials.edit", [
            'testimonial' => $testimonial
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'desc' => 'required'
        ]);

        Testimonial::findOrFail($id)->update([
            'client_id' => $request->client_id,
            'desc' => $request->desc,
            'status' => 0
        ]);

        toastr()->success('Témoignage modifié avec succès.');
        return to_route('temoignage.index');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        toastr()->success('Témoignage supprimé avec succès.');
        return to_route('temoignage.index');
    }

    public function approved()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonials.index', [
            'testimonials' => $testimonials
        ]);
    }
}
