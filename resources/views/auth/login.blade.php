@extends('layouts.login_master')

@section('content')
    <div class="page-content login-cover">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <form class="login-form " method="post" action="{{ url('login') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Login to your account</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                                @if (Session::has('error'))
                                <div class="alert alert-danger alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <span class="font-weight-semibold">{{session::get('error')}}</span>
                                </div>
                                @endif


                            <div class="form-group ">
                                <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Username">
                            </div>

                            <div class="form-group ">
                                <input required name="password" type="password" class="form-control" placeholder="Password">

                            </div>

                            {{-- <div class="form-group d-flex align-items-center">

                                <a href="" class="ml-auto">Forgot password?</a>
                            </div> --}}

                            <div class="form-group">
                                <a href="{{ url('home') }}" class="btn btn-primary btn-block">Login <i class="icon-circle-right2 ml-1"></i></a>
                            </div>


                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
    @endsection
