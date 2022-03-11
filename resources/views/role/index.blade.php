@extends('layouts.app')

@section('title', 'Liste des artistes')

@section('content')
 


    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
        @foreach($role as $role)
            <tr>
                <td>{{ $role->role }}</td>
                <td>
                   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

