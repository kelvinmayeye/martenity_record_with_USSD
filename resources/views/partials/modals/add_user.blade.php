<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => 'add-user']) !!}
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group has-success has-feedback">
                          {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'fullname', 'required' => 'required', 'maxlength' => '200']) }}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 col-sm-12">
                      <div class="form-group has-primary has-feedback">
                          {{ Form::select('role', ['accountant' => 'Accountant', 'academic' => 'Academic'], null, ['class' => 'form-control','placeholder' => 'Select role']) }}
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>