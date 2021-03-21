<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Post extends Component
{
	public $name;
	public $email;
	public $phone;
	public $password;

	 protected $rules = [
         'name' => 'required',
         'email' => 'required',
         'phone' => 'required',
         'password' => 'required',
    ];

	public function updated($fields)
	{
		 $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
	}

	public function submitForm()
	{
		$this->validate([
			'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        dd($this->name);
	}


	
    public function render()
    {
        return view('livewire.post');
    }
}
