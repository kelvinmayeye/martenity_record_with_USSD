<div class="modal fade" id="editInstallmentModal{{ $payment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Installment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('edit/'.$payment->id.'/installment') }}" method="POST">
            @csrf
            <input type="hidden" name="payment_id" value="{{ $payment->id }}">
            <div class="form-group">
              <label class="col-form-label">Recipient No:</label>
              <input type="text" maxlength="4" name="receipt_no" value="{{ $payment->receipt_number }}" class="form-control" pattern="[0-9]+" maxlength="4" title="numbers only max 4">
            </div>
            <div class="form-group">
                <label class="col-form-label">Amount:</label>
                <input type="text" name="amount" value="{{ $payment->amount }}" class="form-control" pattern="[0-9,]+" title="Numbers only">
              </div>
            <div class="form-group">
              <label class="col-form-label">Description:</label>
              <textarea name="description" class="form-control">{{ $payment->description }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
