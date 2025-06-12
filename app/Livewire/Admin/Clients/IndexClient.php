<?php

namespace App\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class IndexClient extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search;

    public function render()
    {
        $clients = Client::where('name', 'like', '%'.$this->search.'%')
            ->where('phone', 'like', '%'.$this->search.'%')
            ->latest()->paginate(10);
        return view('livewire.admin.clients.index-client', [
            'clients' => $clients
        ]);
    }
}
