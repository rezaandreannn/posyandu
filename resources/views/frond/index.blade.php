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
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                            <div>
                                <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
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
                <div class="col-7 text-center  mb-5">
                    <h2 class="section-title">Imagine Features</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat
                        sapiente nam, id vero.</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
                        </div>
                        <div>
                            <h3>Marketing Consulting</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-store_mall_directory"></span></span>
                        </div>
                        <div>
                            <h3>Market Analysis</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-shopping_basket"></span></span>
                        </div>
                        <div>
                            <h3>Easy Purchase</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span
                                    class="text-primary icon-settings_backup_restore"></span></span>
                        </div>
                        <div>
                            <h3>Free Updates</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
                        </div>
                        <div>
                            <h3>100% Satistified</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>


                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-block">
                        <div class="unit-4-icon mb-3">
                            <span class="icon-wrap"><span class="text-primary icon-power"></span></span>
                        </div>
                        <div>
                            <h3>Easy Plugin</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae
                                vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="feature-big">
        <div class="container">
            <div class="row mb-5 site-section">
                <div class="col-lg-7" data-aos="fade-right">
                    <img src="{{ asset('frond/images/undraw_gift_card_6ekc.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
                    <h2 class="text-black">Communicate and gather feedback</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque
                        nisi architecto autem molestias corrupti officia veniam.</p>


                </div>
            </div>

            <div class="mt-5 row mb-5 site-section ">
                <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
                    <img src="{{ asset('frond/images/undraw_metrics_gtu7.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
                    <h2 class="text-black">Communicate and gather feedback</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque
                        nisi architecto autem molestias corrupti officia veniam</p>
                </div>
            </div>
        </div>
    </div>
</x-frond-layout>
