@extends('layouts.master')
@section('page_title', 'Manage users')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Add User</a>
                    <h4>All Users</h4>
                    <table class="table datatable-button-html5-columns">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Fullname</th>
                                <th>sex</th>
                                <th>Specialist</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->fullname }}</td>
                                    <td>{{ $user->sex }}</td>
                                    <td>
                                        @if (optional($user->specialist)->count() != 0)
                                            {{ $user->specialist->specialization->name }}
                                        @endif
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">

                                                    <a href="" class="dropdown-item" data-toggle="modal"
                                                        data-target="#addUserSpecializationModal{{ $user->id }}">
                                                        <i class="icon-plus2"></i>Specialization</a>


                                                    <a id="" href="#" class="dropdown-item"
                                                        data-toggle="modal" data-target="#confirm{{ $user->id }}"><i
                                                            class="icon-trash"></i> Delete</a>

                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    @include('partials.modals.add_user_specialization')
                                    @include('partials.modals.delete_user_confirmation')
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @include('partials.modals.add_user')

@endsection
