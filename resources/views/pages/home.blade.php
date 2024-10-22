{{-- Extends Layouts  --}}
@extends('layouts.app')

{{-- Meta description  --}}
@section('page-description', 'Super Hero Hype')
{{-- Page title  --}}
@section('page-title', 'Super Hero Hype')

{{-- Main  --}}
@section('main-content')
<section class="main-header container my-4">
    <div class="row">
        <div class="col-8">
            <div class="card border border-0">
                <img src="https://www.superherohype.com/wp-content/uploads/sites/4/2024/10/Screenshot_2023-11-29_at_10.38.54_AM_1200x675-2024-10-22T143300.888.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="" class="text-dark text-decoration-none"><h5 class="card-title fs-1">Marvel Studios Announces 2028 Releases Dates for 3 MCU Movies</h5></a>
                    <p class="card-text">Movies</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            @foreach ($asideMainList as $key => $asideCard)
                <div class="card">
                    <img src="{{$asideCard["imgUrl"]}}" class="card-img-top" alt="img">
                    <div class="card-body">
                        <a href="#"><h5 class="card-title">{{$asideCard["titleLink"]}}</h5></a>
                        <p class="card-text">Movies</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection



