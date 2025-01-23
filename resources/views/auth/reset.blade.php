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
                <form action="" method="POST">
                    @csrf
                    


                    <input type="hidden" name="token" value="{{$password_reset->token}}">  </input>


                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confpassword">Confirm Mot de passe :</label>
                        <input type="confpassword" class="form-control" id="confpassword" name="confpassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Mot de passe</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
