@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $project->name }}</h1>
    <div class="text-end">
        {{ $project->slug }}
    </div>
    <p class="mt-4">{{ $project->description }}</p>
    <div class="text-end">
        @if ($project->type)
            <span>Categoria: {{ $project->type->type }}</span>
        @else
            <span>Nessuna categoria</span>
        @endif
    </div>
@endsection