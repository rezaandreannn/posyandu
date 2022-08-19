<x-frond-layout title="Beranda">
    <div class="site-blocks-cover" style="overflow: hidden;">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{ asset('frond/images/undraw_investing_7u74.svg') }}" alt="Image"
                        class="img-fluid img-absolute">

                    <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-6 mr-auto">
                            <h1>Halo, Selamat Datang di {{ Auth::user()->posyandu ?? 'Posyandu' }}</h1>
                            <p class="mb-5">Kami Mengelola berbagai data dan informasi yang berkaitan dengan kegiatan
                                Posyandu di Desa. Menyusun rencana kegiatan tahunan dan mengupayakan adanya
                                sumber-sumber pendanaan untuk mendukung kegiatan pembinaan posyandu.</p>
                            <div>
                                {{-- <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section" id="features-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
                <div class="col-10 text-center  mb-5">
                    <h2 class="section-title">Mengapa kita harus ke posyandu?</h2>
                    <p class="lead">Dalam memperoleh pelayanan kesehatan ibu dan anak. Tujuan utama posyandu adalah
                        mencegah peningkatan angka kematian ibu dan bayi saat kehamilan, persalinan, atau setelahnya
                        melalui pemberdayaan masyarakat.</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>Vitamin A Posyandu untuk apa?</h3>
                            <p>Mengkonsumsi vitamin A bagi balita sangat banyak manfaatnya, seperti : Meningkatkan daya
                                tahan tubuh terhadap penyakit dan infeksi seperti campak dan diare. Membantu proses
                                penglihatan dalam adaptasi terang ke tempat yang gelap. Mencegah kelainan pada sel – sel
                                epitel termasuk selaput lender mata</p>
                            {{-- <p><a href="#">Learn More</a></p> --}}
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>Berapa kali pemberian vitamin A pada balita?</h3>
                            <p>
                                Pada bayi usia 6-11 bulan, kapsul vitamin A diberikan satu kali selama rentang waktu
                                tersebut dengan dosis 100.000 IU (international unit). Sedangkan pada anak usia 12-59
                                bulan, kapsul vitamin A diberikan setiap 4 hingga 6 bulan sekali dengan dosis 200.000 IU
                                setiap pemberian.</p>
                            {{-- <p><a href="#">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>Bagaimana cara mendapatkan vitamin A selain di Posyandu?</h3>
                            <p>Bila memang di puskesmas dekat tempat tinggal Anda tidak tersedia kapsul vitamin A, Anda
                                dapat memperolehnya di fasilitas pelayanan kesehatan lain, misalnya posyandu, balai
                                pengobatan, klinik praktik dokter, atau rumah sakit.</p>
                            {{-- <p><a href="#">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>Wajibkah ibu hamil ikut posyandu?</h3>
                            <p>Setiap ibu hamil, anak balita seharusnya ikut kegiatan posyandu, karena dengan datang ke
                                posyandu akan mendapatkan manfaat yang banyak. Memperoleh kemudahan untuk mendapatkan
                                informasi dan pelayanan kesehatan bagi ibu, bayi, dan anak balita.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>Posyandu biasanya mulai jam berapa?</h3>
                            <p>Kegiatan Posyandu diberi jadwal yaitu di mulai dari jam 8 s/d jam 9 yakni 1 rt, jam 9 s/d
                                jam 10 yakni 1rt, begitu seterusnya, agar di posyandu tidak terlalu menumpuk.</p>
                            {{-- <p><a href="#">Learn More</a></p> --}}
                        </div>
                    </div>


                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>Apa fungsi dari posyandu?</h3>
                            <p>
                                Posyandu memberikan layanan kesehatan ibu dan anak, KB, imunisasi, gizi, penanggulangan
                                diare. Ibu: Pemeliharaan kesehatan ibu di posyandu, Pemeriksaan kehamilandan nifas,
                                Pelayanan peningkatan gizi melalui pemberian vitamin dan pil penambah darah, Imunisasi
                                TT untuk ibu hamil</p>
                            {{-- <p><a href="#">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="feature-big">
        <div class="container">
            {{-- <div class="row mb-5 site-section">
                <div class="col-lg-7" data-aos="fade-right">
                    <img src="{{ asset('frond/images/undraw_gift_card_6ekc.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
                    <h2 class="text-black">Communicate and gather feedback</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque
                        nisi architecto autem molestias corrupti officia veniam.</p>


                </div>
            </div> --}}

            <div class="mt-5 row mb-5 site-section ">
                <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                    <img src="{{ asset('frond/images/undraw_metrics_gtu7.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
                    <h2 class="text-black">Berbagai Kegiatan Posyandu dan Manfaatnya</h2>
                    <p class="">1. Imuniasi Pada Balita</p>
                    <p class="">2. Pemberian Vitamin Pada Balita</p>
                    <p class="">3. Penimbangan Pada Balita</p>
                    <p class="">4. Imuniasi Pada Ibu Hamil</p>
                    <p class="">5. Pemberian Vitamin Pada Ibu Hamil</p>
                    <p class="mb-4">6. Penimbangan Pada Ibu Hamil</p>

                </div>
            </div>
        </div>
    </div>
</x-frond-layout>
