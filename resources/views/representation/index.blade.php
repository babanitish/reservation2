@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')
    <div class="container">

        <div class="section-header">
            <h2>Liste des {{ $resource }}</h2>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-md-12 d-flex justify-content-center">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Auteur</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Représentation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réservable</th>
                        </tr>
                    </thead>
                    @foreach ($shows as $show)
                        <tbody>
                            <tr>
                                <td>{{ $show->title }}</td>
                                <td>Auteur</td>
                                <td>
                                    @if ($show->location)
                                        -
                                        <span>{{ $show->location->designation }}</span>
                                    @endif
                                </td>
                                {{-- <?php dd($show->representations[0]->show_id); ?> --}}
                                <td>
                                    @if (isset($show->representations[0]->show_id))
                                        {{ $show->representations[0]->show_id }}
                                    @endif
                                </td>
                                <td>{{ $show->price }}</td>
                                <td>
                                    @if ($show->bookable === 1)
                                        <?php echo 'oui'; ?>
                                    @else
                                        <?php echo 'non'; ?>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('show_show', $show->id) }}">voir +</a>
                                    {{-- @if ($show->bookable === 1)

                                            {{ Form::open(['method' => 'POST', 'route' => ['representation_index']]) }}
                                            {{ Form::button('réserver', [
                                                'class' => 'btn btn-danger delete',
                                                'type' => 'submit',
                                                'style' => '
                                                                                                                                                                                                                                                                    background-color: red;',
                                            ]) }}
                                            {{ Form::close() }}
                                        @endif --}}
                                </td>
                            </tr>
                        </tbody>
                    @endforeach

                </table>
            </div>
    </div @endsection {{-- <div class="section-header">
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
