@extends('layouts.main')

@section('content')
    {{-- Start Carousel --}}
    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('assets/files/pictures/slider-bg-1.jpg') }}')"
                    id="carousel_header">
                    <div class="carousel-caption">
                        <h1 class="animate__animated animate__bounceInDown animate__slow">Sinau Sareng <br>
                            Yawadvipa</h1>
                        <p class="animate__animated animate__bounceInUp">Mari Kita Menjelajahi Jawa Tengah Jogja
                            <br>Kamu bisa menemukan Banyak Kebudayaan dan Wisata yang Menarik
                        </p>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url('{{ asset('assets/files/pictures/slider-bg-2.jpg') }}')"
                    id="carousel_header">
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
            <h2 class="text-center pb-5 under-line">Our Product & Services</h2>
            <div class="row">
                <div class="col-lg-6 py-1">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/jateng.webp') }}" class="rounded h-100 w-100" alt="...">
                    </a>
                </div>
                <div class="col-lg-6 py-1">
                    <a href="">
                        <img src="{{ asset('assets/files/pictures/jogja.jpg') }}" class="rounded h-100 w-100" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Our Service --}}

    {{-- Start Our Team --}}
    <div class="rounded-3">
        <div class="container py-5">
            <h2 class="text-center pb-5 under-line">Our Teams</h2>
            <div class="row d-flex justify-content-center">
                <!-- Team Member 7 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/Riyann.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Ahmad Riyanto</h5>
                            <div class="card-text text-black-50">Web Developer</div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 1 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/aidaa.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Aida Ayuning Fauziah</h5>
                            <div class="card-text text-black-50">Business Development</div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/Haniff.png') }}" class="card-img-top team" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Hanif Putra Perdana</h5>
                            <div class="card-text text-black-50">Digital Marketing</div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/Fikrii.png') }}" class="card-img-top team" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Muhammad Fikri Abdillah Arifin</h5>
                            <div class="card-text text-black-50">Web Developer</div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/Nazilaa.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Nazila Salsabella</h5>
                            <div class="card-text text-black-50">3D Content Creator</div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 5 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/Novaa.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Nova Rizky Anggun Purbaningrum</h5>
                            <div class="card-text text-black-50">Business Development</div>
                        </div>
                    </div>
                </div>
                <!-- Team Member 6 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100">
                        <img src="{{ asset('assets/files/team/Sekarr.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Sekar Andini Saraswaty</h5>
                            <div class="card-text text-black-50">Digital Marketing</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    {{-- End Our Team --}}

    {{-- Start FAQ --}}
    <div class="rounded-3">
        <div class="container py-5 col-lg-6">
            <h2 class="text-center pb-5 under-line">FAQ</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Apa itu virtual tour?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Virtual tour merupakan inovasi terbaru untuk menjelajah suatu destinasi
                            tanpa harus keluar rumah karena penggunanya dapat “berjalan- jalan” secara virtual lintas
                            geografis.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Apa arti Yawadvipa?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yawadvipa (IAST: yāvaka dvīpa) diambil dari bahasa Sansekerta yang
                            diartikan sebagai pulau yang mempunyai banyak tanaman biji-bijian.
                            Yawadvipa menawarkan konsep baru dalam menjelajahi berbagai kebudayaan di Jawa Tengah dan DIY
                            yang dilakukan secara virtual sebagai bentuk upaya melestarikan kebudayaan Jawa Tengah dan DIY.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Mengapa Yawadvipa virtual tour wajib dicoba?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yawadvipa virtual tour wajib dicoba karena menawarkan pengalaman yang
                            berkesan bagi penggunanya dengan mengunjungi daerah di Jawa Tengah dan Yogyakarta secara virtual
                            panorama 360! Selain itu dengan Yawadvipa virtual tour ini pengguna dapat menambah wawasan
                            mereka terkait kebudayaan serta ciri khas dari daerah - daerah yang ada di Jawa Tengah dan
                            Yogyakarta sehingga dapat meningkatkan upaya pelestarian budaya.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Dimana saya bisa membeli tiket?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anda bisa membeli tiket Yawadvipa virtual tour ini melalui link
                            pembelian yang disediakan di website kami. Isilah semua data yang dibutuhkan kemudian lakukan
                            transaksi pembayaran. Setelah transkasi pembayaran sukses, Anda akan menerima email yang berisi
                            nomor e-tiket.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Bagaimana cara menukar tiket?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Cara penukaran tiket Yawadvipa virtual tour adalah setelah melakukan
                            transaksi pembayaran, maka akan mendapat email yang berisi nomor e-tiket. Kemudian nomor e-tiket
                            ini dimasukkan kedalam menu penukaran tiket di web Yawadvipa virtual tour. Setelah itu, anda
                            akan mulai berlangganan dan bisa melakukan virtual tour di web Yawadvipa.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            Adakah batasan umur dalam membeli tiket?
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Tidak ada batasan umur dalam membeli tiket, siapapun dari berbagai usia
                            dapat mengakses Yawadvipa virtual tour.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                            Apa saja benefit yang didapatkan pada Yawadvipa virtual tour?
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Benefit yang didapatkan dari Yawadvipa virtual tour adalah pengalaman
                            tour secara virtual yang tentu saja berkesan bagi penggunannya. Selain itu juga dapat
                            mengedukasi pengguna tentang kebudayaan dan ciri khas dari setiap daerah di Jawa Tengah dan DIY.
                            Yawadvipa virtual tour ini juga dapat diakses kapan saja dan dimana saja sehingga mudah untuk
                            pengguna melakukan virtual tour ini.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                            Apa informasi yang didapat ketika menggunakan Yawa virtual tour?
                        </button>
                    </h2>
                    <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Yang Anda dapat ketika menggunakan Yawadvipa virtual tour yaitu
                            informasi mengenai destinasi wisata, makanan khas, sejarah daerah, oleh - oleh khas, kerajinan
                            khas, serta budaya di setiap daerah provinsi Jawa Tengah dan DIY. Dengan begitu pengguna akan
                            mendapat wawasan serta pengalaman baru yang belum pernah didapat sebelumnya.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                            Dapatkah mengakses virtual tour menggunakan smartphone/ iphone atau hanya bisa melalui PC?
                        </button>
                    </h2>
                    <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Virtual tour kami kompatibel dengan iPad/iPhone, Smartphone/Tablet
                            Android, dan PC. Sehingga pengguna masih dapat menggunakan virtual tour ini menggunakan
                            smartphone/ iphone ketika tidak ada PC.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                            Apa yang membedakan Yawadvipa virtual tour dengan virtual tour lainnya?
                        </button>
                    </h2>
                    <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Kami menyediakan tour virtual daerah Jawa Tengah dan DIY yang disertai
                            dengan informasi mengenai kebudayaan serta ciri khas di setiap daerah sebagai bentuk pelestarian
                            budaya Jawa Tengah dan DIY. Virtual tour ini juga dilengkapi dengan pemandangan nyata dan
                            panorama 360, sehingga pengguna dapat merasakan pengalaman berada di tempat tersebut secara
                            langsung.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEleven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseEleven" aria-expanded="false"
                            aria-controls="flush-collapseEleven">
                            Bagaimana jika saya mengalami kendala ketika menggunakan Yawadvipa virtual tour?
                        </button>
                    </h2>
                    <div id="flush-collapseEleven" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Jika Anda mengalami kendala atau masalah ketika menggunakan produk
                            kami, silakan menghubungi kami di kontak yang tertera.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwelve">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwelve" aria-expanded="false"
                            aria-controls="flush-collapseTwelve">
                            Bagaimana jika ingin menjalin partnership?
                        </button>
                    </h2>
                    <div id="flush-collapseTwelve" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Jika ingin menjalin patnership harap mengunjungi website kami dan klik
                            hubungi kami untuk konsultasi dan berdiskusi patnership, atau bisa juga hubungi kami melalui
                            media sosial instagram Yawadvipa.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThreeteen">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThreeteen" aria-expanded="false"
                            aria-controls="flush-collapseThreeteen">
                            Saya punya pertanyaan yang tidak tercantum di sini?
                        </button>
                    </h2>
                    <div id="flush-collapseThreeteen" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThreeteen" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Hubungi kami, kami akan dengan senang hati membantu menjawab pertanyaan
                            yang tidak tercantum dan menambahkannya di sini.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End FAQ --}}
@endsection
