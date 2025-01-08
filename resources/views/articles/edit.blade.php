@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'article</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="content">Contenu</label>
                <textarea name="content" class="form-control" id="content" rows="5" required>{{ $article->content }}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="image">Image (optionnel)</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Mettre à jour</button>
        </form>
    </div>
@endsection
