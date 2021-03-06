@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-9">
            <div class="container-titre text-center border-custom">

                <h1>{{$category->title}}</h1>
            </div>
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <h2 class="text-center">A propos</h2>
                            <p> {{$category->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row liste-carte">

                @foreach($ideas as $idea)
                    <div class="col-md-6">
                        <div class="carte card mb-6">
                            <div class="card-body">
                                <h5 class="card-title">{{$idea->title}}</h5>
                                <p class="card-text">{{$idea->description}}</p>
                                <a href="/{{$category->slug}}/{{$idea->id}}" class="btn btn-outline-dark btn-sm">VOIR</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>


@endsection
