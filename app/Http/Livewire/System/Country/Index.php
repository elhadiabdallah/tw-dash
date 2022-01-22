<?php

namespace App\Http\Livewire\System\Country;

use App\Models\Country;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, LivewireAlert;
    public $id_r = null;
    public $search = '';


    protected $listeners = [
        'confirmed'
    ];

    public function render()
    {
        $countries = Country::search('name_ar', $this->search)->simplePaginate(4);
        return view('livewire.system.country.index', ['countries' => $countries]);
    }

    public function delete($id)
    {
        $this->id_r = $id;
        $this->alert('error', 'تنبيه', [
            'position' => 'center',
            'timer' => '',
            'toast' => true,
            'showCancelButton' => true,
            'onDismissed' => '',
            'width' => '380',
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'text' => 'هل تريد حقا حذف هذا العنصر؟',
            'confirmButtonText' => 'موافق',
            'cancelButtonText' => 'إلغاء اﻷمر',
            'onConfirmed' => 'confirmed'
        ]);
    }

    public function confirmed()
    {
        $c = Country::find($this->id_r)->delete();
        $this->success_msg();
    }

    public function success_msg()
    {
        $this->alert('success', 'نجاح', [
            'position' => 'bottom-start',
            'timer' => '3000',
            'toast' => '1',
            'text' => 'لقد تم حذف الدولة بنجاح',
            'timerProgressBar' => true,
        ]);
    }
}
