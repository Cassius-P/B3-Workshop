@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" justify-content-center">
        <div class="jumbotron my-5" style="background-color:#473c38;">
            <h1 class="display-4" style="color:#f0c300">{{$idee->title}}!</h1>
            <hr class="my-4" style="background-color:var(--light)">
            <div class="row container d-flex pt-2">
                <div class="col-lg-8 d-flex flex-column">
                    <p style="color:var(--light)">{{$idee->description}}</p>
                </div>
                <div class="card  col-lg-4 border-marron  bg-transparent mb-3" style="max-width: 18rem;" >
                    <div class="card-body bg-transparent">
                        <h5 class="card-title" style="color:white">Pensée par {{$idee->user}}</h5>
                        <p class="card-text" style="color:white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent border-marron d-flex justify-content-around align-items-center text-align-center">
                        <span style="color:white">{{$idee->vote}}<span>&nbsp;likes</span></span>
                        @if($liked == false)
                            <button id="buttonLike" type="button" data-idea="{{$idee->id}}" data-user="{{$idee->user_id}}" class="btn bg-ambre btn-success border-ambre" style="color:white">
                                <span class="btn-label"><i class="fa fa-heart" aria-hidden="true"></i></span>J'aime !
                            </button>
                        @else
                            <button id="buttonLike" type="button" data-idea="{{$idee->id}}" data-user="{{$idee->user_id}}" class="btn bg-ambre btn-success border-ambre" style="color:white" disabled>
                                <span class="btn-label"><i class="fa fa-heart" aria-hidden="true"></i></span>J'aime !
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
