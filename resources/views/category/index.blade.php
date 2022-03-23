@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')
    {{-- @php
    dd($categories)
@endphp <ul> --}}
        @foreach ($categories as $category)
        <li>{{$category->name}}</li>
        @endforeach
    </ul>
@endsection
