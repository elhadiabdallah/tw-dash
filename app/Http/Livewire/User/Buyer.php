<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Buyer extends Component
{
    use WithPagination, LivewireAlert;
    public $search = '';
    public $field = 0;

    public function render()
    {
        $search = $this->search;
        switch ($this->field) {
            case 0:
                $buyers = User::whereHas('profile', function ($q) use ($search) {
                    $q->search('full_name', $search)->where('is_seller', false);
                })->simplePaginate(4);
                break;
            case 1:
                $buyers = User::search('email', $search)
                    ->whereHas('profile', function ($q) {
                        $q->where('is_seller', false);
                    })
                    ->simplePaginate(4);
                break;
            case 2:
                $buyers = User::search('username', $search)
                    ->whereHas('profile', function ($q) {
                        $q->where('is_seller', false);
                    })
                    ->simplePaginate(4);
                break;
        }
        return view('livewire.user.buyer', ['buyers' => $buyers]);
    }
}
