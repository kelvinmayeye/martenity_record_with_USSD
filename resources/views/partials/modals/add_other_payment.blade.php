<!-- The modal -->
<div class="modal fade" id="flipFlop{{ $academicGradeStudent->id }}" tabindex="-1" role="dialog"
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
                {{ Form::open(['url' => 'add-payment']) }}
                {{ Form::hidden('academicGradeStudent_id', $academicGradeStudent->id) }}
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Amount</label>
                        {{ Form::text('amount', null, [
                            'class' => 'form-control',
                            'placeholder' => 'amount paid',
                            'required' => 'required',
                            'maxlength' => '11',
                            'pattern' => '[0-9]+',
                            'title' => 'numeric only 0-9',
                        ]) }}
                    </div>
                    <div class="col-md-6">
                        <label for="">Receipt number</label>
                        {{ Form::text('receipt_number', null, [
                            'class' => 'form-control',
                            'placeholder' => 'receipt_number',
                            'required' => 'required',
                            'maxlength' => '4',
                            'pattern' => '[0-9]+',
                            'title' => 'numeric only 1-4',
                        ]) }}
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Item</label>
                            {{ Form::select('item_id', $item, null, ['class' => 'form-control', 'placeholder' => 'Select Item', 'required' => 'required']) }}
                            <span class="text-danger">
                                <small>Required</small></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Date Paid</label>
                            <input type="date" class="form-control" name="paid_at" required>
                            <span class="text-danger">
                                <small>Required</small></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea rows="4" class="form-control" name="description"></textarea>
                            <span class="">
                                <small>optional</small></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input class="btn btn-primary mr-3" type="submit" value="Add" name="add">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!---- End Modal  ------>
