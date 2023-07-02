<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('all/users') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="">Firstname</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Firstname"
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Middlename</label>
                            <input type="text" class="form-control" name="middlename" placeholder="Middletname">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="">Sex</label>
                            <select name="sex" class="form-control" required>
                                <option selected disabled>Select...</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email"
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number"
                                placeholder="Enter phone number" pattern="^[0-9]*$" maxlength="10">
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
