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
											<img src="images/pic10.jpg" alt="" />
										    <img src="images/pic10.jpg" alt="" />
										    <img src="images/pic10.jpg" alt="" />
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
                    <h3>Portitor ullamcorper</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-paper-plane"></span>
                <div class="content">
                    <h3>Sapien veroeros</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-rocket"></span>
                <div class="content">
                    <h3>Quam lorem ipsum</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon solid fa-signal"></span>
                <div class="content">
                    <h3>Sed magna finibus</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Actualites</h2>
        </header>
        <div class="posts">
            @foreach ($liste as $actualite)
            <article>
            <a href="#" class="image"><img src="{{$actualite->image}}" alt="" /></a>
            <h3>{{$actualite->titre}}</h3>
                <p>{{$actualite->contenu}}</p>
                <ul class="actions">
                <li><a href="{{url('publication/'.$actualite->id)}}" class="button">Detail</a></li>
                </ul>
            </article>
            @endforeach
        </div>
        <div>
           {{ $actualite->links()}}
        </div>
    </section>
@endsection
