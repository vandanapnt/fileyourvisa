<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
class EmployeIndex extends Component
{
    use WithPagination;
    public $searchTerm;
   
    protected $paginationTheme = 'bootstrap';

    public function render()
    {               

        $searchTerm = '%'.$this->searchTerm.'%';
        $users =  User::where('name', 'like', $searchTerm)->orWhere('email', 'like', $searchTerm)->role('Employee')->orderBy('id', 'desc')->paginate();

        return view('livewire.employe-index', compact('users'));
    }
    
}
