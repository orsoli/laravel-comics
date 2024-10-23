{{-- main-header section  --}}
<div class="container my-5">
    <div class="row">
        <div class="col-8">
            <div class="card border border-0">
                <img src="{{$movies[0]["imgUrl"]}}" class="card-img-top" alt="{{$movies[0]["title"]}} image">
                <div class="card-body">
                    <a href="" class="text-dark text-decoration-none"><h5 class="card-title fs-1">{{$movies[0]["title"]}}</h5></a>
                    <p class="card-text">{{$movies[0]["type"]}}</p>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex flex-column gap-3">
            <div class="card">
                <img src="{{$movies[1]["imgUrl"]}}" class="card-img-top" alt="img">
                <div class="card-body">
                    <a href="#"><h5 class="card-title">{{$movies[1]["title"]}}</h5></a>
                    <p class="card-text">{{$movies[1]["type"]}}</p>
                </div>
            </div>
            <div class="card">
                <img src="{{$movies[2]["imgUrl"]}}" class="card-img-top" alt="img">
                <div class="card-body">
                    <a href="#"><h5 class="card-title">{{$movies[2]["title"]}}</h5></a>
                    <p class="card-text">{{$movies[2]["type"]}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
