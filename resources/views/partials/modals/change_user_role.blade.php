<!-- The modal -->
<div class="modal fade" id="flipFlop{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => 'change-role/'.$user->id, 'method' => 'PUT']) !!}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="inputState">Roles</label>
                        {{ Form::select('role', ['accountant' => 'Accountant', 'academic' => 'Academic'], null, ['class' => 'form-control','required'=>'required','placeholder' => 'Select role']) }}
                    </div>

                    <div class="form-group col-md-12">
                        <input type="submit" value="Change" class="btn btn-success">
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!---- End Modal  ------>

