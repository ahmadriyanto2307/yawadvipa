<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
        <a href="{{ route('home') }}">
            <img class="navbar-brand pe-2" src="{{ asset('assets/files/pictures/logo.png') }}" alt="..." />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center py-3" id="navbarNavAltMarkup">
            <ul class="navbar-nav text-center">
                {{-- Navbar Static --}}
                <li class="nav-item">
                    <a class="nav-link underline" href="{{ route('home') }}" aria-current="page" href="#">Home</a>
                </li>

                {{-- Navbar Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product&Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#virtual-expo">Virtual Expo</a></li>
                        <li class="nav-item dropdown drop-down02">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Virtual Tour
                            </a>
                            <ul class="dropdown-menu sub-menu02" aria-labelledby="navbarDropdown">
                                @foreach ($product_region as $rg)
                                    <li><a class="dropdown-item" href="{{ route('product', ['virtual-tour', $rg->slug]) }}">{{ $rg->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- Contact Us --}}
                <li class="nav-item">
                    <a class="btn btn-primary" id="button-mod" href="#contact-us">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
