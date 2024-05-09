<x-app-layout>


    <!-- carousel-->
<<<<<<< HEAD
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $currentLocale = App::getLocale();
                $language = \App\Models\Language::where('code', $currentLocale)->first();
                $carousels = null;
                if ($language) {
                    $carousels = \App\Models\Carousel::where('language_id', $language->id)
                        ->where('active', true)
                        ->orderBy('created_at', 'desc')
                        ->take(4)
                        ->get();
                }
            @endphp
=======
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php
            $currentLocale = App::getLocale();
            $language = \App\Models\Language::where('code', $currentLocale)->first();
            $carousels = null;
            if ($language) {
                $carousels = \App\Models\Carousel::where('language_id', $language->id)
                    ->where('active', true)
                    ->orderBy('created_at', 'desc')
                    ->take(3)
                    ->get();
            }
        @endphp
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18

        @if ($carousels)
            @foreach ($carousels as $carousel)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $carousel->photo) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $carousel->title }}</h5>
                        <p>{!! $carousel->body !!}</p>
                    </div>
                </div>
            @endforeach
        @endif

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


    <!-- Testimonial Shoaar section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        @php
                            $currentLocale = App::getLocale();
                            $language = \App\Models\Language::where('code', $currentLocale)->first();
                            $messages = [];

                            if ($language) {
                                $messages = \App\Models\Messages::where('language_id', $language->id)
                                    ->where('active', true)
                                    ->orderBy('created_at', 'desc')
                                    ->take(1)
                                    ->get();
                            }
                        @endphp
                        @if ($messages)
                            @foreach ($messages as $message)
                                <div class="fs-4 mb-4 fst-italic">{!! $message->body !!}</div>
                            @endforeach
                            <div class="d-flex align-items-center justify-content-center">
                                {{-- <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                alt="..." /> --}}
                                <div class="fw-bold">
                                    {!! $message->title !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- Annoucements,Reports,Messages-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">{{ __('homepage.Annoucements') }}</h2>
<<<<<<< HEAD
                        <a style="text-decoration: none"  href="{{ route('annoucements.index') }}">View
                            All 
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        {{-- <p >{{ __('homepage.More') }}</p> --}}
=======
                        <a  class="stretched-link text-decoration-none" href="{{ route('annoucements.index') }}">{{ __('homepage.View All ') }}
                            <i class="bi bi-arrow-right"></i>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                        </a>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @if ($announcements)
                    @foreach ($announcements as $announcement)
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('storage/' . $announcement->thumbnail) }}"
                                    alt="..." />
                                <div class="card-body p-4">

                                    <a class="text-decoration-none link-dark stretched-link"
                                        href="{{ route('view', $announcement->id) }}">
                                        <h5 class="card-title mb-3">{{ $announcement->title }}</h5>
                                    </a>
                                    {{-- <p class="card-text mb-0">{!! $translation->body !!} </p> --}}
                                    <p class="card-text mb-0">{{ $announcement->shortBody() }} </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-primary ">{{ __('homepage.Read More') }}</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

        </div>
    @else
        <h3 style="color:red; text-align:center">Sorry nothing found</h3>
        @endif
    </section>

    <!-- Articles preview section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">{{ __('homepage.Articles') }}</h2>
<<<<<<< HEAD
                
                    <a style="text-decoration: none" href="{{ route('articles.index') }}">
                    {{ __('homepage.View All') }}
                    <i class="bi bi-arrow-right">
                    </i>
                    </a>
=======
                <a  class="stretched-link text-decoration-none text-center" href="{{ route('articles.index') }}">{{ __('homepage.View All ') }}
                    <i class="bi bi-arrow-right"></i>
                </a>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
            </div>
            <div class="row">
                @if ($articles)
                    {{-- @foreach ($articles as $articleTranslations) --}}
                    @foreach ($articles as $article)
                        <div class="col-md-4">
                            <h2>{{ $article->title }}</h2>
                            <p>{{ $article->shortbody() }}</p>
                            <p><a class="btn btn-primary" href="{{ route('articles.show', $article->id) }}"
                                    role="button">{{ __('homepage.View details') }} »</a>
                            </p>
                        </div>
                        {{-- @endforeach --}}
                    @endforeach
            </div>
        @else
            <h3 style="color:red; text-align:center">Sorry nothing found</h3>
            @endif
            
        </div>
       
    </div>
    <!-- Team members section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">{{ __('homepage.Our team') }}</h2>
