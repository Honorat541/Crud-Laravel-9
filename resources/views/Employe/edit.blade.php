@section('content')

@extends('layouts.app')

    <h1>Modifier employés</h1>


   @if ($errors->any())

        <div class="alert alert-danger">

          <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

  @endif

    <form action="{{route('Employe.update', $Employe)}}" method="post"  >

        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom_direction">Nom:</label>
            <input type="text" class="form-control" id="nom_employe" name="nom_employe" value="{{ $Employe->nom_employe }}">

        </div>

        <div class="form-group mb-3">

            <label for="sigle">Prenom:</label>
            <input type="text" class="form-control" id="prenom_employe" name="prenom_employe" value="{{ $Employe->prenom_employe}}">

        </div>

        <div class="form-group mb-3">

            <label for="sigle">Groupé:</label>
            <input type="text" class="form-control" id="groupe_employe" placeholder="Groupé" name="groupe_employe" value="{{ $Employe->groupe_employe}}">

        </div>

        <div class="form-group mb-3">

            <label for="sigle">Statut:</label>
            <input type="text" class="form-control" id="statut_employe" placeholder="Statut" name="statut_employe" value="{{ $Employe->statut_employe}}">
            <label for="directions_id" class="label">Direction</label>
            <select name="directions_id" id="directions_id" class="select form-control">
                <option value=""></option>
                @foreach($directions as $direction)
                    <option value="{{$direction->id}}" {{ ($Employe->directions_id == $direction->id) ? "selected=selected" : '' }} > {{$direction->nom_direction}}</option>
                @endforeach
            </select>
        

            <label for="bureaux_id" class="label">Bureau</label>
            <select name="bureaux_id" id="bureaux_id" class="select form-control">
                <option value=""></option>
                @foreach($bureaux as $bureau)
                    <option value="{{$bureau->id}}" {{ ($Employe->bureaux_id == $bureau->id) ? "selected=selected" : '' }} > {{$bureau->nom_bureau}}</option>
                @endforeach
            </select>
</div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>

@endsection
