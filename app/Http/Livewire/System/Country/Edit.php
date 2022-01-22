<?php

namespace App\Http\Livewire\System\Country;

use App\Models\Country;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;

    public $c_id;
    public $name_ar;
    public $flag;
    public $code_phone;

    protected $rules = [
        'name_ar' => 'required',
        'flag' => 'required',
        'code_phone' => 'required',
    ];
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function saveCountry()
    {
        $country = Country::findOrFail($this->c_id);
        $country->update($this->validate());

        //return redirect(route('system.country'));
        $this->success_msg();
    }



    public function success_msg()
    {
        $this->alert('success', 'نجاح', [
            'position' => 'bottom-start',
            'timer' => '3000',
            'toast' => '1',
            'text' => 'لقد تم التعديل على الدولة بنجاح',
            'timerProgressBar' => true,
        ]);
    }
    public function mount($country)
    {
        $this->c_id = $country->id;
        $this->name_ar = $country->name_ar;
        $this->flag = $country->flag;
        $this->code_phone =  $country->code_phone;
    }
    public function render()
    {
        return view('livewire.system.country.edit');
    }
}
