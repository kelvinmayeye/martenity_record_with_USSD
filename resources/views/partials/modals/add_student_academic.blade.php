<div class="modal fade" id="addGradeModal{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('add-academic-student')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $student->id }}">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group has-success has-feedback">
                                    {{ Form::select('grade_id', $grades, null, ['class' => 'form-control', 'placeholder' => 'Select grade', 'required'=>'required']) }}
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-sm-12">
                                <div class="form-group has-primary has-feedback">
                                    {{ Form::select('year_id', $years, null, ['class' => 'form-control', 'placeholder' => 'Select year', 'required'=>'required']) }}
                                </div>
                            </div> --}}
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>