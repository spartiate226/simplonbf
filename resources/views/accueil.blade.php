@extends('patern')
@section('search')
    {{url('search/actualite')}}
@endsection
@section('contenue')
    <section id="banner" class="m-2">
        <div class="content ">
            <header>
                <h1 style="color:#9B0002 ">SIMPLON BURKINA<br />
                    FASO</h1>
                <p style="color: black">Fabriques labellisées Grande Ecole du Numérique - In Code We Trust</p>
            </header>
            <p style="color: black">Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>

        </div>
        <div class=" image object">
            <div class="">
                <img class="" src="{{asset('images/1.jpg')}}" alt="" />
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="m-2">
        <header class="major">
            <h2 style="border-color: #9B0002">Nos Formations</h2>
        </header>
        <div class="features">
            <article>
                <span class="icon fa-gem"></span>
                <div class="content">
                    <h3>Objets connectés </h3>
                    <p> Developpement</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-paper-plane"></span>
                <div class="content">
                    <h3>Consultant DevOps</h3>
                    <p>Gestion de projet</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-rocket"></span>
                <div class="content">
                    <h3>Développeur web et web mobile </h3>
                    <p>Développement</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-signal"></span>
                <div class="content">
                    <h3>Technicien supérieur systèmes et réseaux</h3>
                    <p>Reseaux</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section -->
    <section class="m-2">
        <header class="major">
            <h2>Actualites</h2>
        </header>
        <div class=" row m-4 justify-content-center">
            @foreach ($liste as $evenement)
            <article class="col-md-4 m-1 p-2 artl ">
            <a href="#" class="image "><img src="{{asset('images/picture.jpg')}}" alt="{{$evenement->image}}" ></a>
            <h3>{{$evenement->titre}}</h3>
                <ul class="actions">
                <li><a href="{{url('publication/'.$evenement->id)}}" class="button">Detail</a></li>
                </ul>
            </article>
            @endforeach
        </div>
        <div>
           {{ $liste->links()}}
        </div>
    </section>
@endsection
