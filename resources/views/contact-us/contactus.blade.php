<x-app-layout>
    <!-- Page content-->
     <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">{{ __('contactus.Your Feedback & Comments') }}</h1>
                    <p class="lead fw-normal text-muted mb-0">{{ __('contactus.We would love to hear from you') }}</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                      
                        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
                        <form  method="POST" action="{{ route('contact.store') }}" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            @csrf
    
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-check-input" type="checkbox" id="approved" name="approved" value="0" required>
                                <input class="form-control" id="name" name="full_name" type="text" required placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">{{ __('contactus.Full name') }}</label>
                                
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" required type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">{{ __('contactus.Email address') }}</label>
                               
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="mobile" required ="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">{{ __('contactus.Phone number') }}</label>
                                
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" required ="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">{{ __('contactus.Message') }}</label>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" 
                                data-sitekey="6Ldkr68pAAAAACis86t4qrYe1S48Ur0nYFrOHcyh"
                                data-callback='onSubmit'
                                data-action='submit'
                                id="submitButton" type="submit">{{ __('contactus.Submit') }}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- Replace the variables below. -->
    <script>
        function onSubmit(token) {
          document.getElementById("contactForm").submit();
        }
      </script>
    </x-app-layout>