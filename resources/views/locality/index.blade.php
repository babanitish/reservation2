@extends('layouts.app')
@section('title', 'Liste des localités')

@section('content')
<h1>Liste des {{ $resource }}</h1>
    <table>
        <thead>
            <tr>
                <th>Code postal</th>
                <th>Localité</th>
            </tr>
        </thead>
        <tbody>
            {{-- <?php dd($localities->locality); ?> --}}

            @foreach($localities as $locality)
                <tr>
                    <td>{{ $locality->postal_code }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>

    @endsection