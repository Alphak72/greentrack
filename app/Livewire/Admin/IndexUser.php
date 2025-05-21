<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        $users = User::where('company', Auth::user()->company)
            ->where('name', 'like', '%' . $this->search . '%')
            ->latest()->paginate(10);
        return view('livewire.admin.index-user', [
            'users' => $users
        ]);
    }
}
