<x-app-layout>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">{{ __('contactus.Your Feedback & Comments') }}</h1>
                <p class="lead fw-normal text-muted mb-0">{{ __('contactus.How can we help you?') }}</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1-->
                   
                    <div class="accordion mb-5" id="accordionExample">
                        @foreach ($contacts as $contact)
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" 
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" 
                                aria-expanded="true" aria-controls="collapseOne">{{ $contact->full_name }}</button></h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $contact->message }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>