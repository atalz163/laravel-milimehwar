<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MiliMehwar</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/mili.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/flag-icons-master/css/flag-icon.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />

    <x-embed-styles />

</head>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0"
    nonce="fiCpGxQP"></script>
<main class="flex-shrink-0">
    <!-- Navigation-->
    <div class="top-icons">
        <div class="container px-5">
            <div class="row justify-content-between align-items-center">
                <!-- Language Icons -->
                <div class="col-auto" id="languageSelector">
                    @foreach (config('localization.locales') as $locale)
                        @php
                            $flagIconClass = '';
                            switch ($locale) {
                                case 'en':
                                    $flagIconClass = 'usa';
                                    break;
                                case 'dr':
                                case 'ps':
                                    $flagIconClass = 'afg';
                                    break;
                                // Add more cases for other locales if needed
                                default:
                                    $flagIconClass = '';
                            }
                        @endphp
                        <a href="{{ route('localization', $locale) }}" class="me-3 link-light text-decoration-none">
                            @if ($flagIconClass)
                                <i class="flag-icon flag-icon-{{ $flagIconClass }} bi bi-3x"></i>
                            @endif
                            {{ strtoupper($locale) }}
                        </a>
                    @endforeach

                </div>

                <!-- Social Media Icons -->
                <div class="col-auto">

                    <!-- Place your social media icons here -->
                    <!-- Example: -->
                    <a href="#" class="me-3 link-light"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-3 link-light"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                        </svg></a>
                    <a href="#" class="me-3 link-light"><i class="bi bi-youtube"></i></a>
                    <a href="mailto:info@milimehwar.com" class="me-3 link-light"><i class="bi bi-envelope-fill"></i></a>

                </div>
            </div>
        </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-info">

        <div class="container px-5">
            <a class="navbar-brand d-flex align-items-end" href="index.html"><img
                    src="{{ asset('images/milimehwar.png') }}" class="d-inline-block align-text-top logo" />
                <span class="ms-2">{{ __('homepage.MilliMehwar') }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html">{{ __('homepage.Annoucements') }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">{{ __('homepage.Articles') }}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{ __('homepage.Gallery') }}</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                            <li><a class="dropdown-item" href="blog-home.html">{{ __('homepage.Photos') }}</a></li>
                            <li><a class="dropdown-item" href="blog-post.html">{{ __('homepage.Videos') }}</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{ __('homepage.About Us') }}</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                            <li><a class="dropdown-item" href="blog-home.html">{{ __('homepage.Our Bio') }}</a></li>
                            <li><a class="dropdown-item" href="blog-post.html">{{ __('homepage.Our Mission') }}</a>
                            </li>
                            <li><a class="dropdown-item" href="blog-post.html">{{ __('homepage.Our Story') }}</a>
                            </li>
                            <li><a class="dropdown-item" href="blog-post.html">{{ __('homepage.Documents') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">{{ __('homepage.Contact') }}</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    <!--End of Navigation-->


    <!-- Main Content Section-->
    {{ $slot }}




</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <a href="#" class="back-to-top" aria-label="Back to Top">
        <i class="bi bi-arrow-up-circle"></i>
    </a>
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
            </div>
            <div class="col-auto">
                <a class="fs-5 px-2 link-light" href="#!"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-twitter-x"
                        viewBox="0 0 16 16">
                        <path
                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg></a>
                <a class="fs-5 px-2 link-light" href="#!"><i class="bi-facebook"></i></a>
                <a class="fs-5 px-2 link-light" href="#!"><i class="bi-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/scripts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<script>
    // JavaScript code to handle scrolling back to top
    $(document).ready(function() {
        // Show or hide the back-to-top button based on scroll position
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        // Scroll to top when the button is clicked
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>

<script>
    var a2a_config = a2a_config || {};
    a2a_config.num_services = 4;
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
</body>

</html>
