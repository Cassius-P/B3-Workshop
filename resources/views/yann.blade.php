@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{json_encode($affichage)}}
                </div>
            </div>
        </div>
    </div>
@endsection
