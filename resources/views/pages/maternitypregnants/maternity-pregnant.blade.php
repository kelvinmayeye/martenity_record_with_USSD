@extends('layouts.master')
@section('page_title', 'All Maternity Records')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Maternity Records</h5>
        </div>

        <div class="card-body">
            <table id="example" class="table table-striped table-bordered grid" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Type</th>
                        <th scope="col">Del Date</th>
                        <th scope="col">Fetuses</th>
                        <th scope="col">Created</th>
                        <th scope="col">Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($maternityPregnants as $key => $maternityPregnant)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $maternityPregnant->maternityPatient->fullname }}</td>
                            <td>
                                @if ($maternityPregnant->is_delivered == 0)
                                    {{ 'Prenatal' }}
                                @else
                                    {{ 'Postnatal' }}
                                @endif
                            </td>
                            <td>{{ $maternityPregnant->due_date }}</td>
                            <td>{{ $maternityPregnant->num_fetuses }}</td>
                            <td>{{ $maternityPregnant->created_at->diffForHumans() }}</td>
                            <td>{{ $maternityPregnant->maternityPatient->phone_number }}</td>
                            <td>
                                <div class="list-icons text-center">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left">
                                            <a href="#" data-toggle="modal"
                                                data-target="#{{ $maternityPregnant->id }}Attend" class="dropdown-item">
                                                <i class="icon-plus3"></i>Attend</a>

                                            <a href="#" data-toggle="modal"
                                                data-target="#{{ $maternityPregnant->id }}PregnantComplication" class="dropdown-item">
                                                <i class="icon-plus3"></i>Complication</a>
                                        </div>
                                    </div>
                                </div>
                                @include('partials.modals.add_attend')
                                @include('partials.modals.add_maternity_complication')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