<<<<<<< HEAD
                <a style="text-decoration: none" href="{{ route('teamMembers.index') }}">{{ __('homepage.View All') }}
                    <i class="bi bi-arrow-right">
                    </i>
                </a>
=======
                <a  class="stretched-link text-decoration-none" href="{{ route('teamMembers.index') }}">{{ __('homepage.View All ') }}
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                @if ($teamMembers)
                    @foreach ($teamMembers as $teamMember)
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <a href="{{ route('teammember.show', $teamMember->id) }}" style="color:inherit;text-decoration:none">
                                <img class="img-fluid  mb-4 px-4" src="{{ asset('storage/' . $teamMember->photo) }}"
                                    alt="..." id="teamphoto" />
                                <h5 class="fw-bolder">{{ $teamMember->name }}</h5>
                            </div>
                        </a>
                        </div>
                    @endforeach
                @else
                    <h3 style="color:red; text-align:center">Sorry nothing found</h3>
                @endif
                
            </div>
         
        </div>
        
    </section>



    <!-- Why Us Section-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                @if ($whyUs)
                    @foreach ($whyUs as $why)
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                                src="{{ asset('storage/' . $why->thumbnail) }}" alt="..." />
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">{{ $why->title }}</h2>

                            <p class="lead fw-normal text-muted mb-0">{!! $why->shortBody() !!}</p>
<<<<<<< HEAD
                            <a style="text-decoration: none" href="{{ route('whyus.index') }}">{{ __('homepage.Read More') }}
=======
                            <a class="text-decoration-none" href="{{ route('whyus.index',$why->id) }}">
                                {{ __('homepage.Read More') }}
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                                <i class="bi bi-arrow-right"></i>
                            </a>


                        </div>
                    @endforeach
                @else
                    <h1 style="color:red">Nothing found</h1>
                @endif
            </div>
        </div>
    </section>
    <!-- Our Story-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                @if ($ourStory)
                    @foreach ($ourStory as $our)
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0"
                                src="{{ asset('storage/' . $our->thumbnail) }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">{{ $our->title }}</h2>
                            <p class="lead fw-normal text-muted mb-0">{!! $our->shortBody() !!}</p>
<<<<<<< HEAD
                            <a style="text-decoration:none" href="{{ route('ourstory.index') }}">{{ __('homepage.Read More') }}
=======
                            <a class="text-decoration-none" href="{{ route('ourstory.index',$our->id) }}">
                                {{ __('homepage.Read More') }}
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h1 style="color: red">Nothing found</h1>
                @endif
            </div>
        </div>
    </section>
    <!-- Vision Section-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                @if ($vision)
                    @foreach ($vision as $v)
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                                src="{{ asset('storage/' . $v->thumbnail) }}" alt="..." />
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Our Mission</h2>
                            <p class="lead fw-normal text-muted mb-0">{!! $v->shortbody() !!}</p>
<<<<<<< HEAD
                            <a style="text-decoration:none" href="{{ route('ourvision.index') }}">{{ __('homepage.Read More') }}
=======
                            <a class="text-decoration-none" href="{{ route('ourvision.index',$v->id) }}">
                                {{ __('homepage.Read More') }}
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @endforeach
                @else
                    <h1 style="color: red">Nothing Found</h1>
                @endif
            </div>
        </div>
    </section>



    <!-- Gallery -->
    <section class="py-5">
        <!-- Gallery section-->
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">

                <div class="text-center">
                    <h2 class="fw-bolder">{{ __('homepage.Gallery') }}</h2>
                    <a style="text-decoration: none" href="{{ route('photos.index') }}">{{ __('homepage.View All') }}
                        <i class="bi bi-arrow-right">
                        </i></a>
                    <div class="row">
                        <div class="col-12 m-auto">
                            <div class="owl-carousel owl-theme">
                                
                                @if($paginatedPhotos->isNotEmpty())
                @foreach ($paginatedPhotos as $photo)
                    @if($photo->image_path)
                        @foreach ($photo->image_path as $image)
                                        <div class="item mb-4">
                                            <div class="item">
                                                <div class="card border-0 shadow">
