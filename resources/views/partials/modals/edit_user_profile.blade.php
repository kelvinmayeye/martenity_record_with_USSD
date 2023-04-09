<!-- Edit Student modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url' => 'update-user-info/'.$user->id, 'method' => 'PUT']) }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fullname:</label>
                            <input value="{{ $user->name }}" required type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Username: <span class="text-danger"></span></label>
                            <input value="{{ $user->username }}" class="form-control" name="username" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email: <span class="text-danger">(edit not allowed)</span></label>
                            <input value="{{ $user->email }}" class="form-control" readonly type="text" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <input class="btn btn-primary mr-3" type="submit" value="Save">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>