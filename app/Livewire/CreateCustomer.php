<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $fullname='';
    public $email='';
    public $phone='';
    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save(){
        //dd($this->all());
        Customer::create($this->validate([
            'fullname'=>'required|max:255',
            'email'=>'required|email|unique:customers|max:255',
            'phone'=>'required|unique:customers|max:255'
        ]));
        $this->reset();
    }
}
