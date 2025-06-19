<?php

namespace App\Livewire\Admin\Demande;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DemandeClient;

class IndexDemande extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $demandes = DemandeClient::where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);

        return view('livewire.admin.demande.index-demande', [
            'demandes' => $demandes
        ]);
    }
}
