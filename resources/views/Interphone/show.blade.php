@extends('layouts.app')


@section('content')

    <h1>Gestion des bureaux</h1>


    <table class="table table-bordered">

        <tr>
            <th>Numéro Interphone:</th>
            <td>{{ $Interphone->numero_interphone }}</td>
        </tr>
        <tr>    
            <th>Bureau:</th>
            <td>{{ $Interphone->bureau->nom_bureau }}</td>

        </tr>
        
    </table>

@endsection
