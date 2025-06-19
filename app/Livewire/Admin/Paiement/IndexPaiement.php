<?php

namespace App\Livewire\Admin\Paiement;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPaiement extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public function render()
    {
        $paiements = Demande::where('status', '>', 0)
            ->where('reference', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);

        return view('livewire.admin.paiement.index-paiement', [
            'paiements' => $paiements
        ]);
    }
}
