          
@extends('layout.main')
@section('contenu')
          
          <!-- Formulaire d'ajout -->
           <!--<div class="col-md-9">
                <div class="alert alert-success" role="alert">
                    Synopsis correctement enregistré
                </div>-->

                <form action="{{ route('summaries.update', $summary->slug) }}" method="POST">
                @csrf
                @method('PUT') 
    
    <div class="mb-3">
        <label for="titre" class="form-label">Titre de l'ouvrage :</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$summary->title}}">
    </div>

    <div class="mb-3">
        <label for="synopsis" class="form-label">Synopsis :</label>
        <textarea class="form-control" id="content" name="content" rows="5">{{$summary->content}}</textarea>
    </div>

    <div class="mb-3">
        <label for="categorie" class="form-label">Catégorie :</label>
        <select class="form-select" id="category_id" name="category_id">
            <option value="{{$summary->category->id}}" selected>{{$summary->category->title}}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{$category->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('summaries.index') }}" class="btn btn-primary">Retour</a>
        <button type="submit" class="btn btn-success">Modifier</button>
    </div>
</form>
            </div>
        </div>
    </div>
@endsection