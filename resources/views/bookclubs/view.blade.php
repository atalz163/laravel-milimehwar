<x-app-layout>

    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">
                    <!-- Post content-->

<<<<<<< HEAD
                    <article>
=======
                    <bookclub>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                        <!-- Post header-->
                        <header class="mb-4">


                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{ $bookclub->title }}</h1>

<<<<<<< HEAD
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">
                                {{ $bookclub->getFormattedDate() }}
                            </div>
=======
                           
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18

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
                        <figure class="mb-4"><img class="img-fluid rounded"
<<<<<<< HEAD
                                src="{{ asset('storage/' . $bookclub->thumbnail) }}" alt="..." /></figure>
=======
                                src="{{ asset('storage/' . $bookclub->photo) }}" alt="..." /></figure>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{!! $bookclub->body !!}</p>

                        </section>
<<<<<<< HEAD
                    </article>

            
=======
                    </bookclub>

                    <!-- Comments section-->
                    <section>
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4">
                                    <textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                                </form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never
                                        be private enterprise. Because the space frontier is dangerous, and it's
                                        expensive, and it has unquantified risks.
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle"
                                                    src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                                    alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market
                                                evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle"
                                                    src="https://dummyimage.com/50x50/ced4da/6c757d.jpg"
                                                    alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I
                                        find it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
