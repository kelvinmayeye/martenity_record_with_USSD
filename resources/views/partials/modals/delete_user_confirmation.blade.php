<!--The modal-->
<div class="modal fade" id="confirm{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('delete') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Are you sure you want to delete<br>{{ $user->fullname }}</h3>
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                        </div>

                        <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-secondary btn-sm mx-2"
                                data-dismiss="modal">No</button>
                            <input type="submit" value="Yes" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!----End Modal------>
