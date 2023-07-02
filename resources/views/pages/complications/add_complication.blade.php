@extends('layouts.master')
@section('page_title', 'Add Complication')
@section('content')

    <div class="card">
        <div class="card-header bg-white header-elements-inline">
            <h6 class="card-title">Enter Complication Name</h6>
        </div>

        <div class="p-3">
            <form action="{{ url('add/complication') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Complication name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Maternity Type</label>
                        <select name="type" class="form-control">
                            <option selected disabled>Select type</option>
                            <option value="prenatal">prenatal</option>
                            <option value="postnatal">postnatal</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection
