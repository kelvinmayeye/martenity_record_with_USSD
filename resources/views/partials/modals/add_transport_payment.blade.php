  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$academicGradeStudent->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Transport Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ Form::open(['url' => 'add-transport-payment']) }}
                {{ Form::hidden('academic_grade_student_id', $academicGradeStudent->id) }}
            <div class="row mb-2">
                <div class="col">
                    <select id="inputState" name="yearly_route_id" class="form-control" required>
                      <option selected>Choose Route</option>
                      @foreach ($yearlyRoutes as $yearlyRoute)
                      <option value="{{$yearlyRoute->id}}">{{$yearlyRoute->route->name}}</option>
                      @endforeach
                      
                    </select>
                </div>
                <div class="col">
                  <input type="text" name="amount" class="form-control" pattern="[0-9]+" maxlength="11" title="numbers only" placeholder="Amount" required>
                </div>
                <div class="col">
                  <input type="text" name="receipt_number" class="form-control" pattern="[0-9]+" maxlength="4" title="numbers only max 4" placeholder="Receipt number" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="date" name="paid_at" class="form-control">
                </div>
                <div class="col">
                  <input type="text" name="description" class="form-control" placeholder="short description">
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>