@extends('layouts.app')

@section('content')
<div class="container">
    <div class="rox justify-content-center align-items-center tex">
        <div class="jumbotron my-5 bg-ambre" style="color:white;">
            <h1 class="display-4" style="color:var(--light)">{{$category->title}}</h1>
            <hr class="my-4" style="background-color:var(--light)">
            <h5 style="color:var(--light)">{{$category->description}}</h5>
        </div>

        <div class="col-lg-10">
            <div class="row liste-carte justify-content-around">
            @foreach($ideas as $idea)
                  {{--  <div class="col-md-6">
                        <div class="carte card mb-6">
                            <div class="card-body">
                                <h5 class="card-title">Titre</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cupiditate, doloribus vero quo quasi omnis illo earum magni magnam numquam hic odio quae tenetur nesciunt! Nihil impedit beatae fuga repellendus!</p>
                                <a href="" class="btn btn-outline-dark btn-sm">VOIR</a>
                            </div>
                        </div>
                    </div>--}}

                    <div class="card bg-light mb-4 col-lg-3 col-md-3 col-sm-12 px-0" style="max-width: 18rem; max-height: 50vh">
                        <div class="card-header bg-ambre c-white w-100  " >{{$idea->title}}</div>
                        <div class="card-body">
                            <p class="card-text">{{$idea->description}}</p>
                            <a href="{{$category->slug}}/{{$idea->id}}">En savoir plus</a>
                        </div>
                    </div>
            @endforeach

            </div>
        </div>
    </div>
</div>


@endsection
