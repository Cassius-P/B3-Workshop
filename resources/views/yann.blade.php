@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{print_r($affichage)}}
                </div>
            </div>
        </div>
    </div>
@endsection
