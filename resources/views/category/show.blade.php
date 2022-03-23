@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')
    {{-- @php
    dd($category->shows);
    @endphp --}}
<ul>
    @foreach ($category->shows as $cat)
     <li>{{$cat->title}}</li>   
    @endforeach
</ul>
    @endsection
