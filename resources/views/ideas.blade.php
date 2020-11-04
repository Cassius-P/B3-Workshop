@extends('layouts.app')

@section('content')
<div class="container w-75 p-3">
    <div class="row">
        <div class="col-md-6 pb-2">
            <div class="mx-auto">
                <h2 class="text-center pt-1 pb-3">Proposez votre idée :</h2>
                <div class="border-custom p-4">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" id="title" placeholder="Titre">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Description" rows="12"></textarea>
                        </div>
                    </form>
                    <div class="text-center">
                        <button href="" class="btn btn-brown">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mx-auto">
                <h2 class="text-center pt-1 pb-3">Liste des propositions déjà émises :</h2>

                <div class="vertical-scrollable">

                    <div class="row text-center">

                        <!-- La card ci-dessous est celle à utiliser (pour en générer plusieurs), les autres servent simplement d'exemple pour le scrolling. -->
                        <div class="card mb-3 w-100">
                            <h5 class="card-header bg-ambre">Category??</h5>
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit iste recusandae excepturi assumenda quaerat aut totam deserunt! Architecto esse eaque est? Tempora alias reprehenderit doloremque rem cupiditate optio nemo ab dolorem architecto. Dolore amet dignissimos natus soluta cupiditate quaerat nemo ab cum enim temporibus officia distinctio debitis repellendus molestias, aliquam, ex beatae doloremque nisi! Eius voluptas minus tenetur praesentium, facilis quia, ducimus nemo itaque inventore cum mollitia possimus facere vitae corrupti quibusdam. Suscipit nisi soluta recusandae quisquam exercitationem. Labore, nobis?</p>
                                <div class="text-right">
                                    <a href="#" class="btn btn-brown">Détails...</a>
                                </div>
                            </div>
                        </div>
                        <!------------------------------->

                        <div class="card mb-3 w-100">
                            <h5 class="card-header">Something</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection