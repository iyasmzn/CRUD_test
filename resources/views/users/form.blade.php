@extends('layout.app')

@section('title', isset($data) ? 'Edit' : 'Create')

@section('content')
@php
    $route = isset($data) ? route('users.update', ['id' => $data->id]) : route('users.createPost'); 
@endphp
<form action="{{ $route }}" class="m-5">
    @csrf
    <div class="mb-4">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" name="name" id="nameInput" class="form-control" value="{{ $data->name ?? '' }}">
    </div>
    <div class="mb-4">
        <label for="emailInput" class="form-label">Email</label>
        <input type="email" name="email" id="emailInput" class="form-control" value="{{ $data->email ?? '' }}">
    </div>
    @if (empty($data))
        <div class="mb-4">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" name="password" id="passwordInput" class="form-control" value="">
        </div>
    @endif
    <div>
        <button class="btn btn-primary">Back</button>
        <button class="btn btn-success">Update</button>
    </div>
</form>

@endsection