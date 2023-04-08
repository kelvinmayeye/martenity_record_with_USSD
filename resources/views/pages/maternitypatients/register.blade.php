@extends('layout.master')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2 mx-auto">Register Patients</h1>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Middlename</label>
                    <input type="text" class="form-control" name="middlename" placeholder="Firstname">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Firstname">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Occupation</label>
                    <input type="text" class="form-control" name="occupation" placeholder="eg.Teacher">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Blood Group</label>
                    <select id="inputState" name="blood_group" class="form-control">
                        <option selected>Choose...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Date Of Birth</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="form-group col-md-6">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="PhoneNumber" placeholder="eg. 078212000">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </main>
@endsection
