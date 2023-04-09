<!-- The modal -->
<div class="modal fade" id="flipFlop{{ $academicGradeStudent->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Installment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url' => 'add-installment', 'method' => 'POST']) }}
                <input type="hidden" name="academic_year_id" value="{{$academicGradeStudent->id }}" hidden>
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <label>Amount</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="amount" pattern="[0-9]+"
                                title="Numbers only" required>
                            <div class="input-group-append">
                                <span class="input-group-text">Tsh</span>
                                <span class="input-group-text">000</span>
                            </div>
                        </div>
                    </div>
                    <div class="row m-1">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Receipt Number</label>
                                <input type="text" class="form-control" pattern="[0-9]+" maxlength="4" title="numbers only max 4" name="receipt_number">
                                <span class="help-block text-danger">
                                    Reqired</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Date Paid</label>
                                <input type="date" class="form-control" name="paid_at" required>
                                <span class="help-block text-danger">
                                    Required</span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Bank</label>
                                <select class="form-control" name="bank">
                                    <option disabled selected>Select bank </option>
                                    <option value="CRDB">CRDB</option>
                                    <option value="NMB">NMB</option>
                                    <option value="TRANSFER">TRANSFER</option>
                                </select>
                                <span class="help-block text-danger">
                                    Reqired</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea rows="4" class="form-control" name="description"></textarea>
                            <span class="help-block text-success">
                                optional</span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input class="btn btn-primary mr-3" type="submit" value="Add" name="add">
                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!---- End Modal  ------>
