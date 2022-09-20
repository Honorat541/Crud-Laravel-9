@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des bureaux</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('Interphone/create') }}">Ajouter</a>
        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Numéro Interphone </th>
            <th>Bureau</th>
            <th>Actions</th>

        </tr>

        @foreach ($Interphones as $index => $Interphone)

            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $Interphone->numero_interphone }}</td>
                <td>{{ $Interphone->bureau->nom_bureau}}</td>
                <td>

                    
                        <a class="btn btn-info" href="{{ route('Interphone.show', $Interphone) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ route('Interphone.edit', $Interphone) }}">Modifier</a>
                        <form action="{{ route('Interphone.destroy', $Interphone) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimmer ?')" type="submit">Supprimer</button>
                    
                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection