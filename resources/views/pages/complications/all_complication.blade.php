@extends('layouts.master')
@section('page_title', 'All Complication')
@section('content')


    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">All Complication</h5>
        </div>

        <div class="card-body">
            <table id="example" class="table table-striped table-bordered grid" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Sub Complication</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complications as $key => $complication)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $complication->name }}</td>
                            <td>{{ $complication->maternity_type }}</td>
                            <td>
                                {{ $complication->subComplications->count() }}
                                {{ Str::plural('sub complication', $complication->subComplications->count()) }}
                            </td>
                            <td>
                                <div class="list-icons text-center">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left">
                                            <a href="#" data-toggle="modal"
                                                data-target="#{{ $complication->id }}Complication" class="dropdown-item">
                                                <i class="icon-plus3"></i>sub complication</a>
                                            <a href="#" data-toggle="modal"
                                                data-target="#" class="dropdown-item">
                                                <i class="icon-plus3"></i>view complications</a>
                                        </div>
                                    </div>
                                </div>
                                @include('partials.modals.add_sub_complication')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
