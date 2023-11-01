<!-- Register Maternity -->
<div class="modal fade" id="{{ $maternityPatient->id }}Modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Maternity Pregnant Informations for
                    {{ $maternityPatient->fullname }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('register/maternity/pregnant') }}" method="POST">
                    @csrf
                    <input type="hidden" name="patient_id" value="{{ $maternityPatient->id }}">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Maternity Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="maternity_type">
                                    <option selected disabled>Choose ....</option>
                                    <option value="0">Prenatal</option>
                                    <option value="1">Postnatal</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Due Date:</label><span class="text-danger">*</span></label>
                                <input type="date" name="due_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Number of fetuses</label><span class="text-danger">*</span></label>
                                <input type="number" name="num_fetuses" class="form-control">
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
