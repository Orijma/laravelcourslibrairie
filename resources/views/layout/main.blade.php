<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les libraires associés</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Les libraires associés</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>

                @if(Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login.index')}}">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register.index')}}">Inscription</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#">Mon Compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('summaries.create')}}">Publication</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout.logout')}}">Déconnexion</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>


    @include('includes.sidebar')
    @yield( 'contenu')
    
    <!-- Pied de page -->
    <footer class="text-center mt-4 py-3 bg-light">
        <small>© xxxx Formation LARAVEL version x - Les Libraires Associés</small>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
