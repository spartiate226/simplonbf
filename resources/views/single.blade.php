
@extends('patern')

@section('contenue')
<section class="m-2">
    <header class="main">
    <h1>{{$publication[0]->titre}}</h1>
    <span><b>publier le</b> {{$publication[0]->created_at}}</span>
    </header>

<span class="image main single-img"><img src="{{asset('images/picture.jpg')}}" alt="image" /></span>

    <p>{{$publication[0]->contenu}}</p>
    <hr class="major" />

</section>
@endsection
