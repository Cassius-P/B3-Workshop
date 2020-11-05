@extends('layouts.app')

@section('content')
<div class="container">
    <div class="rox justify-content-center">
        <div class="jumbotron my-5 bg-ambre" style="color:white;">
            <h1 class="display-4" style="color:#f0c300">{{$category->title}}!</h1>
            <hr class="my-4" style="background-color:var(--light)">
            <p style="color:var(--light)">{{$idee->description}}</p>
        </div>

        <div class="col-md-9">
            <div class="container-titre text-center border-custom">
                <h1>{{$category->title}}</h1>
            </div>
            <h2 class="text-center separator">À propos</h2>
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">

                            <p>{{$category->description}}
                            </p>
                        </div>
                    </div>
                </div>
            <h2 class="text-center separator">Les idées de cette catégorie</h2>
            </section>
            <div class="row liste-carte">
            @foreach($ideas as $idea)
                    <div class="col-md-6">
                        <div class="carte card mb-6">
                            <div class="card-body">
                                <h5 class="card-title">Titre</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cupiditate, doloribus vero quo quasi omnis illo earum magni magnam numquam hic odio quae tenetur nesciunt! Nihil impedit beatae fuga repellendus!</p>
                                <a href="" class="btn btn-outline-dark btn-sm">VOIR</a>
                            </div>
                        </div>
                    </div>
            @endforeach

            </div>
        </div>
    </div>
</div>


@endsection
