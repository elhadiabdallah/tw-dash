<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Seller extends Component
{

    use WithPagination, LivewireAlert;
    public $search = '';
    public $field = 0;

    public function render()
    {
        $search = $this->search;
        switch ($this->field) {
            case 0:
                $sellers = User::whereHas('profile', function ($q) use ($search) {
                    $q->search('full_name', $search)->where('is_seller', true);
                })->simplePaginate(4);
                break;
            case 1:
                $sellers = User::search('email', $search)
                    ->whereHas('profile', function ($q) {
                        $q->where('is_seller', true);
                    })
                    ->simplePaginate(4);
                break;
            case 2:
                $sellers = User::search('username', $search)
                    ->whereHas('profile', function ($q) {
                        $q->where('is_seller', true);
                    })
                    ->simplePaginate(4);
                break;
        }
        return view('livewire.user.seller', ['sellers' => $sellers]);
    }
}
