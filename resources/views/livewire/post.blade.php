<div>
   <div class="container">
  <h2>form</h2>
  <form wire:submit.prevent="submitForm">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="email" placeholder="Enter name" wire:model.debounce.5000ms="name">
       @error('name') <div class="alert alert-danger">{{$message}}</div> @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email"  wire:model.debounce.5000ms="email">
       @error('email') <div class="alert alert-danger">{{$message}}</div> @enderror
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone" wire:model.debounce.5000ms="phone">
       @error('phone') <div class="alert alert-danger">{{$message}}</div> @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password"  wire:model.debounce.5000ms="password">
        @error('password') <div class="alert alert-danger">{{$message}}</div> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
