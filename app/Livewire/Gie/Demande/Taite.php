<?php

namespace App\Livewire\Gie\Demande;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class Taite extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $traites = Demande::where('company', Auth()->user()->company)
            ->where('status', '=', 2)
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);
            
        return view('livewire.gie.demande.taite', [
            'traites' => $traites
        ]);
    }
}
