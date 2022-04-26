@extends('layouts.main')

@section('content')
    <div class="container mt-5 pt-3">
        <div class="mb-5">
            <h1 class="under-line-heading-blog mb-3">MARI MUDIK REELS & PHOTO COMPETITION 2022</h1>
            <img src="{{ asset('assets/files/pictures/blog/marmud.jpg') }}" class="rounded img-fluid d-block mx-auto" alt="">
            <p class="text-justify mt-3">Marmud (Mari Mudik) Reels and Photo Competition merupakan sebuah kompetisi umum di bidang fotografi dan videografi yang
                diselenggarakan oleh
                Yawadvipa di platform Instagram sebagai salah satu bentuk untuk memeriahkan kegiatan mudik di Jawa Tengah dan Daerah Istimewa Yogyakarta pada tahun
                2022.
            </p>

            <h3>GENERAL TERMS :</h3>
            <ul class="list-unstyled">
                <ul>
                    <li>WAJIB mengkonfirmasi dan mengisi data peserta pada bit.ly/yawadvipacontest.</li>
                    <li>Waktu pengunggahan konten dimulai tanggal 27 April 2022 sampai 06 Mei 2022.</li>
                    <li>Konten dapat memuat ciri khas, budaya, atau pariwisata yang ada di Jawa Tengah dan Daerah Istimewa Yogyakarta.</li>
                    <li>Mengikuti akun instagram @Yawadvipa dan mention minimal 3 temanmu pada kolom komentar di postingan berikut (link poster ig kita).</li>
                    <li>Akun instagram peserta harus akun pribadi dan tidak dalam kondisi diprivate.</li>
                    <li>Repost poster “MARMUD Yawadvipa Competition 2022” ke Instagram story. Link poster: (poster).</li>
                    <li>Konten HARUS sesuai dengan norma-norma sosial dan tidak mengandung SARA.</li>
                    <li>Konten yang dilombakan HARUS karya pribadi, tidak meniru/menjiplak/mentranslate-ulang/menggunakan milik orang lain dan belum pernah
                        diikutsertakan dalam lomba lain.</li>
                    <li>Konten peserta akan menjadi hak milik team Yawadvipa dan dapat dipergunakan untuk kepentingan publikasi.</li>
                    <li>Dilarang menghapus reels dan foto yang dilombakan selama periode lomba berlangsung.</li>
                    <li>Keputusan panitia bersifat mutlak dan panitia berhak mendiskualifikasi peserta yang melanggar.</li>
                    <li>Periode</li>
                </ul>
            </ul>


            <h3>REELS TERMS :</h3>
            <ul class="list-unstyled">
                <ul>
                    <li>Bentuk konten dapat berupa voice over, cinematic, atau edukasi.</li>
                    <li>Video berdurasi maksimal 1 menit.</li>
                    <li>Tag akun Instagram @Yawadvipa.</li>
                    <li>Format caption:
                        <p>[MARMUD @Yawadvipa Competition 2022]</p>
                        <p>(Nama Peserta) - (Kategori Lomba)</p>
                        <p>(Ceritakan pengalamanmu)</p>
                        <p>(Hashtag yang penyelenggara berikan)</p>

                        Contoh caption:
                        <p>[MARMUD @Yawadvipa Competition 2022]</p>
                        <p>RIYANTO MARTINO DABELLA - Jawa Tengah</p>
                        <p>Halo gais, kali ini aku mau share reels/post mengenai Lawang Sewu yang ada di Semarang. Bismillah kontenku cuaaannnnn🤑</p>
                        <p>#Yawadvipa #MARMUD2022 #Lebaran2022 #LawangSewu #MARMUDJawaTengah</p>
                    </li>
                    <li>Format hashtag untuk reels Jawa Tengah: #Yawadvipa #MARMUD2022 #Lebaran2022 #(NamaTempat) #MARMUDJawaTengah</li>
                    <li>Format hashtag untuk reels Yogyakarta: #Yawadvipa #MARMUD2022 #Lebaran2022 #(NamaTempat) #MARMUDYogyakarta</li>
                </ul>
            </ul>

            <h3>PHOTO TERMS :</h3>
            <ul class="list-unstyled">
                <ul>
                    <li>Tidak ada maksimal foto yang diposting, dapat berbentuk carousel.</li>
                    <li>Tag akun Instagram @Yawadvipa.</li>
                    <li>Foto bisa berupa kegiatan, situasi, benda, gedung yang berhubungan dengan tema yang diberikan yaitu mudik ke Jawa Tengah dan Istimewa
                        Yogyakarta.</li>
                    <li>Kalimat tidak dibatasi untuk menceritakan keseruanmu dalam bermudik ke Jawa Tengah dan Daerah Istimewa Yogyakarta.</li>
                    <li>Format caption:
                        <p>[MARMUD @Yawadvipa Competition 2022]</p>
                        <p>(Nama Peserta) - (Kategori Lomba)</p>
                        <p>(Ceritakan maksud dari foto kamu)</p>
                        <p>(Hashtag yang penyelenggara berikan)</p>

                        Contoh caption:
                        <p>[MARMUD @Yawadvipa Competition 2022]</p>
                        <p> RIYANTI MARTINO DABELLA - Yogyakarta</p>
                        <p>Halo gais, kali ini aku mau share post mengenai Lawang Sewu yang ada di Semarang. Bismillah kontenku cuaaannnnn🤑</p>
                        <p>#Yawadvipa #MARMUD2022 #Lebaran2022 #LawangSewu #MARMUDJawaTengah</p>
                    </li>
                    <li>Format hashtag untuk reels Jawa Tengah: #Yawadvipa #MARMUD2022 #Lebaran2022 #(NamaTempat) #MARMUDJawaTengah</li>
                    <li>Format hashtag untuk reels Yogyakarta: #Yawadvipa #MARMUD2022 #Lebaran2022 #(NamaTempat) #MARMUDYogyakarta</li>
                </ul>
            </ul>
        </div>
    </div>

    {{-- FAQ --}}
    <div class="rounded-3" data-aos="fade-up" data-aos-duration="1000">
        <div class="container py-5 col-lg-6">
            <h2 class="text-center pb-5 under-line">FAQ</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            Lomba ini dapat diikuti oleh siapa saja?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lomba terbuka untuk segala usia dan tidak dipungut biaya.</div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="350">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            Lomba MARMUD Yawadvipa sampai kapan kak?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Periode MARMUD Yawadvipa Competition dimulai dari tanggal 26 April 2022 sampai 06 Mei 2022 pukul 23.59 WIB
                        </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                            aria-expanded="false" aria-controls="flush-collapseThree">
                            Apakah boleh mengikuti kedua lombanya?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Boleh mengikuti kedua lomba.</div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                            aria-expanded="false" aria-controls="flush-collapseFour">
                            Pengumuman kontes kapan kak?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">08 Mei 2022</div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                            aria-expanded="false" aria-controls="flush-collapseFive">
                            Hadiah kontesnya apa kak?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Hadiah kontes berupa saldo e-wallet dengan total hadiah sebesar Rp 14.000.000,- yaa </div>
                    </div>
                </div>
                <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false"
                            aria-controls="flush-collapseSix">
                            Kalau mau tanya-tanya lebih lanjut kemana kak?
                        </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Bisa menghubungi narahubung Yawadvipa:
                            <p><a href="https://wa.me/+6285546226720" target="_blank">☎️wa.me/+6285329902394 (Yawadvipa)</a></p>
                            <p><a href="https://instagram.com/yawadvipa" target="_blank">📸instagram.com/yawadvipa</a></p>
                            <p>📬YawadvipaVT@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End FAQ --}}
@endsection
