<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
	public $ids;
	public $first_name;
	public $last_name;
	public $email;
	public $phone;
	public $address;

	public function resetInputFields()
	{
		$this->first_name='';
		$this->last_name='';
		$this->email='';
		$this->phone='';
		$this->address='';
	}

	public function store()
	{
		$validatedData=$this->validate([
			'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Student::create($validatedData);
        session()->flash('message','Data Stored Successfully!!!');
        $this->resetInputFields();
        $this->emit('StudentAdded');
	}

	public function edit($id)
	{

        $student= Student::where('id',$id)->first();
        $this->ids=$student->id;
        $this->first_name=$student->first_name;
        $this->last_name=$student->last_name;
        $this->email=$student->email;
        $this->phone=$student->phone;
        $this->address=$student->address;
        
	}

	public function update()
	{
		$validatedData=$this->validate([
			'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        if ($this->ids) {
        	$student= Student::find($this->ids);
        	$student->update([
        	'first_name' => $this->first_name,
			'last_name' => $this->last_name,
			'email' => $this->email,
			'phone' => $this->phone,
			'address' => $this->address,
		]);
        
        session()->flash('message','Data Updated Successfully!!!');
        $this->resetInputFields();
        $this->emit('StudentUpdated');
	}
}
	
	public function delete($id)
	{
		if ($id) {
        $student= Student::where('id',$id)->delete();
        session()->flash('message','Data Deleted Successfully!!!');
        }
        
	}

    public function render()
    {
    	$students=Student::orderBy('id','DESC')->get();
        return view('livewire.students',compact('students'));
    }
}
