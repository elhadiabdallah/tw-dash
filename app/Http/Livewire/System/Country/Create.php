<?php

namespace App\Http\Livewire\System\Country;

use App\Models\Country;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;
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
        $this->validate();
        $country = Country::create([
            'name_ar' => $this->name_ar,
            'flag' => $this->flag,
            'code_phone' => $this->code_phone,
        ]);
        //return redirect(route('system.country'));
        $this->success_msg();
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset();
        $this->resetValidation();
    }

    public function success_msg()
    {
        $this->alert('success', 'نجاح', [
            'position' => 'bottom-start',
            'timer' => '3000',
            'toast' => '1',
            'text' => 'لقد تم اضافة الدولة بنجاح',
            'timerProgressBar' => true,
        ]);
    }
    public function render()
    {
        return view('livewire.system.country.create');
    }
}
