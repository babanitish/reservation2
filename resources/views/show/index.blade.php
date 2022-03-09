@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <div class="flex flex-row flex-wrap justify-around">
        @foreach($shows as $show)
            <div class="">
                <h3 class="text-center font-serif font-bold text-gray-900 text-xl">{{ $show->title }}</h3>
                <img class="object-scale-down rounded-md max-h-60" src={{ asset('images/'.$show->poster_url) }} alt="Photo du spectacle {{ $show->title }}" />
                <p class="text-center leading-relaxed">{{ $show->description }}</p>
                
                <span class="text-center">{{ $show->price }}€</span>
                <a href={{ route('show_show', $show->slug) }} class="px-5 py-4 bg-gray-400 text-center rounded-md text-white text-sm focus:border-transparent hover:bg-red-700">Plus d'infos</a>
            </div>
        @endforeach
    </div>
@endsection