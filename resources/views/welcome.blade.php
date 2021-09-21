<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Styles -->
</head>

<body class="antialiased">
    <div class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active text-center">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">Our Works</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">Clients</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="video-hero">
            <video src=""></video>
        </div>
        <div class="identifier d-flex justify-content-center align-content-center">
            <img src="{{ asset('images/svg/Identity.svg') }}" alt="" class="img-fluid">
        </div>
        <div class="about-us d-flex justify-content-center align-content-center">
            <img src="{{ asset('images/About Us.png') }}" class="img-about" alt="">
            <div class="about-us-content">
                <img src="{{ asset('images/svg/Close Icon.svg') }}" class="img-close" alt="">
                <img src="{{ asset('images/svg/Folder.svg') }}" class="img-folder img-fluid" width="64" alt="">
                <span class=" about-us-text">About Us</span>
                <p class="about-us-desc mt-1">We are a Film & Motion Studio, Our Business is established in 2017. The
                    Business focuses
                    on several important aspects in video making industry such as content production,
                    TV commercials, Digital Video Ads, Campaign & Promotion, Graphic Design, 2D Motion Graphic
                    3D Animation, Company Profile, Corporate Video, Branding and many more. </p>
            </div>
        </div>
        <div class="our-works">
            <h5>OUR WORKS</h5>
        </div>
        <section id="tabs">
            <div class="row">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">PROMOTION VIDEOS</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">DIGITAL VIDEO ADS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">ANIMATION</a>
                            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                role="tab" aria-controls="nav-about" aria-selected="false">CORPORATE</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-content-center card-wrapper">
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <div class="card card-works">
                                        <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_829578104_200013331653767174292_382164.jpg"
                                            alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                            minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt
                            est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt
                            irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis
                            veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
                            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit
                            occaecat anim ullamco ad duis occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                            minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt
                            est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt
                            irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis
                            veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
                            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit
                            occaecat anim ullamco ad duis occaecat ex.
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                            minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt
                            est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt
                            irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis
                            veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation
                            mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit
                            occaecat anim ullamco ad duis occaecat ex.
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="services">
            <h5>SERVICES</h5>
            <div class="row">
                <div class="col-md-4">

                    <ul>
                        <li>Content production</li>
                        <li>TV commercials</li>
                        <li>Digital Video Ads</li>
                        <li>Campaign & Promotion</li>
                        <li>Design Graphic & Illustration</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>Content production</li>
                        <li>TV commercials</li>
                        <li>Digital Video Ads</li>
                        <li>Campaign & Promotion</li>
                        <li>Design Graphic & Illustration</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="clients">
            <div class="brands">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="brands_slider_container">
                                <div class="owl-carousel owl-theme brands_slider">
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_1.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_2.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_4.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_5.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_3.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_6.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_7.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1561819026/brands_8.jpg"
                                                alt=""></div>
                                    </div>
                                </div> <!-- Brands Slider Navigation -->
                                <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="container">
        <div class="request-quotation d-flex justify-content-center align-content-center m-4">
            <button class="btn btn-request">Request Quotation</button>
        </div>
    </div>
    <div class="divider"></div>
    <div class="footer-1">
        <div class="container">
            <img src="{{ asset('images/svg/Logo.svg') }}" alt="">
            <div class="pt-2">
                <p>+62 878 67018268<br>
                    PT Ruang Kreasi Bersama<br>
                    Gedung 49, Wr. Buncit, Kalibata, Jakarta Selatan</p>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <span>© 2021 PT. Ruang Kreasi Bersama. All rights reserved.</span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {

        if ($('.brands_slider').length) {
            var brandsSlider = $('.brands_slider');

            brandsSlider.owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: false,
                dots: false,
                autoWidth: true,
                items: 8,
                margin: 42
            });

            if ($('.brands_prev').length) {
                var prev = $('.brands_prev');
                prev.on('click', function () {
                    brandsSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.brands_next').length) {
                var next = $('.brands_next');
                next.on('click', function () {
                    brandsSlider.trigger('next.owl.carousel');
                });
            }
        }


        });
    </script>
</body>

</html>