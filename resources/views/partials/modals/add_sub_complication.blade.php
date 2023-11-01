<div class="modal fade" id="{{ $complication->id }}Complication" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Sub Complication for {{ $complication->name }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('add/sub') }}" method="POST">
                    @csrf
                    <input type="hidden" name="complication_id" value="{{ $complication->id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control">
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
