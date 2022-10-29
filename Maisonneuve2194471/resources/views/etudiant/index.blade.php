@extends('layout.master')
@section('title','Étudiants')
@section('content')
<main class="container mt-5">
    <div class="col mx-auto text-center card">
        <h2 class="pt-3">Les Étudiants</h2> <a href="{{route('etudiant.create')}}" class="btn btn-outline-light mx-auto">Ajouter un Étudiant</a>
        <div class="col mx-5 mt-2">
        <table class="table text-white">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Courriel</th>
            <th scope="col">Date de Naissance</th>
            <th scope="col">Ville</th>
            <th scope="col">Actions</th>
        </tr>
        <tr>
        @forelse($etudiants as $etudiant)
            <tr scope="row">
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->adresse}}</td>
                <td>{{$etudiant->phone}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->date_de_naissance}}</td>
                <td>{{$etudiant->ville_id}}</td>
                <td class="p-1">
                    <a href="{{route('etudiant.show',$etudiant->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </a>
                    <a href="{{route('etudiant.edit',$etudiant->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>
                    <form action="" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{$etudiant->id}}">
                        <button type="submit" class="btn btn-danger">Effacer</button>
                    </form>
                </td>
            </tr>
        @empty
            <p class="text-danger">Aucun Étudiants!É!É</p>
        @endforelse
        </tr>
    </table>
        </div>
    </div>
</main>
@endsection