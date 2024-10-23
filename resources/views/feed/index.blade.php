{{-- Extends Layouts  --}}
@extends('layouts.app')

{{-- Meta description  --}}
@section('page-description', 'Super Hero Hype')
{{-- Page title  --}}
@section('page-title', 'Super Hero Hype')

{{-- Main  --}}
@section('main-content')

{{-- Latest feature section   --}}
<section class="latest-features container">
    <div class="d-flex justify-content-between">
        <h1 class="fw-bold">Letest Features</h1>
        <button class="read-more border-0 text-light px-3">Read More Features</button>
    </div>
    <div class="hr my-3"></div>
</section>
@endsection



