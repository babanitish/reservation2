@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $agent->firstname }} {{ $agant->lastname }}</h1>
    
    <h2>Liste de ses artists</h2>
    <ul>
    @foreach($artist->types as $type)    
        <li>{{ $type->type }}</li>
    @endforeach
    </ul>

    <nav><a href="{{ route('artist_index') }}">Retour à l'index</a></nav>
@endsection