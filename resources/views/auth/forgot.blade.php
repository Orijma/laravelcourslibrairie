@extends('layout.main')

@section('contenu')

            </div>

            <!-- Formulaire de demande -->
            <div class="col-md-9">
                <h2>J'ai oublié mon mot de passe</h2>

                <!-- Message de confirmation -->
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{route('reset.reset')}}" method="POST">
                    @csrf

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Saisir votre email :</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>

                <!-- Liens utiles -->

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
