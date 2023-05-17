@extends('layouts.master')
@section('page_title', 'Add Specialization')
@section('content')

    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-header bg-white header-elements-inline">
                    <h6 class="card-title">Add Specialization</h6>
                </div>

                <div class="p-3">
                    <form action="{{ url('add/specialization') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="">Tilte</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="">Maternity Type</label>
                                <textarea name="description" cols="30" rows="4" class="form-control"
                                    placeholder="Description about the specialization"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
