<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
class ConsultantIndex extends Component
{
    use WithPagination;
    public $searchTerm;
   
    protected $paginationTheme = 'bootstrap';

    public function render()
    {               

        $searchTerm = '%'.$this->searchTerm.'%';
        $users =  User::where('name', 'like', $searchTerm)->orWhere('email', 'like', $searchTerm)->role('Consultant')->orderBy('id', 'desc')->paginate();

        return view('livewire.consultant-index', compact('users'));
    }
    
}
