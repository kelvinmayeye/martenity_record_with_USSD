<!-- Edit Parent modal -->

<div class="modal fade bd-edit{{$studentParent->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Parent Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url' => 'edit-parent/'.$studentParent->id, 'method' => 'PUT']) }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Firstname: <span class="text-danger">*</span></label>
                            <input value="{{ $studentParent->firstname }}" required type="text" name="firstname" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middlename: <span class="text-danger"></span></label>
                            <input value="{{ $studentParent->middlename }}" class="form-control" name="middlename" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Lastname: <span class="text-danger">*</span></label>
                            <input value="{{ $studentParent->lastname }}" class="form-control" name="lastname" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone number 1: </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+255</div>
                                </div>
                                <input type="text" value="{{$studentParent->phonenumber}}" name="phonenumber1" class="form-control" placeholder="eg.672902123" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone number 2</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+255</div>
                                </div>
                                <input type="text" value="{{$studentParent->phonenumber2}}" name="phonenumber2" class="form-control" placeholder="eg.672902123">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ward:</label><span class="text-danger">*</span></label>
                            <input type="text" name="ward" value="{{$studentParent->ward}}"  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Street:</label><span class="text-danger">*</span></label>
                            <input type="text" name="street" value="{{$studentParent->street}}" class="form-control" required>
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