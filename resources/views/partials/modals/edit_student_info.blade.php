<!-- Edit Student modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url' => 'update-student-info/'.$student->id, 'method' => 'PUT']) }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Firstname: <span class="text-danger">*</span></label>
                            <input value="{{ $student->fname }}" required type="text" name="fname" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middlename: <span class="text-danger"></span></label>
                            <input value="{{ $student->mname }}" class="form-control" name="mname" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Lastname: <span class="text-danger">*</span></label>
                            <input value="{{ $student->lname }}" class="form-control" name="lname" type="text" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date of Birth:</label><span class="text-danger">*</span></label>
                            <input type="date" name="dob" value="{{ $student->dob }}" class="form-control" required>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ward:</label><span class="text-danger">*</span></label>
                            <input type="text" name="ward" value="{{$student->ward}}"  class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Street:</label><span class="text-danger">*</span></label>
                            <input type="text" name="street" value="{{$student->street}}" class="form-control" required>
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