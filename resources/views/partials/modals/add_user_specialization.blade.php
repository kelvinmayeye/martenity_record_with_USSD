<div class="modal fade" id="addUserSpecializationModal{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Users Specialization</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('add/user/specialization') }}" method="POST">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="form-group col-md-4">
                            <label for="">Firstname</label>
                            <input type="text" class="form-control" value="{{ $user->first_name }}" readonly
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Middlename</label>
                            <input type="text" class="form-control" value="{{ $user->middle_name }}" readonly
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" value="{{ $user->last_name }}" readonly required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="">Sex</label>
                            <select name="sex" class="form-control" required>
                                <option selected disabled>Select...</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="">Specialization</label>
                            <select name="specialization" class="form-control">
                                <option selected disabled>Choose Sepecialization</option>
                                @foreach ($specializations as $specialization)
                                    <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
