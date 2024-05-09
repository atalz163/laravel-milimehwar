<x-app-layout>
    <!-- Page Content-->
    <section class="py-5">
        <div class="photo-gallery">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">{{ __('homepage.Gallery') }}</h2>
                    
                </div>
                <div class="row photos">
                    @if($paginatedPhotos->isNotEmpty())
                @foreach ($paginatedPhotos as $photo)
                    @if($photo->image_path)
                        @foreach ($photo->image_path as $image)
                            <div class="col-sm-6 col-md-4 col-lg-3 item">
                                <a href="{{ asset('storage/' . $image) }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('storage/' . $image) }}">
                                </a>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            @else
                <h1 style="color: red">Nothing to show</h1>
            @endif
            </div>
                {{ $paginatedPhotos->links() }}
            </div>
        </div>
   </section>
</x-app-layout>