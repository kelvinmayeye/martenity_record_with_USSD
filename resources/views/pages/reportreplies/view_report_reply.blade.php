@extends('layouts.master')
@section('page_title', 'View Reply')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">View Reply</h5><br>
            <h5>Report Issue: <strong>{{ $report->issue }}</strong></h5>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered grid" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Message</th>
                        <th scope="col">Replied at</th>
                        <th scope="col">Specialist</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ( $replies as $key=>$reply )
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $reply->message }}</td>
                        <td>{{ $reply->created_at->diffForHumans() }}</td>
                        <td>Dr. {{ $reply->specialist->user->first_name }} 
                            {{ $reply->specialist->user->last_name }}</td>
                    </tr>
                    @endforeach
        </div>
    </div>
@endsection
