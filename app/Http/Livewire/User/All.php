<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination, LivewireAlert;
    public $search = '';
    public $field = 0;

    public function render()
    {
        $search = $this->search;
        switch ($this->field) {
            case 0:
                $users = User::whereHas('profile', function ($q) use ($search) {
                    $q->search('full_name', $search);
                })->simplePaginate(4);
                break;
            case 1:
                $users = User::search('email', $search)->simplePaginate(4);
                break;
            case 2:
                $users = User::search('username', $search)->simplePaginate(4);
                break;
        }
        return view('livewire.user.all', ['users' => $users]);
    }
}
