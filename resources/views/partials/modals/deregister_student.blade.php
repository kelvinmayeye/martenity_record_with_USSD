<!--The modal-->
<div class="modal fade" id="confirm{{$student->id}}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="student_id" value="{{ $student->id }}">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Are you sure you want to deregister <br>{{ $academicGradeStudent->academicGrade->name }} for {{ $student->fullname }}</h4>
                    </div>

                    <div class="col-md-12">
                        <a href="{{ url('deregister-grade/'.$student->id.'/'.$academicGradeStudent->id) }}" class="btn btn-danger btn-sm">yes</a>
                        <button type="button" class="btn btn-secondary btn-sm mx-2" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----End Modal------>
