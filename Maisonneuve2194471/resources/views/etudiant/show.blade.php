@extends('layout.master')
@section('title','Étudiant')
@section('content')
<main class="container mt-5">
    <div class="col mx-auto text-center card">
        <h2 class="pt-3">{{$etudiant->nom}}</h2>
        <div class="col mx-5 mt-2">
            <p class="container">
                Nom: {{$etudiant->nom}}<br>
                Adresse: {{$etudiant->adress}}<br>
                Téléphone: {{$etudiant->phone}}<br>
                Courriel: {{$etudiant->email}}<br>
                Date de Naissance: {{$etudiant->date_de_naissance}}<br>
                Ville: {{$etudiant->ville_id}}<br>
            </p>
        </div>
    </div>
</main>
@endsection