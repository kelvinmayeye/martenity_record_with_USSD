<div class="modal fade" id="changeGradeModal{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('edit-student-grade')}}" method="POST">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group has-success has-feedback">
                                <select name="grade_id" id="" class="form-control">
                                    <option value="{{ $academicGradeStudent->academicGrade->name  }}" selected disabled>
                                        {{ $academicGradeStudent->academicGrade->name }} </option>
                                    @foreach ($grades_grade as $academicgrade)
                                        <option value="{{ $academicgrade->id }}">{{ $academicgrade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
