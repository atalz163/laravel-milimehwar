<x-app-layout>

    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">
                    <!-- Post content-->

                    <article>
                        <!-- Post header-->
                        <header class="mb-4">


                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>

                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">
                                {{ $article->getFormattedDate() }}
                            </div>

                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_x"></a>
                                <a class="a2a_button_email"></a>
                                <a class="a2a_button_whatsapp"></a>
                            </div>





                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                            @if(!empty($article->thumbnail))
                            <img class="img-fluid rounded"
                                src="{{ asset('storage/' . $article->thumbnail) }}" alt="..." />
                            @endif
                            </figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{!! $article->body !!}</p>

                        </section>
                    </article>

               
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
