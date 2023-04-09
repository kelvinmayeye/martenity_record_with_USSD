<!--The modal-->
<div class="modal fade" id="confirm{{ $academicGradeStudent->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Student Transfer Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => 'mark-student-transfered/'.$academicGradeStudent->id]) !!}
                <div class="row">
                    <div class="col-md-12">
                        <h6>Mark <br>{{$academicGradeStudent->student->fname}} {{strtoupper(substr($academicGradeStudent->student->mname,0,1))}}. {{$academicGradeStudent->student->lname}}
                            as Transfered</h6>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Yes" class="btn btn-danger btn-sm">
                        <button type="button" class="btn btn-secondary btn-sm mx-2" data-dismiss="modal">No</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!----End Modal------>
