@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>

    <h2>Liste des types</h2>
    {{-- @php
        dd($artist->agents);
    @endphp --}}
    <ul>

        @foreach ($artist->types as $type)
            <li>{{ $type->type }}</li>
        @endforeach
    </ul>
    <h2>Agent</h2>
    @foreach ($artist->agents as $agent)
        <li>{{ $agent->firstname }} {{ $agent->lastname }}</li>
    @endforeach
    <nav><a href="{{ route('artist_index') }}">Retour à l'index</a></nav>
@endsection
