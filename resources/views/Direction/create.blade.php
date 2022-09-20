@extends('layouts.app')

@section('content')

    <h1>Ajouter une nouvelle direction</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif
    <form action="{{route('Direction.store')}}" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="nom_direction">Nom:</label>
            <input type="text" class="form-control" id="nom_direction" placeholder="Entrez un nom" name="nom_direction">
        </div>

        <div class="form-group mb-3">

            <label for="sigle">Sigle:</label>
            <input type="text" class="form-control" id="sigle" placeholder="sigle" name="sigle">

        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>
@endsection
