@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $project->name }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" value="{{ $project->slug }}" >
            </div>
            <div class="form-group">
                <label for="description">descrizione</label>
                <input type="text-area" name="description" class="form-control" id="description" value="{{ $project->description }}" >
            </div>
            
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection