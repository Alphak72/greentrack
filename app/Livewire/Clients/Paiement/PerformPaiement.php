<?php

namespace App\Livewire\Clients\Paiement;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DemandeClient;

class PerformPaiement extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $paiements = DemandeClient::where('user_id', Auth()->user()->id)
            ->where('status', '>', '1')
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);
            
        return view('livewire.clients.paiement.perform-paiement', [
            'paiements' => $paiements,
        ]);
    }
}
