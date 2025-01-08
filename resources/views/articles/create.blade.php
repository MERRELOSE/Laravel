@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un nouvel article</h1>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>

            <div class="form-group mt-3">
                <label for="content">Contenu</label>
                <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-success mt-4">Enregistrer</button>
        </form>
    </div>
@endsection
