@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $technology->id }}</h1>
    <p class="mt-4">{{ $technology->name }}</p>
    <p class="mt-4">{{ $technology->slug }}</p>
@endsection