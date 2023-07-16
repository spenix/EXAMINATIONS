@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Employee List') }}
                        <span style="float: right;">
                            <a href="home">Return to
                                Home Page</a>
                        </span>
                    </div>

                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session()->get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Position</th>
                                    <th>Create Date</th>
                                    <th width="15%"><a type="button" class="btn btn-success btn-sm"
                                            href="{{ route('employees.create') }}">Add</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                        <td>{{ ucwords(str_replace('_', ' ', $employee->position)) }}</td>
                                        <td>{{ $employee->create_date }}</td>
                                        <td width="15%">
                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="Post">
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $employees->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
