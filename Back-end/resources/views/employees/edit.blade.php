@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit Employee') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.update', $Employee->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-2">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" id="first_name"
                                    value="{{ $Employee->first_name }}" name="first_name" placeholder="Enter First name">
                                @error('first_name')
                                    <div class="alert alert-danger mt-1 mb-1 p-0">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" value="{{ $Employee->last_name }}"
                                    name="last_name" placeholder="Enter Last name">
                                @error('last_name')
                                    <div class="alert alert-danger mt-1 mb-1 p-0">{{ $message }}</div>
                                @enderror
                            </div>
                            @if (Auth::user()->role === 'manager')
                                <div class="form-group mb-2">
                                    <label for="position">Position</label>
                                    <select class="form-select" id="position" name="position"
                                        value="{{ $Employee->position }}" aria-label="Default select position">
                                        <option value="" hidden>Select Position</option>
                                        @foreach ($positions as $item)
                                            <option value="{{ $item }}"
                                                {{ $Employee->position === $item ? 'selected' : '' }}>
                                                {{ ucwords(str_replace('_', ' ', $item)) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('position')
                                        <div class="alert alert-danger mt-1 mb-1 p-0">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif
                            <button type="submit" class="btn btn-success btn-sm" style="float: right;">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
