@extends('layouts.app')

@section('extraTop')
<link href="{{ asset('css/style2.scss') }}" rel="stylesheet">
@endsection

@section('extraBottom')

@endsection

@section('content')
<div class="container col-lg-9 col-md-9 col-sm-12 pt-3">
    <div class="row">
        <div class="col-md-6 pb-2">
            <div class="mx-auto">
                <h2 class="text-center pt-1 pb-3">Proposez votre idée :</h2>
                <div class="border-custom p-4">
                    @if(isset($id))
                        <form method="POST" action="" id="formIdea" data-user="{{$id}}">
                    @else
                        <form method="POST" action="" id="formIdea">
                    @endif
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" id="title" placeholder="Titre">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="c"
                                    placeholder="Décrivez-nous votre idée avec le plus de précision possible..."
                                    rows="12"></textarea>
                            </div>
                            <div class="text-center">
                                <button id="buttonIdea" class="btn btn-brown">Envoyer</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mx-auto h-100">
                <h2 class="text-center pt-1 pb-3">Liste des propositions déjà émises :</h2>
                <div class="owl-carousel owl-theme h-100">
                    @foreach($affichage as $key => $cat)
                    <div class="vertical-scrollable h-100">
                        <div class="row text-center">
                            <!-- La card ci-dessous est celle à utiliser (pour en générer plusieurs), les autres servent simplement d'exemple pour le scrolling. -->
                            <div class="card mb-3 w-100">
                                <div class="card-header bg-ambre">
                                    <div class="row justify-content-center " style="color:white;">
                                        <div class="col-xs-1">
                                            <h5 style="padding-top: 6px;">{{$key}}</h5>
                                        </div>
                                        <div class="col-xs-1 more-details-cat">
                                            <a href="/{{$key}}">Plus...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!------------------------------->
                            @for($i = 0; $i < count($cat); $i++)
                                <div class="card mb-3 w-100">
                                    <h5 class="card-header">{{$cat[$i]->title}}</h5>
                                    <div class="card-body" style="padding-bottom: 30px;">
                                        <p class="card-text">
                                            {{$cat[$i]->description}}
                                        </p>
                                        <div class="row more-details-description">
                                            <a href="{{$cat[$i]->slug}}/{{$cat[$i]->id}}">Plus...</a>
                                        </div>
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


@endsection
