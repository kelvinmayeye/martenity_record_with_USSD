<div class="modal fade" id="addTransportRateModal{{$academicGradeStudent->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Route Amount</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => 'add-transport-rate']) !!}
            {{ Form::hidden('academicstudent_id', $academicGradeStudent->id) }}
              <div class="row">
                  <div class="col-md-6 col-sm-12">
                      <div class="form-group has-success has-feedback">
                          {{ Form::text('rate', null, ['class' => 'form-control', 'placeholder' => 'tranport rate',
                          'required' => 'required', 'maxlength' => '11', 'pattern'=>'[0-9]+','title'=>'numeric only 0-9']) }}
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                      <div class="form-group has-primary has-feedback">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'route name',
                        ]) }}
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
