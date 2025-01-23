@extends('layout.main')

@section('contenu')
<div class="container mt-4">

            

            <!-- Contenu principal -->
            <div class="col-md-9">

                @foreach ($summaries as $summary )
                                <!-- Liste des synopsis -->
                <div class="card mb-3">
                        <h5>Synopsis :</h5>
                        <a href="{{route('summaries.show',['summary'=>$summary->slug])}}">
                        <h2 class="card-title">{{$summary->title}}</h2>
                        </a>
                        <p class="card-text">
                        {{Str::limit($summary->content)}}
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
                @endforeach

                <div class="pagination">  {{ $summaries->links() }} </div>


    </div>


@endsection

