@extends('layouts.app')

@section('extraTop')
    <link href="{{ asset('css/style2.scss') }}" rel="stylesheet">
@endsection

@section('extraBottom')

@endsection

@section('content')
<div class="container w-75 p-3">
    <div class="row">

        <div class="col-md-6 pb-2">

            <div class="mx-auto">
                <h2 class="text-center pt-1 pb-3">Proposez votre idée :</h2>
                <div class="border-custom p-4">
                    {{json_encode($affichage)}}
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" placeholder="Titre">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Décrivez-nous votre idée avec le plus de précision possible..." rows="12"></textarea>
                        </div>
                    </form>
                    <div class="text-center">
                        <button href="" class="btn btn-brown">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mx-auto">
                <h2 class="text-center pt-1 pb-3">Liste des propositions déjà émises :</h2>
                <div class="owl-carousel">
                    @foreach($affichage as $key => $cat)
                        <div class="vertical-scrollable">
                            <div class="row text-center">
                                <!-- La card ci-dessous est celle à utiliser (pour en générer plusieurs), les autres servent simplement d'exemple pour le scrolling. -->
                                <div class="card mb-3 w-100">
                                    <h5 class="card-header bg-ambre">{{$key}}</h5>
                                    <div class="card-body">

                                        <div class="text-right">
                                            <a href="/{{$key}}" class="btn btn-brown">Détails...</a>
                                        </div>
                                    </div>
                                </div>
                            <!------------------------------->
                                @for($i = 0; $i < count($cat); $i++)
                                    <div class="card mb-3 w-100">
                                        <h5 class="card-header">{{$cat[$i]->title}}</h5>
                                        <div class="card-body">
                                            <p class="card-text">
                                                {{$cat[$i]->description}}
                                            </p>
                                            <a href="{{$key}}/{{$cat[$i]->id}}" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
