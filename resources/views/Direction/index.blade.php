@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des bureaux</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('Direction/create') }}">Ajouter</a>
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
            <th>Nom </th>
            <th>Sigle</th>
            <th>Actions</th>

        </tr>

        @foreach ($Directions as $index => $Direction)

            <tr>
                <td>{{ $Direction->id }}</td>
                <td>{{ $Direction->nom_direction }}</td>
                <td>{{ $Direction->sigle }}</td>
                <td>

                    
                        <a class="btn btn-info" href="{{ route('Direction.show', $Direction) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ route('Direction.edit', $Direction) }}">Modifier</a>
                        <form action="{{ route('Direction.destroy', $Direction) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimmer ?')" type="submit">Supprimer</button>
                    
                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection