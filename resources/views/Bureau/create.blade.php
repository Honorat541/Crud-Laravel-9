@extends('layouts.app')

@section('content')

    <h1>Ajouter un bureau</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif
    <form action="{{route('Bureau.store')}}" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="nom_bureau">Nom</label>
            <input type="text" class="form-control" id="nom_bureau" placeholder="Entrez le bureau" name="nom_bureau">
        </div>

        <div class="form-group mb-3">

            <label for="emplacement">Emplacement</label>
            <input type="text" class="form-control" id="emplacement" placeholder="Entrez l'emplacement du bureau" name="emplacement">

        </div>
        

    
        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>
@endsection
