@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifiez votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de vérification vous a été envoyé sur votre adresse email') }}
                        </div>
                    @endif

                    {{ __('Merci de vérifier le lien que nous avons envoyé à votre adresse email avant de continuer') }}
                    {{ __('Si vous n'avez reçu aucun email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez-ici pour renvoyer un mail de vérification') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
