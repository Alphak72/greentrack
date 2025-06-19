<?php

namespace App\Livewire\Admin\Gie;

use App\Models\Gie;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexGie extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    
    public function render()
    {
        $gies = Gie::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('phone', 'like', '%'.$this->search.'%')
            ->latest()->paginate(10);
        return view('livewire.admin.gie.index-gie', [
            'gies' => $gies
        ]);
    }
}
