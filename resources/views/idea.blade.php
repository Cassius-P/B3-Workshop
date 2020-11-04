@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="container-titre text-center border-custom">
                <h1>{{$idee->title}}</h1>
            </div>
            <section id="about">
            <h2 class="text-center separator">À propos</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">

                            <p> {{$idee->description}}
                            </p>
                            <p>Vous aimez cette idée ? Faites-le nous savoir !</p>
                            <a href=""><img class="like" src={{ asset('/assets/icons/like.png') }}></a>
                            <p class="p-like">Liké par <span id="nb-like">{{$idee->vote}}</span> personne(s)</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection
