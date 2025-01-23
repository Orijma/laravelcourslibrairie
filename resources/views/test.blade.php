@extends('layout.main')

@section('contenu')
<div class="container mt-4">

            

            <!-- Contenu principal -->
            <div class="col-md-9">
                <!-- Liste des synopsis -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Synopsis :</h5>
                        <h2 class="card-title">Titre du livre</h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse...
                        </p>
                        <p class="text-muted">
                            Publié par : <a href="#">Thierry Vosgiens</a> - Inscrit le 11/04/2021<br>
                            Article posté : il y a X jour(s) - 7 Commentaire(s)
                        </p>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Synopsis :</h5>
                        <h2 class="card-title">Titre du livre</h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse...
                        </p>
                        <p class="text-muted">
                            Publié par : <a href="#">Thierry Vosgiens</a> - Inscrit le 11/04/2021<br>
                            Article posté : il y a X jour(s) - 7 Commentaire(s)
                        </p>
                        <button class="btn btn-warning btn-sm">Modifier</button>
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </div>
                </div>

                <!-- Section des commentaires -->
                <div class="card mb-3">
                    <div class="card-header">
                        Commentaire(s) posté(s)
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse...</p>
                        <button class="btn btn-primary btn-sm">Laisser un commentaire</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

