@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')

    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{ $undeliveredPatients->count() }}</h3>
                        <span class="text-uppercase font-size-xs font-weight-bold">Total Prenatal</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-users4 icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{ $unattendedReports->count() }}</h3>
                        <span class="text-uppercase font-size-xs">Unattened Reports</span>
                    </div>

                    <div class="ml-3 align-self-center">
                        <i class="icon-server icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-cash3 icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ $weeklyReport->count() }}</h3>
                        <span class="text-uppercase font-size-xs">Weekly Reported</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-indigo-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-bus icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ $unattendedReports->count() }}</h3>
                        <span class="text-uppercase font-size-xs">Unattendend Reports</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
