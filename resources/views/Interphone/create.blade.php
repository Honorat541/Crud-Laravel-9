@extends('layouts.app')

@section('content')

    <h1>Ajouter un interphone</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif
    <form action="{{route('Interphone.store')}}" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="numero_interphone">Numéro Interphone</label>
            <input type="text" class="form-control" id="numero_interphone" placeholder="Entrez un numéro" name="numero_interphone">
            <label for="bureaux_id" class="label">Bureau</label>
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
