@extends('patern')

@section('contenue')
    <section id="banner">
        <div class="content">
            <header>
                <h1 style="color:#9B0002 ">SIMPLON BURKINA<br />
                    FASO</h1>
                <p style="color: black">A free and fully responsive site template</p>
            </header>
            <p style="color: black">Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
            <ul class="actions">
                <li style="border:0"><a href="#"  class="button big">Lire plus</a></li>
            </ul>
        </div>
        <span class=" image object">
										<div class="slider">
											<img class="" src="{{asset('images/1.jpg')}}" alt="" />
										    <img class="" src="{{asset('images/2.jpg')}}" alt="" />
										    <img class="" src="{{asset('images/3.jpg')}}" alt="" />
										</div>
        </span>
    </section>

    <!-- Section -->
    <section>
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
    <section>
        <header class="major">
            <h2>Actualites</h2>
        </header>
        <div class=" row m-4">
            @foreach ($liste as $actualite)
            <article class="col-md-3 p-2 artl ">
            <a href="#" class="image w-100"><img src="{{asset('storage/'.$actualite->image)}}" alt="{{$actualite->image}}" ></a>
            <h3>{{$actualite->titre}}</h3>
                <ul class="actions">
                <li><a href="{{url('publications/'.$actualite->id)}}" class="button">Detail</a></li>
                </ul>
            </article>
            @endforeach
        </div>
        <div>
           {{ $liste->links()}}
        </div>
    </section>
@endsection
