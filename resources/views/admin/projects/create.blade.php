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
        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select class="form-select" id="type" name="type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <h5>Seleziona le tecnologie</h5>
            @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" name="technologies[]" type="checkbox" value="{{ $technology->id }}"
                        id="technology-{{ $technology->id }}" @checked(in_array($technology->id, old('technologies',[])))>
                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label for="description">descrizione</label>
            <input type="text-area" name="description" class="form-control" id="description" value="{{ old('description') }}">
        </div>
        
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
</div>
@endsection