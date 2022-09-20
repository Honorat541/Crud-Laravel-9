@extends('layouts.app')

@section('content')

    <h1>Ajouter un employé</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif
    <form action="{{route('Employe.store')}}" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="nom_employe">Nom:</label>
            <input type="text" class="form-control" id="nom_employe" placeholder="Entrez le nom de l'employé " name="nom_employe">
        </div>

        <div class="form-group mb-3">

            <label for="prenom_employe">Prenom:</label>
            <input type="text" class="form-control" id="prenom_employe" placeholder="Entrez le prenom de l'employé" name="prenom_employe">

        </div>

        <div class="form-group mb-3">

            <label for="groupe_employe">Groupé:</label>
            <input type="text" class="form-control" id="groupe_employe" placeholder="Entrez le numéro groupé de l'employé" name="groupe_employe">

        </div>

        <div class="form-group mb-3">

            <label for="statut_employe">Statut:</label>
            <input type="text" class="form-control" id="statut_employe" placeholder="Entrez le statut de l'employé" name="statut_employe">

        </div>
        
        <div class="form-group mb-3">
        <label for="directions_id" class="label">Direction:</label>
            <select name="directions_id" id="directions_id" class="select form-control">
                <option value=""></option>
                @foreach($directions as $direction)
                    <option value="{{$direction->id}}">{{$direction->nom_direction}}</option>
                @endforeach
            </select>


            <label for="bureaux_id" class="label">Bureau:</label>
            <select name="bureaux_id" id="bureaux_id" class="select form-control">
                <option value=""></option>
                @foreach($bureaux as $bureau)
                    <option value="{{$bureau->id}}">{{$bureau->nom_bureau}}</option>
                @endforeach
            </select>
</div>


       
        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>
@endsection
