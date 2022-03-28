<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand " href="#">
        <img class="navbar-brand" src="{{ asset('assets/files/pictures/logo.png') }}" alt="..."/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center py-3" id="navbarNavAltMarkup">
            <ul class="navbar-nav text-center">

                <li class="nav-item">
                    <a class="nav-link active"href="{{ route('home') }}" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Product&Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" id="button-mod" href="#">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
