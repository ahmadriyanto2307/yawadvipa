<nav class="navbar navbar-expand-xl navbar-light fixed-top">
    <div class="container">
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
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('jateng') }}" aria-current="page" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('team') }}" aria-current="page" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('blog') }}" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('about') }}" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('hubungi') }}" id="button-mod" href="#">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
