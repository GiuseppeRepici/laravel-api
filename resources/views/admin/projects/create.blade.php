@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <form action="{{ route('admin.projects.store') }}" method="POST">

        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug">
        </div>
        <div class="form-group">
            <label for="description">descrizione</label>
            <input type="text-area" name="description" class="form-control" id="description">
        </div>
        
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
</div>
@endsection