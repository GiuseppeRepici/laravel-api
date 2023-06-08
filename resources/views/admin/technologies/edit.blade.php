@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="name">Nome tecnologia</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $technology->name)  }}">
            @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
</div>
@endsection