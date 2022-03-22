@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')
    <div class="container">

        <div class="section-header">
            <h2>Liste des {{ $resource }}</h2>
        </div>
        <div class="row">
          
            @foreach ($shows as $show)
                <div class="col">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('images/' . $show->poster_url) }}"
                            alt="{{ $show->title }}" />
                        <div class="card-body">
                            <p class="card-text">{{ $show->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('show_show', $show->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">{{ $show->price }}€</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection





    {{-- <div class="section-header">
        <h1>Liste des {{ $resource }}</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">

        @foreach ($shows as $show)
            <div class="col">
                <div class="card">
                    <img src={{ asset('images/' . $show->poster_url) }} class="card-img-top" style="width:250px"
                        alt="Photo du spectacle " {{ $show->title }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $show->title }}</h5>
                        <p class="card-text">{{ $show->description }}</p>
                        <p class="card-price">{{ $show->price }}€</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <a href={{ route('show_show', $show->slug) }}
                            class="px-5 py-4 bg-gray-400 text-center rounded-md text-white text-sm focus:border-transparent hover:bg-red-700">Plus
                            d'infos</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div> --}}
