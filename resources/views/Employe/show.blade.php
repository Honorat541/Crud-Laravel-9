@extends('layouts.app')


@section('content')

    <h1>Gestion des bureaux</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $Employe->nom_employe }}</td>
        </tr>

        <tr>

            <th>Prenom:</th>
            <td>{{ $Employe->prenom_employe }}</td>

        </tr>

        <tr>

            <th>Groupé:</th>
            <td>{{ $Employe->groupe_employe }}</td>

        </tr>

        <tr>

            <th>Statut:</th>
            <td>{{ $Employe->statut_employe }}</td>

        </tr>

        <tr>

            <th>Direction:</th>
            <td>{{ $Employe->direction->nom_direction }}</td>

        </tr>

        <tr>

            <th>Bureau:</th>
            <td>{{ $Employe->bureau->nom_bureau }}</td>

        </tr>

        
    </table>

@endsection
