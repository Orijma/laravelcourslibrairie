@extends('layout.main')


@section('contenu')


            <!-- Formulaire d'inscription -->
            @if(session('info'))
            <div class="col-md-9">
                    <div class="alert alert-success">
                            {{ session('info') }}
                    </div>
            @endif
                <h2>Inscription</h2>
                <form action="{{route('register.register')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" class="form-control" id="name" name="name" required> 
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Inscription</button>
                </form>
                <p class="mt-3">
                    <a href="#">J'ai déjà un compte</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
