@extends('layout.main')

@section('contenu')
            <!-- Contenu principal -->
            <div class="col-md-9">
                <!-- Détails du livre -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card mb-3">
                        <h5>Synopsis :</h5>
                        <a href="{{route('summaries.show',['summary'=>$summary->slug])}}">
                        <h2 class="card-title">{{$summary->title}}</h2>
                        </a>
                        <p class="card-text">
                        {{$summary->content}}
                        </p>
                        <p class="text-muted">
                            Publié par : <a href="#">{{$summary->user->name}}</a> - Inscrit le {{$summary->user->created_at->isoFormat('LLL')}}<br>
                            Article posté : {{ $summary->created_at->isoFormat('LLL') }} - 7 Commentaire(s)
                        </p>
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

                <!-- Formulaire pour ajouter un commentaire -->
                @auth
                    <form action="" method="POST" class="mt-4">
                        @csrf
                        <div class="form-group">
                            <label for="comment">Laisser un commentaire</label>
                            <textarea name="content" id="comment" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                @else
                    <p class="mt-4">Pour laisser un commentaire, <a href="{{ route('login.login') }}">connectez-vous</a> ou <a href="{{ route('register.register') }}">inscrivez-vous</a>.</p>
                @endauth
            </div>
        </div>
    </div>

    @endsection
