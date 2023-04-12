@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Banner Start -->
    @livewire('banner-component')
    <!-- Banner End -->

    <!-- content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Know About Our Farm & Our History</h1>
                    <p class="mb-4">
                        Kitale Masters Poultry Farm is a leading producer of high-quality poultry products located in the bustling city of Kitale, Kenya. 
                        With years of experience in the poultry industry, the farm has earned a reputation for excellence, providing customers with premium 
                        poultry products that are always fresh, healthy, and delicious.
                    </p>
                    <p class="mb-4">
                        At Kitale Masters Poultry Farm, we believe in sustainable farming 
                        practices that prioritize the welfare of our animals, the environment, and our customers. That's why we use only the best farming 
                        techniques and equipment to ensure that our birds are well-fed, healthy, and happy. Our birds are raised in a clean and comfortable 
                        environment, with access to plenty of natural light, fresh air, and space to roam. 
                    </p>
                    <p class="mb-4">
                        Our commitment to quality extends to every aspect of our operations, from breeding and hatching to processing and packaging. 
                        We take great care to ensure that our products meet the highest standards of quality and safety, using state-of-the-art equipment 
                        and rigorous quality control measures to ensure that every product that leaves our farm is of the highest quality.
                    </p>
                    <p class="mb-4">
                        Whether you're looking for fresh chicken, eggs, or other poultry products, Kitale Masters Poultry Farm has got you covered. We take 
                        pride in our ability to provide our customers with the freshest and most delicious poultry products available, and we're always 
                        striving to improve and innovate to meet the changing needs of our customers.
                    </p>
                    <p class="mb-4">
                        Thank you for considering Kitale Masters Poultry Farm for all your poultry needs. We look forward to serving you and providing you 
                        with the best possible poultry products in the industry.
                    </p>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Know About Our Chicken</h1>
                    <p class="mb-4">
                        Kitale Masters Poultry Farm chicken is an approved poultry hatchery in Cherangany 
                        specialising in Kienyeji, Hybrid, One Day old chicks (broilers and layers), Poultry farming accessories 
                        including cages, automatic drinkers etc. We stock both Kienyeji and Hybrid broilers and layers for meat and 
                        egg laying purposes. Local Fresh Organic high quality eggs.
                        Our products include:
                        <p><i class="fa fa-check text-primary me-3"></i>Naturally Reared Chickens</p>
                        <p><i class="fa fa-check text-primary me-3"></i>100% Free Range</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Top Quality Service & Products</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Custom Order</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- content End -->


    <!-- Team Start -->
    @livewire('team-members-component')
    <!-- Team End -->

@endsection