<div class="container">
<nav class="navbar navbar-expand-lg navbar-black bg-black drop-shadow">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" styl="font-size: 20px" href="{{ url('/') }}">YourBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; font-size: 20px"  href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; font-size: 20px"  href="{{ route('articles.index') }}">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; font-size: 20px"  href="{{ route('articles.create') }}">Ajouter un Article</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline; font-size: 20px">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="display: inline; color: white; font-size: 20px">Se Déconnecter</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; font-size: 20px" href="{{ route('login') }}">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; font-size: 20px" href="{{ route('register') }}">S'inscrire</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

</div>