@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion des bureaux</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('Employe/create') }}">Ajouter</a>
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
            <th>Prénom</th>
            <th>Groupé</th>
            <th>Statut</th>
            <th>Direction</th>
            <th>Bureau</th>
            <th>Actions</th>

        </tr>

        @foreach ($Employes as $index => $Employe)

            <tr>
                <td>{{ $index +1 }}</td>
                <td>{{ $Employe->nom_employe }}</td>
                <td>{{ $Employe->prenom_employe }}</td>
                <td>{{ $Employe->groupe_employe }}</td>
                <td>{{ $Employe->statut_employe }}</td>
                <td>{{ $Employe->direction->nom_direction }}</td>
                <td>{{ $Employe->bureau->nom_bureau }}</td>
                <td>

                    
                        <a class="btn btn-info" href="{{ route('Employe.show', $Employe) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ route('Employe.edit', $Employe) }}">Modifier</a>
                        <form action="{{ route('Employe.destroy', $Employe) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimmer ?')" type="submit">Supprimer</button>
                    
                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection