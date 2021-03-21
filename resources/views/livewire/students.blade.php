<div>
	@include('livewire.addStudent')
	@include('livewire.editStudent')
    <div class="container">
    	@if (Session::has('message'))
    
	        <div class="alert alert-success alert-dismissible fade show" role="alert">
	            <strong>{{(Session::get('message'))}}</strong> 
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
	            </button>
	        </div>
		@endif
	  <h2>
	  	All Students 
		<button class="btn btn-info" data-toggle="modal" data-target="#addStudentModal">Add Student</button>   
	  </h2>      
  <table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody> 
    @foreach($students as $student)  
      <tr>
  		<td>{{$student->first_name}}</td>
  		<td>{{$student->last_name}}</td>
  		<td>{{$student->email}}</td>
  		<td>{{$student->phone}}</td>
  		<td>{{$student->address}}</td>
      	<td>
      		<button class="btn-xs btn-info" data-toggle="modal" data-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">Edit</button> 
			<button class="btn-xs btn-danger" wire:click.prevent="delete({{$student->id}})">Delete</button> 
      	</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
</div>


