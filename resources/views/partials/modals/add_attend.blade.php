<!-- Add Maternity  Attendence-->
<div class="modal fade" id="{{ $maternityPregnant->id }}Attend" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attendence Records</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('maternity/attendence') }}" method="POST">
                    @csrf
                    <input type="hidden" name="maternity_pregnant_id" value="{{ $maternityPregnant->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Maternity Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="maternity_type" required>
                                    <option selected disabled>Select....</option>
                                    <option value="Prenatal">Prenatal</option>
                                    <option value="Postnatal">Postnatal</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>weight:</label><span class="text-danger"></span></label>
                                <input type="text" name="weight" class="form-control"
                                    pattern="^\d{1,3}(\.\d{1,2})?$" placeholder="eg.78.09">

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label><span class="text-danger"></span></label>
                                <textarea name="description" cols="10" rows="3" class="form-control"></textarea>
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
