@extends("layouts.app")


@section("main-content")
    <div class="container my-5">
        <div class="card w-75">
            <img src="{{$show["imgUrl"]}}" class="card-img" alt="{{$show["title"]}}">
            <div class="card-img-overlay">
                <h5 class="card-title fw-bold fs-2">{{$show["type"]}}</h5>
                <p class="card-text fs-5">{{$show["title"]}}</p>
            </div>
        </div>
        <div class="description my-5">
            <h1>{{$show["title"]}}</h1>
            <p><small>{{$show["type"]}}</small></p>
            <p>..... Here all decription  ......</p>
        </div>
    </div>
@endsection
