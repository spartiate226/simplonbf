@extends('patern')
@section('search')
    {{url('search/evenement')}}
@endsection
@section('contenue')
    <!-- Section -->
    <section>
        <header class="major">
            <h2>Resultats des recherche sur les evenements</h2>
        </header>
        <div class=" row m-4 justify-content-center">
            @foreach ($liste as $actualite)
                <article class="col-md-4 m-1 p-2 artl ">
                    <a href="#" class="image w-100"><img src="{{asset('images/picture.jpg')}}" alt="image" ></a>
                    <h3>{{$actualite['titre']}}</h3>
                    <ul class="actions">
                        <li><a href="{{url('publication/'.$actualite['id'])}}" class="button">Detail</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
