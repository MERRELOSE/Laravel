@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Créer un nouvel article</a>

        <table class="table mt-4">
            <thead class="table table-dark">
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($article->content, 50) }}</td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
