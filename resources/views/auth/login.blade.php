@extends('layout.main')

@section('contenu')



            <!-- Formulaire de connexion -->
            <div class="col-md-9">
                <h2>Connexion</h2>
                <form action="{{ route('login.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" required>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </form>

                <div class="mt-3">
                <a href="{{ route('forgot.index') }}">Mot de passe oublié</a>
                    <a href="{{ route('register.index') }}">Je n'ai pas encore de compte</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
