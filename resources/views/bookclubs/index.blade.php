<x-app-layout>
    <!-- Annoucements,Reports,Messages-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">{{ __('homepage.Book Clubs') }}</h2>

                        </a>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @if ($showAll)
                    @foreach ($showAll as $all)
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
<<<<<<< HEAD
                                <img class="card-img-top" src="{{ asset('storage/' . $all->photo) }}"
                                    alt="..." />
                                <div class="card-body p-4">

                                    <a class="text-decoration-none link-dark stretched-link"
                                        href="{{ route('bookclub.index', $all) }}">
=======
                                
                                <div class="card-body p-4">

                                    <a class="text-decoration-none link-dark stretched-link"
                                        href="{{ route('bookclub.show', $all) }}">
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                                        <h5 class="card-title
                                        mb-3">
                                            {{ $all->title }}</h5>
                                    </a>
                                    {{-- <p class="card-text mb-0">{!! $translation->body !!} </p> --}}
                                    <p class="card-text mb-0">{{ $all->shortBody() }} </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
<<<<<<< HEAD
                                            <button class="btn btn-primary ">{{ __('homepage.Read More') }}</button>
=======
                                            <button class="btn btn-primary ">Read More</button>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

            {{ $showAll->links() }}


            <!-- Pagination -->

        </div>
    @else
        <h3 style="color:red; text-align:center">Sorry nothing found</h3>
        @endif
    </section>

</x-app-layout>
