@extends('layouts.main')

@section('content')
    {{-- Start Carousel --}}
    <header class="pb-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('assets/files/pictures/jateng1.jpg') }}')">
                    <div class="carousel-caption">
                        <h1 class="animate_animated animatebounceInDown animate_slow">Sugeng Rawuh Ing Virtual Tour
                            <br> Provinsi Jawa Tengah!
                        </h1>
                        <p class="animate_animated animate_bounceInUp">Kami menawarkan konsep baru dalam menjelajahi lebih
                            jauh mengenai kebudayaan dan pariwisata <br> di banyak kota dan kabupaten di Jawa Tengah dengan
                            virtual tour.
                        </p>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url('{{ asset('assets/files/pictures/jateng2.jpg') }}')">
                    <div class="carousel-caption">
                        <h1 class="animate_animated animate_rollIn">Sinau Sareng <br>Yawadvipa</h1>
                        <p class="animate_animated animate_zoomInUp">Bersama Yawadvipa kamu dapat menjelajahi daerah di
                            Provinsi Jawa Tengah <br> dengan efek suara, narasi, dan teks untuk mendukung pengalaman imersif
                            kamu.<br>Kamu juga bisa mempelajari banyak hal yang belum kamu ketahui mengenai Provinsi Jawa
                            Tengah. <br> Yuk, sinau sareng Yawadvipa!
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    {{-- End Carousel --}}

    {{-- Start Our Service --}}
    <div class="rounded-3">
        <div class="container pb-5">
            <h2 class="text-center pb-3 under-line">Virtual Tour Jawa Tengah</h2>
            <div class="row">
                <div class="col-lg-4 py-1 service">
                    <a href="http://thanos.kelasmm4.pw/lawangsewu/" target="_blank">
                        <img src="{{ asset('assets/files/pictures/SEMARANG.jpg') }}"
                            class="rounded h-100 w-100 service-image" alt="...">
                        <div class="service-caption">
                            <div class="caption-text">
                                <h4>Semarang</h4>
                                <h4>360&deg</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 py-1 service">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/SALATIGA.jpg') }}"
                            class="rounded h-100 w-100 service-image" alt="...">
                        <div class="service-caption">
                            <div class="caption-text">
                                <h4>Salatiga</h4>
                                <h4>360&deg</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 py-1 service">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/PEKALONGAN.webp') }}"
                            class="rounded h-100 w-100 service-image" alt="...">
                        <div class="service-caption">
                            <div class="caption-text">
                                <h4>Pekalongan</h4>
                                <h4>360&deg</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 py-1 service">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/MAGELANG.jpg') }}"
                            class="rounded h-100 w-100 service-image" alt="...">
                        <div class="service-caption">
                            <div class="caption-text">
                                <h4>Magelang</h4>
                                <h4>360&deg</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 py-1 service">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/SURAKARTA.jpg') }}"
                            class="rounded h-100 w-100 service-image" alt="...">
                        <div class="service-caption">
                            <div class="caption-text">
                                <h4>Surakarta</h4>
                                <h4>360&deg</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 py-1 service">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/TEGAL.jpg') }}"
                            class="rounded h-100 w-100 service-image" alt="...">
                        <div class="service-caption">
                            <div class="caption-text">
                                <h4>Tegal</h4>
                                <h4>360&deg</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- End Our Service --}}
@endsection
