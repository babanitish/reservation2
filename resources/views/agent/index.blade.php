@extends('layouts.app')

@section('title', 'Liste des lieux de spectacle')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agents as $agent)
            <tr>
                <td>{{ $agent->firstname }}</td>
                <td>
                    <a href="{{ route('artist_show', $agent->id) }}">{{ $agent->lastname }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </ul>
@endsection