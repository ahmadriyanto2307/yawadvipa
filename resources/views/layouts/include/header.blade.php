<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a href="{{ route('home') }}">
            <img class="navbar-brand pe-2" src="{{ asset('assets/files/pictures/logo.png') }}" alt="..." />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center py-3" id="navbarNavAltMarkup">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Product&Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('product_jateng') }}">Virtual Tour Jawa
                                Tengah</a></li>
                        <li><a class="dropdown-item" href="{{ route('product_jogja') }}">Virtual Tour Yogyakarta</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" id="button-mod" href="#contact-us">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
