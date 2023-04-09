<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('create-item')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group has-success has-feedback">
                                    {{ Form::text('item',null, ['class' => 'form-control', 'placeholder' => 'eg.uniform', 'required' => 'required', 'maxlength'=> '60']) }}
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group has-success has-feedback">
                                    {{ Form::text('amount',null, ['class' => 'form-control', 'placeholder' => 'eg.20000', 'required' => 'required', 'maxlength'=> '6', 'pattern'=>'[0-9]{3,6}', 'title'=>'amount should be not less than 3 digits but not above 6']) }}
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group has-primary has-feedback">
                                    {{ Form::select('year_id', $years, null, ['class' => 'form-control', 'placeholder' => 'Select year']) }}
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