<!DOCTYPE html>
<html lang="en">

<head>
    <x-embed-styles />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar with Dropdown and Card</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('site.home') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" name="language" id="language"> --}}
                        <select name="language" id="language">
                            <option value="" disabled selected>Choose language</option>
                            @if (count($languages) > 0)
                                @foreach ($languages as $language)
                                    <option value="{{ $language->code }}">{{ $language->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        {{-- </div> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if ($translations)
        <div class="container mt-5">
            <h2 class="center">{{ __('general.Documentation') }}</h2>
            @foreach ($translations as $itemTranslations)
                @foreach ($itemTranslations as $translation)
                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="card-title">{{ $translation->language ? $translation->language->name: ''}}</h5> --}}
                            <h3 class="card-title">{{ $translation->title }}</h3>



                            <p class="card-text">{!! $translation->body !!} </p>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    @else
        <h3 style="color:red; text-align:center">Sorry nothing found</h3>

    @endif

    @foreach ($videos as $video)
        {{-- <div class="embed-responsive embed-responsive-16by9">
        <x-embed url="{{ $video->url }}" />
    </div> --}}

        <div class="card" style="width: 18rem;">
            {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
            <x-embed url="{{ $video->url }}" />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
    <!-- Bootstrap JS CDN (optional, for certain components that require JS) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>
