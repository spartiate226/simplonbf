<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire evenements</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    </head>
    <body>
    <div class="container d-flex justify-content-center">
    <form class="d-flex flex-column ap-form" action="{{url('publication')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Titre</label>
            <input class="form-control" type="text" name="titre">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input class="form-control" type="file" name="image">
        </div>
        <div class="form-group">
            <label>Type de publiction</label>
            <select class="form-control" name="type" id="">
                <option value="actualite">Actualite</option>
                <option value="evenement">Evenement</option>
            </select>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="contenu" id="" cols="30" rows="7">

            </textarea>
        </div>

            <button class="btn btn-simplon" type="submit">Ajouter</button>
        </form>
    </div>
    </body>
</html>