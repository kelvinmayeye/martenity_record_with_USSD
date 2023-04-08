@extends('layout.master')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Maternity Pregnant</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ url('patient/register') }}" class="btn btn-sm btn-outline-secondary">Register</a>
                <a href="{{ url('all/patients') }}" type="button" class="btn btn-sm btn-outline-secondary">All Patients</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">Occupation</th>
            <th scope="col">Delivered</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Created</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($maternityPregnants as $maternityPregnant)
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</main>
@endsection
