@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $project->name)  }}">
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
                        <option @selected($type->id == old('type_id',$project->type?->id)) value="{{ $type->id }}">{{ $type->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">descrizione</label>
                <input type="text-area" name="description" class="form-control" id="description" value="{{ old('description', $project->description) }}" >
            </div>
            
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection