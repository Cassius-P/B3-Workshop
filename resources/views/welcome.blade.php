
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src={{ asset('assets/banner.png') }} class="mw-100" alt="banner">
            </div>
        </div>
        <div class="container">
            <div class="pt-5">
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem; height: 18rem">
                            <div class="card-body text-center">
                              <h5 class="card-title">Titre 1</h5>
                              <p class="card-text">{{ \Request::route()->getName() }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center">
                              <h5 class="card-title">Titre 2</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body text-center">
                              <h5 class="card-title">Titre 3</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
