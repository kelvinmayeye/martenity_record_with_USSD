@extends('layouts.master')
@section('page_title', 'Add Patient')
@section('content')

    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Please fill the form below to add Patient Information</h6>
        </div>

        <div class="p-3">
            <form action="{{ url('patient/register') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Firstname</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Middlename</label>
                        <input type="text" class="form-control" name="middlename" placeholder="Middlename">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Lastname</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
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
                        <input type="text" class="form-control" name="PhoneNumber" maxlength="10"
                            placeholder="eg. 255672900123">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

@endsection
