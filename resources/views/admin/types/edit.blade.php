@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type', $type->type)  }}">
            @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
</div>
@endsection