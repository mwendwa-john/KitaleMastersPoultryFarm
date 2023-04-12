@extends('layouts.app')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to Kitale Masters Poultry Farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Farm of Chicken products</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/carousel/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to Kitale Masters Poultry Farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Best Chickens</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/carousel/carousel-3.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to Kitale Masters Poultry Farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Best Chickens</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">5</h1>
                                <small class="fs-5 fw-bold">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about/about-1.jpg') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about/about-2.jpg') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/about/about-3.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Know About Our Chicken Farm & Our History</h1>
                    <p class="mb-4">
                        Kitale Masters Poultry Farm chicken is located in Kachibora, Cherangany Constituency, Trans-Nzoia County. 
                        We specialise in breeding and supplying of top quality chicken. We use the latest technology, high standards of 
                        hygiene and best practices in hatchery management to ensure that you get the strongest, healthiest hens possible.
                    </p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle mb-3">
                                <i class="fa fa-map-marker-alt text-body"></i>
                            </div>
                            <h5 class="mb-3">Our Location</h5>
                            <span>Kachibora, Cherangany Constituency, Trans-Nzoia County.</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle mb-3">
                                <i class="bi bi-bag-check-fill"></i>
                            </div>
                            <h5 class="mb-3">Our Products</h5>
                            <span>Day Old Chicks, Fresh Eggs Daily, Broilers, Layers</span>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('about') }}">Explore More on our about page</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    @livewire('why-us-component')
    <!-- Features End -->


    <!-- Banner Start -->
    @livewire('banner-component')
    <!-- Banner End -->


    <!-- Service Start -->
    @livewire('our-services-component')
    <!-- Service End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Gallery</p>
            <h1 class="mb-5">Explore Our Kitale Masters Poultry Farm Gallery</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-5.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-1.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-2.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-6.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-7.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-3.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-4.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-8.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Product Start -->
    @livewire('our-products-component')
    <!-- Product End -->


    <!-- Team Start -->
    @livewire('team-members-component')
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Testimonial</p>
                <h1 class="mb-5">What People Say About Our Poultry Farm</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/animal/animal.png') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/animal/animal.png') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/animal/animal.png') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/animal/animal.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('assets/img/avator/avator-1.png') }}" alt="">
                            <p class="fs-5">
                                I have been buying eggs from Kitale Masters Poultry Farm for a long time now, and I can say without hesitation 
                                that they are the best eggs I have ever tasted. They are always fresh, and the yolks are a beautiful golden color. 
                                I love supporting local farms like this one.
                            </p>
                            <h5>Grace K.</h5>
                            <span class="text-primary">Accountant</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('assets/img/avator/avator-1.png') }}" alt="">
                            <p class="fs-5">
                                The quality of the day-old chicks I received from Kitale Masters Poultry Farm was outstanding. 
                                They were delivered on time and were healthy and vibrant. I would definitely recommend this farm to anyone who 
                                wants to start a poultry farm.
                            </p>
                            <h5>John M.</h5>
                            <span class="text-primary">Farmer</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('assets/img/avator/avator-1.png') }}" alt="">
                            <p class="fs-5">
                                The poultry processing services provided by Kitale Masters Poultry Farm are second to none. The processing facility 
                                is clean and efficient, and the staff are friendly and professional. They always do a great job with my birds, and 
                                I would recommend them to anyone.
                            </p>
                            <h5>Esther W.</h5>
                            <span class="text-primary">Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection