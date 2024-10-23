<header>
    <nav class="navbar navbar-expand-lg p-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('img/logo.png') }}" alt="logo" class="logo card-img-top w-100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($navBars as $key => $navBar)
                        <li class="nav-item">
                            <a class="nav-link text-light fs-5 p-2" aria-current="page" href="#">{{$navBar}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
