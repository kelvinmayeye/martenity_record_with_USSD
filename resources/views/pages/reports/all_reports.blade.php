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
                        <th scope="col">Issue</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pregnantReport as $key => $pregnantReport)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $pregnantReport->maternityPregnant->maternityPatient->fullname }}</td>
                            <td>{{ $pregnantReport->issue }}</td>
                            <td>
                                @if ($pregnantReport->is_attended == 0)
                                    <span class="badge badge-danger">Not Attended</span>
                                @else
                                    <span class="badge badge-success">Attended</span>
                                @endif
                            </td>
                            <td>
                                <div class="list-icons text-center">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left">
                                            @if (auth()->user()->specialist)
                                                <a href="#" data-toggle="modal"
                                                    data-target="#replyReportModal{{ $pregnantReport->id }}"
                                                    class="dropdown-item">
                                                    <i class="icon-plus3"></i>Reply
                                                </a>
                                            @endif
                                            <a href="{{ url('view/replay/'.$pregnantReport->id ) }}" class="dropdown-item">
                                                <i class="icon-pencil7"></i>View Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @include('partials.modals.reply_report')
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
