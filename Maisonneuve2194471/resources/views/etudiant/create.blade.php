@extends('layout.master')
@section('title','Étudiant')
@section('content')
<main class="container mt-5">
    <div class="col mx-auto text-center card">
        <h2 class="pt-3">Ajout d'Étudiant</h2>
        <div class="col mx-5 mt-2">
            <div class="container">
                <form action="" method="post">
                    @csrf
                    <label for="nom">Nom: <input type="text" name="nom" id=""></label><br>
                    <label for="adresse">Adresse: <input type="text" name="adresse" id=""></label><br>
                    <label for="phone">Numéro de Téléphone: <input type="tel" name="phone" id=""></label><br>
                    <label for="email">Courriel: <input type="email" name="email" id=""></label><br>
                    <label for="date_de_naissance">Date de Naissance: <input type="date" name="date_de_naissance" id=""></label><br>
                    <label for="ville_id">Ville: 
                        <select name="ville_id" id="">
                            @foreach($villes as $ville)
                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                            @endforeach
                        </select>
                    </label><br>

                    <input class="my-3 btn btn-outline-light" type="submit" value="Ajouter">
                </form>
            </div>
        </div>
    </div>
</main>
@endsection