@extends('layouts.app')

@section('content')

    <div class="container mw-100 b-shadow">
        <div class="row-brown justify-content-center">
            <img src={{ asset('assets/banner.png') }} class="img-fluid" alt="banner">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center tex pt-5 pb-0">
            <section class="text-center d-flex flex-column justify-content-around" style="height: 50vh; ">
                <h1 class="bd-title c-ambre separator text-center">Qui sommes-nous?</h1>
                <p class="text-center pt-3 pb-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet et blanditiis eum nam
                    odio. Magnam facilis
                    doloribus tempore ea sint quasi obcaecati! Ullam dolores deleniti, illum debitis officia nisi ea amet
                    accusamus, ipsam necessitatibus voluptates eos! Molestias laudantium vel, aspernatur soluta, ullam nesciunt
                    rem modi praesentium minima iure placeat ipsa autem beatae excepturi quaerat ipsam! Nam blanditiis quisquam
                    itaque architecto quidem delectus aspernatur. Modi tenetur facere delectus vitae necessitatibus voluptatibus
                    unde, magnam esse mollitia. Aliquam doloremque fugit laudantium quisquam iusto! Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Unde distinctio qui pariatur quasi numquam quo iusto voluptatibus saepe error quis
                    doloribus amet blanditiis nam perferendis, minima recusandae, accusamus accusantium obcaecati officia? Sed iste
                    quasi earum tenetur labore libero blanditiis repellendus?
                </p>
            </section>

            <section class="w-100">
                <h1 class="bd-title c-ambre separator text-center">Comment utiliser Biosimul ?</h1>
                <div class="p-3 stacked-cards overflow-hidden">
                    <ul>
                        <li>
                            <!-- <div class="col-xs-1 pb-2"> -->
                            <div class="card shadow rounded" style="width: 18rem; height: 19rem; background-color: #eda27c;">
                                <div class="card-body text-center">
                                    <img class="pb-2" src={{ asset('/assets/icons/edit.png') }}>
                                    <h5 class="card-title">Inscrivez-vous !</h5>
                                    <p class="card-text">Créer un compte sur cette plateforme est gratuit, alors n'attendez plus pour
                                        proposer votre idée!
                                        <br><br>
                                        Si vous souhaitez vous inscrire cliquez-ici:
                                    </p>
                                    <a href="{{ route('register') }}" class="btn btn-brown">S'inscrire</a>
                                    </a>
                                </div>
                            </div>
                            <!-- </div> -->
                        </li>
                        <li>
                            <!-- <div class="col-xs-1 pb-2"> -->
                            <div class="card shadow rounded" style="width: 18rem; height: 19rem; background-color: #f0c300;">
                                <div class="card-body text-center">
                                    <img class="pb-2" src={{ asset('/assets/icons/lightbulb.png') }}>
                                    <h5 class="card-title">Proposez votre idée</h5>
                                    <p class="card-text">Toutes les idées pour contribuer à l'amélioration de la ville sont les
                                        bienvenues !
                                        <br>
                                        N'hésitez donc pas à proposer la vôtre !
                                        <br><br>
                                        <b>N'oubliez pas de vérifier que l'idée n'ait pas déjà été soumise auparavant.</b>
                                    </p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </li>
                        <li>
                            <!-- <div class="col-xs-1"> -->
                            <div class="card shadow rounded" style="width: 18rem; height: 19rem; background-color: #f79630">
                                <div class="card-body text-center">
                                    <img class="pb-2" src={{ asset('/assets/icons/sand-clock.png') }}>
                                    <h5 class="card-title">Attendez la validation par un administrateur</h5>
                                    <p class="card-text">Un administrateur analysera votre proposition afin de vérifier qu'elle soit
                                        bien
                                        conforme. <br> Dans le cas ou votre proposition se voit acceptée, elle apparaîtra ensuite dans
                                        la
                                        liste des propositions et pourra être votée.
                                    </p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </div>
    {{--<div class="w-100 py-3" >
        <h1 class="bd-title c-ambre separator text-center">Notre équipe</h1>
        <section class="col-lg-9 col-md-9 col-sm-12 row flex-wrap">

        </section>
    </div>--}}




@endsection
