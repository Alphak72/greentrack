<?php

namespace App\Livewire\Clients\Demandes;

use App\Models\DemandeClient;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IndexDemande extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $demandes = DemandeClient::where('user_id', Auth()->user()->id)
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);
        return view('livewire.clients.demandes.index-demande', [
            'demandes' => $demandes
        ]);
    }
}
