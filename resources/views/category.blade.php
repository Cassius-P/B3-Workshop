@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-titre text-center">
                <h1>CATEGORIE</h1>
                <p class="lead">Sous-titre de la catégorie</p>
            </div>
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <h2 class="text-center">A propos</h2>
                            <p class="lead">Voici une pésentation de ce que peut contenir éventuellement la descirption d'une catégorie :</p>
                            <p> Prenons l'exemple d'une catégorie au hasard comme par exemple l'amélioration d'espace verts
                                On pourrait faire passer un arrêté municipal qui nous permettrait de dire que jeter un papier par terre est passible d'une amende de 35€
                                Ou encore que laisse la merde de son chien par terre est passible d'une gare à vue allant de 24 à 48H
                                Enfin si la personne est reconnue coupable on la condamne à mort.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row liste-carte">
                <div class="col-md-6">
                    <div class="carte card mb-6">
                        <div class="card-body">
                            <h5 class="card-title">Titre de l'idée</h5>
                            <p class="card-text">Une courte phrase pour illustrer la description de lidée dans la card.</p>
                            <a href="" class="btn btn-outline-dark btn-sm">VOIR</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="carte card mb-6">
                        <div class="card-body">
                            <h5 class="card-title">Titre de la deuxième idée</h5>
                            <p class="card-text">Une courte phrase pour illustrer la description de lidée dans la card.</p>
                            <a href="" class="btn btn-outline-dark btn-sm">VOIR</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="carte card mb-6">
                        <div class="card-body">
                            <h5 class="card-title">Titre de la deuxième idée</h5>
                            <p class="card-text">Une courte phrase pour illustrer la description de lidée dans la card.</p>
                            <a href="" class="btn btn-outline-dark btn-sm">VOIR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

    
@endsection