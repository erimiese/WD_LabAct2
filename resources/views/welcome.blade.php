<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Portfolio of John Russel Soreda">
    <meta name="author" content="John Russel Soreda">
    <title>John Russel Soreda - Portfolio</title>

    <!-- CSS Files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">
</head>

<body>
    @if ($showAlert)
     <script>
        alert("Welcome, {{ $username }}!");
     </script>
    @endif

     @if ($username)
     <h1>Welcome, {{ $username }}!</h1>
     @else
     <!-- Ensure nothing is displayed for root if $username is null -->
     @endif

    <!-- TemplateMo 578 First Portfolio -->
    <!-- https://templatemo.com/tm-578-first-portfolio -->

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>    
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="index.html" class="navbar-brand mx-auto mx-lg-0">PORTFOLIO</a>

            <div class="d-flex align-items-center d-lg-none">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5">+639388657225</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#section_1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section_2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section_3">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section_4">Contact</a>
                    </li>
                </ul>

                <div class="d-none d-lg-flex align-items-center ms-auto">
                    <i class="navbar-icon bi-telephone-plus me-3"></i>
                    <a class="custom-btn btn" href="#section_5">+639388657225</a>
                </div>
            </div>
        </div>
    </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex align-items-center mb-4">
                                <img src="{{ asset('images/projects/1X1.png') }}" class="avatar-image avatar-image-large img-fluid" alt="">


                                    <h1 class="hero-title ms-3 mb-0">Good Day Everyone!</h1>
                                </div>

                                <h2 class="mb-4"></h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Meet me</a></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 position-relative">
                            <div class="hero-image-wrap"></div>
                            <img src="{{ asset('images/projects/pic.png') }}" class="hero-image img-fluid" alt="">
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                        <img src="{{ asset('images/projects/information-technology-.jpg') }}" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">My Story</h2>

                                    <img src="{{ asset('images/projects/1X1.png') }}" class="avatar-image img-fluid" alt="">

                                </div>

                                <h3 class="pt-2 mb-3">Hi I'am Russel! </h3>

                                <p>a Bachelor of Science in Information Technology - 3rd year student at Bicol University, I am 20 years of Age, my home address is Banuyo, Pilar, Sorsogon and current staying at Bicol University Dormitory, Legazpi City, Albay </p>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Information</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">Name</span> 
                                        <span>John Russel N. Soreda</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Birthday</span> 
                                        <span>January 15, 2004</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Phone</span> 
                                         <span><a href="tel: 305-240-9671">+639388657225</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Email</span> 
                                        <span><a href="mailto:hello@josh.design">soredajohnrussel@gmail.com</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <strong class="featured-numbers">2</strong>

                                        <p class="featured-text">Years of Experiences</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <strong class="featured-numbers">23</strong>

                                        <p class="featured-text">Happy Customers</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <strong class="featured-numbers">54</strong>

                                        <p class="featured-text">Project Finished</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <strong class="featured-numbers">10</strong>

                                        <p class="featured-text">Digital Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="clients section-padding">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-12">
                            <h3 class="text-center mb-5">Education</h3>
                        </div>
                        <div class="col-lg-2 col-4 ms-auto clients-item-height">
                            <img src="{{ asset('images/clients/') }}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{ asset('images/clients/PCS.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{ asset('images/clients/PNCHS.jpg')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="{{ asset('images/clients/BU.png')}}" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 me-auto clients-item-height">
                            <img src="{{ asset('images/clients/') }}" class="clients-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section>


            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <img src="{{ asset('images/projects/handshake-man-woman-after-signing-business-contract-closeup.jpg') }}" class="avatar-image img-fluid" alt="Handshake Image">

                                <h2 class="text-white ms-4 mb-0">Services</h2>
                            </div>

                            <div class="row pt-lg-5">
                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Websites</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">₱20,000</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>


                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-globe"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Branding</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">₱15,000</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-lightbulb"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Ecommerce</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">₱60,000</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-phone"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">SEO</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">₱10,000</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-google"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12 ms-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                            <img src="{{ asset('images/projects/white-desk-work-study-aesthetics.jpg') }}" class="avatar-image img-fluid" alt="White Desk Work Study Aesthetics">

                                <h2 class="text-white ms-4 mb-0">Projects</h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">App</small>

                                    <h3 class="projects-title">Android map application </h3>
                                </div>

                                <a href="images/projects/map.jpg" class="popup-image">
                                <img src="{{ asset('images/projects/map.jpg') }}" class="projects-image img-fluid" alt="Map Image">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">Logo</small>

                                    <h3 class="projects-title">Just_Flowers</h3>
                                </div>
                                <a href="images/projects/just_flowers.jpg" class="popup-image">
                                <img src="{{ asset('images/projects/just_flowers.jpg') }}" class="projects-image img-fluid" alt="Just Flowers">

                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">Website</small>

                                    <h3 class="projects-title">PJRS Online Shop</h3>
                                </div>

                                <a href="images/projects/website.jpg" class="popup-image">
                                <img src="{{ asset('images/projects/website.jpg') }}" class="projects-image img-fluid" alt="Website">

                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section><section class="projects section-padding" id="section_4">

            <section class="contact section-padding" id="section_5">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-8 col-12">
                                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="{{ asset('images/projects/aerial-view-man-using-computer-laptop-wooden-table.jpg') }}" class="avatar-image img-fluid" alt="Aerial View of Man Using Computer">

                                    <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                                <div class="contact-info contact-info-border-start d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">Services</strong>

                                    <ul class="footer-menu">
                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Websites</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Branding</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Ecommerce</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">SEO</a></li>
                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                                    <ul class="social-icon">
                                        <li class="social-icon-item"><a href="https://x.com/russelioooo?t=pOZw-ZxbWdNA57nMOzQumA&s=09" class="social-icon-link bi-twitter"></a></li>

                                        <li class="social-icon-item"><a href="https://www.instagram.com/russelioo?igsh=cXlzYmM5cTZzYjgy" href="#" class="social-icon-link bi-instagram"></a></li>

                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                                    <p class="mb-0">I’m available for freelance projects</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                                <div class="contact-info d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">About</strong>

                                    <p class="mb-2">
                                        Russel is a professional web developer. Feel free to get in touch with me.
                              </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                                    <p>
                                        <a href="mailto:hello@josh.design">
                                            soredajohnrussel@gmail.com
                                        </a>
                                    </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                                    <p class="mb-0">
                                        <a href="tel: +639388657225">
                                            +639388657225
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                                <form action="#" method="get" class="custom-form contact-form" role="form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                                
                                                <label for="floatingInput">Name</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12"> 
                                            <div class="form-floating">
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                                
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">

                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <i class="bi-globe form-check-icon"></i>
                                                    <span class="form-check-label-text">Websites</span>
                                                </label>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">

                                                <label class="form-check-label" for="inlineCheckbox2">
                                                    <i class="bi-lightbulb form-check-icon"></i>
                                                    <span class="form-check-label-text">Branding</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">

                                                <label class="form-check-label" for="inlineCheckbox3">
                                                    <i class="bi-phone form-check-icon"></i>
                                                    <span class="form-check-label-text">Ecommerce</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline me-0">
                                                <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">

                                                <label class="form-check-label" for="inlineCheckbox4">
                                                    <i class="bi-google form-check-icon"></i>
                                                    <span class="form-check-label-text">SEO</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                                
                                                <label for="floatingTextarea">Tell me about the project</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 ms-auto">
                                            <button type="submit" class="form-control">Send</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>