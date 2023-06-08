@extends('layouts.admin')

@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h1>La lista delle Tecnologie</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <th scope="row">{{ $technology->id }}</th>
                    <td>{{ $technology->name }}</td>
                    <td>{{ $technology->slug }}</td>
                    <td>
                        <a href="" class="btn btn-success">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="">
                            <i class="fa-solid fa-square-pen"></i>
                        </a>
                        <form class="d-inline-block" method="POST" action="">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" >
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection