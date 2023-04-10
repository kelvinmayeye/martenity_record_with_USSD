@extends('layouts.master')
@section('page_title', 'All Patients')
@section('content')


    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">All Parents</h5>
        </div>

        <div class="card-body">
            <table id="example" class="table table-striped table-bordered grid" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="">Age</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($maternityPatients as $key => $maternityPatient)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $maternityPatient->fullname }}</td>
                            <td>{{ $maternityPatient->age }}</td>
                            <td>{{ $maternityPatient->occupation }}</td>
                            <td>{{ $maternityPatient->blood_group }}</td>
                            <td>{{ $maternityPatient->phone_number }}</td>
                            <td> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
