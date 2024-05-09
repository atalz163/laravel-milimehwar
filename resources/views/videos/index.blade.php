<x-app-layout>
<<<<<<< HEAD
    <!-- Page Content-->
    <section class="py-5">
       <div class="container px-5 my-5">
           <div class="text-center mb-5">
               <h1 class="fw-bolder">{{ __('homepage.Videos') }}</h1>
           </div>
           <div class="row gx-5">
               @foreach ($videos as $video )
               <div class="col-lg-6">
                   <div class="position-relative mb-5">
                       <x-embed url="{{ $video->url }}" aspect-ratio="4:3"></x-embed>
                   </div>
               </div>
               @endforeach
               {{ $videos->links() }}
           </div>
       </div>
   </section>
=======
     <!-- Page Content-->
     <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">{{ __('homepage.Videos') }}</h1>
            </div>
            <div class="row gx-5">
                @foreach ($videos as $video )
                <div class="col-lg-6">
                    <div class="position-relative mb-5">
                        <x-embed url="{{ $video->url }}" aspect-ratio="4:3"></x-embed>
                    </div>
                </div>
                @endforeach
                {{ $videos->links() }}
            </div>
        </div>
    </section>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
</x-app-layout>