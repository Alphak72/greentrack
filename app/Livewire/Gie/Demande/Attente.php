<?php

namespace App\Livewire\Gie\Demande;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class Attente extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $attentes = Demande::where('company', Auth()->user()->company)
            ->where('status', '=', 0)
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);
            
        return view('livewire.gie.demande.attente', [
            'attentes' => $attentes
        ]);
    }
}
