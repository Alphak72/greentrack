<?php

namespace App\Livewire\Gie\Demande;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class Encour extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
       
    public function render()
    {
        $encours = Demande::where('company', Auth()->user()->company)
            ->where('status', '=', 1)
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);

        return view('livewire.gie.demande.encour',[
            'encours' => $encours
        ]);
    }
}
