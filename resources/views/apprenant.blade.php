@extends('patern')

@section('search')
    {{url('search/apprenant')}}
@endsection
@section('contenue')
        <!-- Section -->
        <section>
            <div class=" row m-4 justify-content-center">
                @foreach ($liste as $element)
                    <article class="col-md-4  p-1 m-1 artl ">
                        <a href="#" class="image w-100"><img src="{{asset('images/picture.jpg')}}" alt="{{$element->image}}" ></a>
                        <h3>{{$element->nom." ".$element->prenom}}</h3>
                        <ul>
                            <li><b>Telephone :</b>{{$element->contact}}</li>
                            @if($element->entreprise_actuelle!='')
                            <li><b>Entreprise :</b>{{$element->entreprise_actuelle}}</li>
                            @endif
                        </ul>
                        <ul class="actions">
                            <li><a href="{{url('projets/'.$element->id)}}" class="button">voir les projets</a></li>
                        </ul>
                    </article>
                @endforeach
            </div>
            <div>
                {{ $liste->links()}}
            </div>
        </section>
@endsection

