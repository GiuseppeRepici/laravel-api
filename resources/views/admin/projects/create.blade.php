@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <form action="{{ route('admin.projects.store') }}" method="POST">

        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
            @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">descrizione</label>
            <input type="text-area" name="description" class="form-control" id="description" value="{{ old('description') }}">
        </div>
        
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
</div>
@endsection