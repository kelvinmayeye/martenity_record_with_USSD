<!-- Add Pregnant maternity -->
<div class="modal fade" id="{{ $maternityPregnant->id }}PregnantComplication" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Complication for
                    {{ $maternityPregnant->maternityPatient->fullname }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('add/pregnant/complication') }}" method="POST">
                    @csrf
                    <input type="hidden" name="maternity_pregnant_id" value="{{ $maternityPregnant->id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Complication <span class="text-danger">*</span></label>
                                <select class="form-control" name="maternity_type" required>
                                    <option selected disabled>Select complication</option>
                                    @foreach ($subComplications as $subComplication)
                                        <option value="{{ $subComplication->id }}">{{ $subComplication->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <input class="btn btn-primary mr-3" type="submit" value="Save">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
