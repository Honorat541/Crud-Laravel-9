@section('content')

@extends('layouts.app')

    <h1>Modifier bureaux</h1>


   @if ($errors->any())

        <div class="alert alert-danger">

          <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

  @endif

    <form action="{{route('Bureau.update', $Bureau)}}" method="post"  >

        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom_bureau">Nom:</label>
            <input type="text" class="form-control" id="nom_bureau" name="nom_bureau" value="{{ $Bureau->nom_bureau }}">

        </div>

        <div class="form-group mb-3">

            <label for="emplacement">Emplacement:</label>
            <input type="text" class="form-control" id="emplacement" name="emplacement" value="{{ $Bureau->emplacement }}">

        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection
