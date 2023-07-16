@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ __('Add Employee') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter First name">
                                @error('first_name')
                                    <div class="alert alert-danger mt-1 mb-1 p-0">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter Last name">
                                @error('last_name')
                                    <div class="alert alert-danger mt-1 mb-1 p-0">{{ $message }}</div>
                                @enderror
                            </div>
                            @if (Auth::user()->role === 'manager')
                                <div class="form-group mb-3">
                                    <label for="position">Position</label>
                                    <select class="form-select" id="position" name="position"
                                        aria-label="Default select position">
                                        <option value="" hidden>Select Position</option>
                                        @foreach ($positions as $item)
                                            <option value="{{ $item }}">{{ ucwords(str_replace('_', ' ', $item)) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('position')
                                        <div class="alert alert-danger mt-1 mb-1 p-0">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            <button type="submit" class="btn btn-success btn-sm" style="float: right;">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
