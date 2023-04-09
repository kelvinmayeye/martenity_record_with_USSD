<!-- Add Student modal -->
<div class="modal fade bd-{{$studentParent->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg   ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url' => 'add-student/'.$studentParent->id,]) }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Firstname: <span class="text-danger">*</span></label>
                            <input required type="text" name="fname" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middlename: <span class="text-danger"></span></label>
                            <input class="form-control" name="mname" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Lastname: <span class="text-danger">*</span></label>
                            <input class="form-control" name="lname" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of Birth:</label><span class="text-danger">*</span></label>
                            <input type="date" name="dob" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender">Gender: <span class="text-danger">*</span></label>
                            <select class="form-control" name="gender">
                                <option selected disabled>Select Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ward:</label><span class="text-danger">*</span></label>
                            <input type="text" name="ward" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Street:</label><span class="text-danger">*</span></label>
                            <input type="text" name="street" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <input class="btn btn-primary mr-3" type="submit" value="Save">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
