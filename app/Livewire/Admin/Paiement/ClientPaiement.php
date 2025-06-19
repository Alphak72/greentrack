<?php

namespace App\Livewire\Admin\Paiement;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DemandeClient;

class ClientPaiement extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $paiements = DemandeClient::where('status', '>', 0)
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);

        return view('livewire.admin.paiement.client-paiement', [
            'paiements' => $paiements
        ]);
    }
}
