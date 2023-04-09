<!--The modal-->
<div class="modal fade" id="changeStudentStatus{{$student->id}}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change student join status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('change-status')}}" method="POST">
                    @csrf
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group has-success has-feedback">
                                <select name="status" id="" class="form-control">
                                    <option selected disabled>select status</option>
                                    <option value="1">New student</option>
                                    <option value="0">Old student</option>
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
</div>
<!----End Modal------>
