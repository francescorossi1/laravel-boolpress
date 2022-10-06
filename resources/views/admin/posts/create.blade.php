@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea un nuovo Post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <!-- Title -->
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci un titolo" name="title"
                value="{{ old('title') }}">
        </div>

        <!-- Category select -->
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" id="category_id" name="category_id">
              <option value="">Nessuna categoria</option>
              @foreach ($categories as $category)
                  <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->label }}</option>
              @endforeach
            </select>
          </div>
        
        <!-- Tag checks -->
        @if(count($tags))
        <div class="check-list">
            @foreach($tags as $tag)
            <div class="form-check form-check-inline">
                
                <!-- TODO old -->
                <input class="form-check-input" type="checkbox" id="tag-{{ $tag->label }}" value="{{ $tag->id }}" name="tags[]" >
                <label class="form-check-label" for="tag-{{ $tag->label }}">{{ $tag->label }}</label>
              </div>
            @endforeach
        </div>
        @endif

        <!-- Content textarea -->
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" rows="8" id="content" name="content">{{ old('content') }}</textarea>
        </div>

        <!-- Url -->
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="url" class="form-control" id="image" name="image" value="{{ old('image') }}">
        </div>

        <!-- Buttons -->
        <button type="submit" class="btn btn-success">Invia</button>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary ml-2">Torna Indietro</a>
    </form>
</div>
@endsection