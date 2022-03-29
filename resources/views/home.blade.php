@extends('layouts.main')

@section('content')
    {{-- Start Carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background-image: url('{{ asset('assets/files/pictures/slider-bg-1.jpg') }}')">
                <div class="carousel-caption">
                    <h1 class="animate__animated animate__bounceInDown animate__slow">Sinau Sareng <br>
                        Yawadvipa</h1>
                    <p class="animate__animated animate__bounceInUp">Mari Kita Menjelajahi Jawa Tengah Jogja
                        <br>Kamu bisa menemukan Banyak Kebudayaan dan Wisata yang Menarik
                    </p>
                </div>
            </div>
            <div class="carousel-item"
                style="background-image: url('{{ asset('assets/files/pictures/slider-bg-2.jpg') }}')">
                <div class="carousel-caption">
                    <h1 class="animate__animated animate__rollIn">Smart Eye Virtual<br> and
                        3D Design</h1>
                    <p class="animate__animated animate__zoomInUp">Yawadvipa Merupakan Virtual Tour Online yang
                        Interaktif
                        <br> Melalui Design dan Animasi 3D Visual Setara 360 Derajat
                        <br> serta Dapat Berinteraksi Langsung dengan Pengunjung yang Lain
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- End Carousel --}}

    {{-- Start About --}}
    <div class="rounded-3">
        <div class="container py-5">
            <h2 class="text-center pb-5 under-line">About Us</h2>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="text-justify"> Yawadvipa merupakan konsep baru dalam menjelajahi berbagai kebudayaan di jawa
                        tengah yang dilakukan
                        secara virtual bertujuan untuk melestarikan kebudayaan Jawa Tengah dan Yogyakarta. Dengan adanya
                        Virtual Tour ini, banyak kebudayaan dari berbagai daerah di Jawa tengah yang akan dikenalkan pada
                        banyak orang, tentunya juga dapat mendongkrak penjualan umkm di jawa tengah, pameran ini juga dapat
                        diakses dimanapun bahkan dapat berinteraksi dengan audiens lain saat pameran sedang berlangsung</p>
                </div>
                <div class="col-lg-6 py-2">
                    <img src="{{ asset('assets/files/pictures/about.jpg') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
    {{-- End About --}}


    {{-- Start Our Partners --}}
    <div class="rounded-3">
        <div class="container py-5">
            <h2 class="text-center pb-5 under-line">Our Partners</h2>
            <img src="{{ asset('assets/files/pictures/partner.png') }}" class="rounded h-100 w-100" alt="...">
        </div>
    </div>
    {{-- End Our Partners --}}

    {{-- Start Our Service --}}
    <div class="rounded-3">
        <div class="container py-5">
            <h2 class="text-center pb-5 under-line">Our Services</h2>
            <div class="row">
                <div class="col align-self-center">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/jateng.webp') }}" class="rounded h-100 w-100" alt="...">
                    </a>
                </div>
                <div class="col">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/jogja.jpg') }}" class="rounded h-100 w-100" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Our Service --}}

    {{-- Start FAQ --}}
    <div class="rounded-3">
        <div class="container py-5 col-lg-6">
            <h2 class="text-center pb-5 under-line">FAQ</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Kenapa harus menggunakan virtual event?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Virtual event memiliki potensi luar biasa dalam meningkatkan
                            keterlibatan audiens dan mempromosikan merek atau produk Anda. Dengan menggunakan virtual event
                            SVCC, Anda dapat menjangkau ribuan audiens dengan tampilan event yang menarik didukung dengan
                            teknologi terkini. Nikmati beragam produk SVCC dan rasakan banyak keuntungan dengan virtual
                            event.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Di mana saya dapat mengetahui pricing jika ingin menggunakan produk SVCC?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Jika Anda ingin mengetahui rincian harga dari produk kami, silakan
                            menghubungi kami di kontak yang tertera.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Apakah layanan SVCC dapat custom by request?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">untuk semua layanan seperti landing page dan virtual booth dapat
                            dikustomisasikan sesuai kebutuhan dan keinginan konsumen.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Apakah saya bisa mendapatkan pelayanan secara offline/onsite?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">SVCC akan memberikan layanan untuk kebutuhan acara Anda secara offline
                            atau onsite seperti penyediaan camera equipment, dll.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End FAQ --}}

    {{-- Pre-Footer --}}
    <div class="p-5 rounded-3 bg-light">
        <div class="container-sm py-5">
            <div class="row">
                <div class="col align-self-center text-center">
                    <h2>Konsultasikan ide virtual event Anda secara gratis</h2>
                    <p> Kami ingin membantu Anda menjawab pertanyaan seputar produk dan layanan SVCC.</p>
                    <button class="btn btn-primary btn-lg" id="button-mod" type="button">Hubungi kami</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Pre-footer --}}
@endsection
