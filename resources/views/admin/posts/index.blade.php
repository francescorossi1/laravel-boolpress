@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Autore</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
                <th scope="col">Data Creazione</th>
                <th scope="col">Ultima Modifica</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>
                    @if( $post->user )
                    <span>{{ $post->user->name }}</span>
                    @else
                    N/A
                    @endif
                </td>
                <td>{{ $post->title }}</td>
                <td>
                    @if( $post->category )
                    <span class="badge badge-pill badge-{{ $post->category->color }}">{{ $post->category->label
                        }}</span>
                    @else
                    Nessuna
                    @endif
                </td>
                <td>
                    @forelse($post->tags as $tag)

                    <!-- TODO tag color -->
                    <span class="badge badge-pill">{{ $tag->label }}</span>
                    @empty
                    Nessuno
                    @endforelse
                </td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td class="d-flex">
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Dettagli</a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning ml-2">Modifica</a>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-end d-flex mt-5">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Aggiungi</a>
    </div>
</div>
@endsection