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
                                <i class="rounded-round p-3">
                                    <img src="{{ asset('global_assets/images/logo.png') }}" width="150" height="130"
                                        alt="">
                                </i>
                                <h5 class="mb-0">Login to your account</h5>
                                <span class="d-block text-muted">Your credentials</span>
                            </div>

                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <span class="font-weight-semibold">{{ session::get('error') }}</span>
                                </div>
                            @endif


                            <div class="form-group ">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="email">
                            </div>

                            <div class="form-group ">
                                <input required name="password" type="password" class="form-control" placeholder="Password">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Login <i
                                        class="icon-circle-right2 ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>
@endsection
