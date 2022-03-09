@extends('layouts.app')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ha-pic">
                    <img src="frontend/img/h-about.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ha-text">
                    <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>
                    <p>When I first got into the online advertising business, I was looking for the magical
                        combination that would put my website into the top search engine rankings, catapult me to
                        the forefront of the minds or individuals looking to buy my product, and generally make me
                        rich beyond my wildest dreams! After succeeding in the business for this long, I’m able to
                        look back on my old self with this kind of thinking and shake my head.</p>
                    <ul>
                        <li><span class="icon_check"></span> Write On Your Business Card</li>
                        <li><span class="icon_check"></span> Advertising Outdoors</li>
                        <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                        <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>
                    </ul>
                    <a href="#" class="ha-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
    <nav><a href="{{ route('artist_index') }}">Retour à l'index</a></nav>
@endsection
