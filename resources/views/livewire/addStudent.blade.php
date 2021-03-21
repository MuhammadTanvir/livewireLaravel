<!-- Modal -->
<div wire:ignore.self id="addStudentModal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="first_name" class="form-control" id="first_name" placeholder="Enter first name" wire:model="first_name">
           @error('first_name') <div class="alert alert-danger">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="last_name" class="form-control" id="last_name" placeholder="Enter Last Name" wire:model="last_name">
           @error('last_name') <div class="alert alert-danger">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email"  wire:model="email">
           @error('email') <div class="alert alert-danger">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter Phone" wire:model="phone">
           @error('phone') <div class="alert alert-danger">{{$message}}</div> @enderror
        </div>
        <div class="form-group">
          <label for="pwd">Address:</label>
          <input type="address" class="form-control" id="address" placeholder="Enter address"  wire:model="address">
            @error('address') <div class="alert alert-danger">{{$message}}</div> @enderror
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>