<<<<<<< HEAD
                                                  
                                                    {{-- <x-embed url="{{ $video->url }}" aspect-ratio="4:3"></x-embed> --}}
                                                    <a href="{{ asset('storage/' . $image) }}" data-lightbox="photos">
                                                    <img src="{{ asset('storage/' . $image) }}" alt="" class="card-img-top">

                                                    </a>

=======
                                                 
                                                    <x-embed url="{{ $video->url }}" aspect-ratio="4:3"></x-embed>
                                                    
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                                                </div>
                                            </div>

                                        </div>
<<<<<<< HEAD
                                        @endforeach
                                        @endif
=======

                                   
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                                    @endforeach
                                @else
                                    <h1 style="color: red">Nothing to show</h1>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <!--BookClubs and Membership Form-->
    <section class="py-5 bg-light">
        <div class="container px-5">

            <div class="row gx-5">

                <div class="col-xl-8">
                    <h2 class="fw-bolder fs-5 mb-4">{{ __('homepage.Book Clubs') }}</h2>
                    <!-- Book club item-->
                    @if ($bookclubs)
                        @foreach ($bookclubs as $bookclub)
                            <div class="mb-4">
                                <div class="small text-muted">{{ $bookclub->getFormattedDate() }}</div>
                                <a class="link-dark" href="{{ route('bookclub.show',$bookclub->id) }}">
                                    <h3>{{ $bookclub->title }}</h3>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <h3 style="color:red; text-align:center">Sorry nothing found</h3>
                    @endif
                    <div class="text-end mb-5 mb-xl-0">
                        <a class="text-decoration-none" href="{{ route('bookclub.index') }}">
<<<<<<< HEAD
                            {{ __('homepage.View All') }}
=======
                            {{ __('homepage.View All ') }}
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex h-100 align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">{{ __('homepage.Want to join us?') }}</div>
                                    <p class="text-muted mb-4">
                                        Please click and submit the online form
                                        <br />

                                    </p>


                                    <a class="fs-5 px-2 " href="{{ route('onlineRegister.create') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="50" height="50" fill="currentColor"
                                            class="bi bi-person-fill-check" viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            <path
                                                d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                                        </svg></a>
                                    <div class="h6 fw-bolder">{{ __('homepage.Online Form') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Social Media Feeds and Quick links -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <h2 class="section-header">{{ __('homepage.Follow Us on our Social Media') }}</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0', nonce = 'fiCpGxQP';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-page" data-href="https://www.facebook.com/MilliMehwar"
                                data-tabs="timeline" data-width="380" data-height="500" data-small-header="false"
                                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/MilliMehwar" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/MilliMehwar">‎ملي محور ګوند‎</a>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="twitter-timeline twitter-timeline-rendered" style="display: flex; width: 380px; max-width: 100%; margin-top: 0px; margin-bottom: 0px;"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 363px; height: 423px; display: block; flex-grow: 1;" title="Twitter Timeline" src=""></iframe></div> -->
                            <a class="twitter-timeline" data-width="380" data-height="500" data-theme="dark"
                                href="https://twitter.com/XDevelopers?ref_src=twsrc%5Etfw">Tweets by XDevelopers</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <h2 class="section-header">{{ __('homepage.Quick Links') }}</h2>
                    @if ($quickLinks)
                        @foreach ($quickLinks as $links)
                            <div class="list-group list-group-striped">
                                <a href="{{ $links->url }}"
                                    class="list-group-item list-group-item-action"><strong>{{ $links->title }}</strong></a>

                            </div>
                        @endforeach
                    @else
                        <h1 style="color: red">Nothing Found</h1>
                    @endif

                </div>

            </div>
        </div>
        <br>
        <br>
    </section> --}}



</x-app-layout>
