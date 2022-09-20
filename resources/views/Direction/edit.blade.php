@section('content')

@extends('layouts.app')

    <h1>Modifier directions</h1>


   @if ($errors->any())

        <div class="alert alert-danger">

          <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

  @endif

    <form action="{{route('Direction.update', $Direction)}}" method="post"  >

        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nom_direction">Nom:</label>
            <input type="text" class="form-control" id="nom_direction" name="nom_direction" value="{{ $Direction->nom_direction }}">

        </div>

        <div class="form-group mb-3">

            <label for="sigle">Sigle:</label>
            <input type="text" class="form-control" id="sigle" name="sigle" value="{{ $Direction->sigle }}">

        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection
