@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="container-titre text-center border-custom">
                <h1>Idée</h1>
            </div>
            <section id="about">
            <h2 class="text-center separator">A propos</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                        
                            <p class="lead">Voici une pésentation de ce que peut contenir éventuellement la descirption d'une idée :</p>
                            <p> Prenons l'exemple d'une idée au hasard comme par exemple l'amélioration d'espace verts
                                On pourrait faire passer un arrêté municipal qui nous permettrait de dire que jeter un papier par terre est passible d'une amende de 35€
                                Ou encore que laisse la merde de son chien par terre est passible d'une gare à vue allant de 24 à 48H
                                Enfin si la personne est reconnue coupable on la condamne à mort.
                            </p>
                            <p>Vous aimez cette idée ? Faites-le nous savoir !</p>
                            <a href=""><img class="like" src={{ asset('/assets/icons/like.png') }}></a> 
                            <p class="p-like">Liké par <span id="nb-like">265</span> personne(s)</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>  
</div>

    
@endsection