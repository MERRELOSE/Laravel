@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p><strong>Publié le :</strong> {{ $article->created_at->format('d/m/Y H:i') }}</p>
        <p>{{ $article->content }}</p>

        @if ($article->image)
            <div>
                <img src="{{ asset('storage/'.$article->image) }}" alt="Image de l'article" class="img-fluid">
            </div>
        @endif

        <div class="mt-4">
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
@endsection
