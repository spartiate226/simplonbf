@extends('patern')

@section('contenue')
    <!-- Section -->
    <section>
        <header class="major">
            <h2>Projet de :<b>{{$nom}}</b></h2>
        </header>
        <div>
            @foreach($projet as $projet)
                <div class="m-2">
                    <h2>{{$projet->nom}}</h2>
                    <p>ghdhdhdhdehehdshjdshdshdhdhdhdhddddshdshdsdsgdsdgdshgdsgdsgdshgdgdgdshgdsgdshgdsdsgdsgdgdsgsddshg
                    dsbhdhbfhfdjhbfjhfjhbvfdvfdjhvffvgjhgjhfghgbfhfgjhngfjnhgfjnhgffgnhjfgjnhfgjnhgfjnhgfjnhfgjnhgfjnhgfjnhg
                        cvjnbvfj vfdjnhvfdjnh fjnhfgj nvfjnvfjnhvfjnhvfjhvfjngbfjn bgfjnhbgfjnhgfjnhfgjnhgfjnhfgjnhfgjnhfgjnhjn
                        dchjfdhjvfjhvfhjfgjhngbfjhnbgjnhgbjnhgbfjnhgbjhngfjnhgbfjnhfgbjnhgbfjhbgjnhbfgjnfgbjnfgjnfgjnfgjnfgjnfg
                        fdjfdjhfdjfdfvdjhfvjhvfjhfvjhfgvjhgfjhfghjfgjhfgjnhfgjnhfgjnhgfjnhfgjnhfgjnhfgjnhfgjnhfgj nhfgj nfgjnfgjh
                        fdhjfjhfgjhgjhgfjnhgjhngfjnhbgjnhgbjnhfgjnhjhgjnhgfjnhfgjnhfgjnhfgjnhfgjnhfgjnhfgjnhfgjnfgjnhfgjngfjngfjn
                    </p>
                </div>
            @endforeach
        </div>
@endsection

