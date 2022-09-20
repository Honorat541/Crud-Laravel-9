@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des bureaux</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('Bureau/create') }}">Ajouter</a>
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
            <th>Emplacement</th>
            <th>Actions</th>

        </tr>

        @foreach ($Bureaux as $index => $Bureau)

            <tr>
                <td>{{ $Bureau->id}}</td>
                <td>{{ $Bureau->nom_bureau }}</td>
                <td>{{ $Bureau->emplacement }}</td>
                <td>

                        <a class="btn btn-info" href="{{ route('Bureau.show', $Bureau) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ route('Bureau.edit', $Bureau) }}">Modifier</a>
                    <form action="{{ route('Bureau.destroy', $Bureau) }}" method="POST">
                        @csrf
                        @method('DELETE')
                       <!-- <a class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimmer ?')">Supprimer</a> -->
                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimmer ?')" type="submit">Supprimer</button>
                    

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection