{{-- Extends Layouts  --}}
@extends('layouts.app')

{{-- Meta description  --}}
@section('page-description', 'Super Hero Hype')
{{-- Page title  --}}
@section('page-title', 'Super Hero Hype')

{{-- Main  --}}
@section('main-content')

@include('partials.main-header')


{{-- Latest feature section   --}}
<section class="latest-features container mb-5">
    <div class="d-flex justify-content-between">
        <h1 class="fw-bold">Letest Features</h1>
        <button class="read-more border-0 text-light px-3">Read More Features</button>
    </div>
    <div class="hr my-3"></div>
    <div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-4 g-5">
        @forelse ($features as $feature)
            <div class="col">
                <div class="card">
                    <img src="{{$feature["imgUrl"]}}" class="card-img-top" alt="{{$feature["title"]}}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <a href="{{route('show', $feature["id"])}}"><h5 class="card-title">{{$feature["title"]}}</h5></a>
                        <p class="card-text"> {{$feature["type"]}} </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="container">
                abort(404)
            </div>
        @endforelse
    </div>
</section>

{{-- Movies section   --}}
<section class="movies container mb-5">
    <div class="d-flex justify-content-between">
        <h1 class="fw-bold">Movies</h1>
        <button class="read-more border-0 text-light px-3">More Movies</button>
    </div>
    <div class="hr my-3"></div>
    <div class="row row-cols-sm-1 row-cols-md-3 row-cols-lg-4 g-3">
        @forelse ($movies as $movie)
            <div class="col">
                <div class="card">
                    <img src="{{$movie["imgUrl"]}}" class="card-img-top" alt="{{$movie["title"]}}">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <a href="{{route('show', $movie["id"])}}"><h5 class="card-title">{{$movie["title"]}}</h5></a>
                        <p class="card-text"> {{$movie["type"]}} </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="container">
                abort(404)
            </div>
        @endforelse
    </div>
</section>

@endsection



