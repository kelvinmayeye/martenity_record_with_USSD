@extends('layouts.master')
@section('page_title', 'All Reports')
@section('content')
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">All Reports</h5>
    </div>

    <div class="card-body">
        <table id="example" class="table table-striped table-bordered grid" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="">Sub Complication</th>
                    <th scope="col">Issue</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pregnantReport as $key => $pregnantReport)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="list-icons text-center">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a href="#" data-toggle="modal" data-target="#Modal"
                                            class="dropdown-item">
                                            <i class="icon-plus3"></i>Reply</a>

                                        <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg"
                                            class="dropdown-item">
                                            <i class="icon-pencil7"></i>View Reply</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
