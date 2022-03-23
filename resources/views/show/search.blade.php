@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('content')


<div class="row d-flex justify-content-center">
    <div class="col-lg-10 col-md-12 d-flex justify-content-center">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    {{-- <th scope="col">Lieu</th>
                    <th scope="col">Représentation</th> --}}
                    <th scope="col">Prix</th>
                    <th scope="col">bookable</th>
                    <th scope="col">catégorie</th>
                </tr>
            </thead>
            {{-- @php
                dd($shows->category)
            @endphp --}}
            @foreach ($shows as $show)
            
                <tbody>
                    <tr>
                        <td>{{ $show->title }}</td>
                        <td>{{ $show->price }}</td>
                        <td>
                            @if ($show->bookable === 1)
                                <?php echo 'oui'; ?>
                            @else
                                <?php echo 'non'; ?>
                            @endif
                        </td>
                        {{-- <td>{{$show->categories->name}}</td> --}}
                        <td>
                            <a href="{{ route('show_show', $show->id) }}">voir +</a>
                            
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>
    
@endsection