@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center  my-5">
        <h1 class="list-group-item active col-sm-10 col-lg-12 col-md-10 b-shadow2">Vos idées :</h1>
        <div class="row container d-flex flex-wrap justify-content-between mt-2 mb-5">

            {{--{{json_encode($posted)}}
            {{json_encode($liked)}}--}}

            @if(empty($posted))
                <h5>Vous n'avez pas proposé d'idées pour le moment</h5>
            @else
                @foreach($posted as $post)
                    <div class="col-lg-3 col-md-3 col-sm-12 card m-1 bg-transparent b-shadow px-0">
                        <div class="card-header bg-ambre b-hover text-center">
                            <h5 class="card-title c-white">{{$post->title}}</h5>
                        </div>
                        <div class="card-body pb-3">
                            <p class="card-text" style="color:#473c38" >{{$post->description}}</p>
                            <div class="row more-details-description">
                                <a href="{{$post->slug}}/{{$post->id}}">Plus...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <h1 class="list-group-item active col-sm-10 col-lg-12 col-md-10 b-shadow2">Vos likes :</h1>
        <div class="row container d-flex flex-wrap justify-content-between mt-2 mb-5">
            @if(empty($liked))
                <h5>Vous n'avez pas proposé d'idées pour le moment</h5>
            @else
                @foreach($liked as $like)
                    <div class="col-lg-3 col-md-3 col-sm-12 card m-1 bg-transparent b-shadow px-0">
                        <div class="card-header bg-ambre b-hover text-center">
                            <h5 class="card-title c-white">{{$like->title}}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="color:#473c38" >{{$like->description}}</p>
                            <div class="row more-details-description">
                                <a href="{{$like->slug}}/{{$like->id}}">Plus...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</div>
@endsection
