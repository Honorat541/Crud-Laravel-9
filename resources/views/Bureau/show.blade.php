@extends('layouts.app')


@section('content')

    <h1>Gestion des bureaux</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $Bureau->nom_bureau }}</td>
        </tr>

        <tr>

            <th>Emplacement:</th>
            <td>{{ $Bureau->emplacement }}</td>

        </tr>

        
    </table>

@endsection
