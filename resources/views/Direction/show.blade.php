@extends('layouts.app')


@section('content')

    <h1>Gestion des bureaux</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $Direction->nom_direction }}</td>
        </tr>

        <tr>

            <th>Sigle:</th>
            <td>{{ $Direction->sigle }}</td>

        </tr>

        
    </table>

@endsection
