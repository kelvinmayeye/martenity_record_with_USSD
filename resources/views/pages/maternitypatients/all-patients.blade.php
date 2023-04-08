@extends('layout.master')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">All Patients</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ url('patient/register') }}" class="btn btn-sm btn-outline-secondary">register</a>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <table class="table table-bordered">
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
            @foreach ($maternityPatients as $key=>$maternityPatient)
            <tr>
              <th scope="row">{{ $key+1 }}</th>
              <td>{{ $maternityPatient->fullname }}</td>
              <td>{{ $maternityPatient->age }}</td>
              <td>{{ $maternityPatient->occupation }}</td>
              <td>{{ $maternityPatient->blood_group }}</td>
              <td>{{ $maternityPatient->phone_number }}</td>
              <td></td>
            </tr>
            @endforeach
        </tbody>
      </table>
</main>
@endsection
