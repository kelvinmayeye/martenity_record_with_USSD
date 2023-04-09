  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ Form::open(['url' => 'change-user-password/', 'method' => 'PUT']) }}
          <div class="row">
            <div class="form-group col-md-12">
                <label>Current Password</label>
                {{ Form::password('current_password', ['class' => 'form-control', 'placeholder' => 'Current Password', 'required' => 'required']) }}
            </div>
            <div class="form-group col-md-12">
                <label>New Password</label>
                {{ Form::password('new_password', ['class' => 'form-control', 'placeholder' => 'New Password', 'required' => 'required']) }}
            </div>
            <div class="form-group col-md-12">
                <label>Confirm Password</label>
                {{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required']) }}
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>