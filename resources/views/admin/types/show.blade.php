@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $type->id }}</h1>
    <p class="mt-4">{{ $type->type }}</p>
@endsection