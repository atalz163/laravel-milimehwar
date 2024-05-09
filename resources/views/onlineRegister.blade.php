<x-app-layout>
    <!-- Page content-->
     <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">{{ __('onlineForm.Submit your Registeration Form') }}</h1>
                    <p class="lead fw-normal text-muted mb-0">{{ __('onlineForm.We would love to have you!') }}</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                      
                        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
                        <form  method="POST" action="{{ route('onlineRegister.store') }}" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            @csrf
                           
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="full_name" type="text" required />
                                <label for="name">{{ __('onlineForm.Full Name') }}</label>
                                
                            </div>
                           <!-- Father's Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="father_name" name="father_name" type="text" required placeholder="Enter your father's name..." data-sb-validations="required" />
                            <label for="father_name">{{ __('onlineForm.Father\'s Name') }}</label>
                        </div>

                    <!-- Grandfather's Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="grand_father_name" name="grand_father_name" type="text" required placeholder="Enter your grandfather's name..." data-sb-validations="required" />
                        <label for="grand_father_name">{{ __('onlineForm.Grandfather\'s Name') }}</label>
                    </div>

                    <!-- Blood Group input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="blood_group" name="blood_group" type="text" placeholder="Enter your blood group..." />
                        <label for="blood_group">{{ __('onlineForm.Blood Group') }}</label>
                    </div>

                    <!-- Gender input -->
                    <label class="form-check-label">{{ __('onlineForm.Gender') }} </label>
                    <br/>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                        <label class="form-check-label" for="male">{{ __('onlineForm.Male') }}</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                        <label class="form-check-label" for="female">{{ __('onlineForm.Female') }}</label>
                    </div>

                    <!-- Marital Status input -->
                    <br/>
                    <label class="form-check-label">{{ __('onlineForm.Marital Status') }} </label>
                    <br/>
                    <div class="form-check form-check-inline mb-3">
                       
                        <input class="form-check-input" type="radio" name="marital_status" id="single" value="single" required>
                        <label class="form-check-label" for="single">{{ __('onlineForm.Single') }}</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="marital_status" id="married" value="married" required>
                        <label class="form-check-label" for="married">{{ __('onlineForm.Married') }}</label>
                    </div>

                       <!-- Email input-->
                       <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" required placeholder="Enter your email address..." data-sb-validations="required,email" />
                        <label for="email">{{ __('onlineForm.Email') }}</label>
                    </div>

                    <!-- Contact Number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="contact_number" name="mobile" type="text" required placeholder="Enter your contact number..." data-sb-validations="required" />
                        <label for="contact_number">{{ __('onlineForm.Contact Number') }}</label>
                    </div>
                    <!-- Friend's Number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="friend_number" name="friend_number" type="text" required placeholder="Enter your friend's number..." data-sb-validations="required" />
                        <label for="friend_number">{{ __('onlineForm.Friend\'s Number') }}</label>
                    </div>

                     <!-- Education Level input-->
                     <div class="form-floating mb-3">
                        <input class="form-control" id="education_level" name="education_level" type="text" required placeholder="Enter your education level..." data-sb-validations="required" />
                        <label for="education_level">{{ __('onlineForm.Education Level') }}</label>
                    </div>
                    <!-- Current Job input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="current_job" name="current_job" type="text" required placeholder="Enter your current job..." data-sb-validations="required" />
                        <label for="current_job">{{ __('onlineForm.Current Job') }}</label>
                    </div>

                    <!-- Mother Tongue input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="mother_tounge" name="mother_tounge" type="text" required placeholder="Enter your mother tongue..." data-sb-validations="required" />
                        <label for="mother_tounge">{{ __('onlineForm.Mother Tongue') }}</label>
                    </div>

                    <!-- Languages input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="languages" name="languages" type="text" required placeholder="Enter languages spoken..." data-sb-validations="required" />
                        <label for="languages">{{ __('onlineForm.Languages') }}</label>
                    </div>


                    <!-- Talent input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="talent" name="talent" type="text" placeholder="Enter your talent..." />
                        <label for="talent">{{ __('onlineForm.Talent') }}</label>
                    </div>

                 
                    <label>{{ __('onlineForm.Permanent Address') }}</label>
                    <br/>
                    <!-- Province input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="province" name="province" type="text" required placeholder="Enter your province..." data-sb-validations="required" />
                        <label for="province">{{ __('onlineForm.Province') }}</label>
                    </div>

                    <!-- Village input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="village" name="village" type="text" required placeholder="Enter your village..." data-sb-validations="required" />
                        <label for="village">{{ __('onlineForm.Village') }}</label>
                    </div>

                    <!-- District input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="district" name="district" type="text" required placeholder="Enter your district..." data-sb-validations="required" />
                        <label for="district">{{ __('onlineForm.District') }}</label>
                    </div>


                   <!-- Current Address-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="current_address" name="current_address" type="text" required placeholder="Enter your district..." data-sb-validations="required" />
                        <label for="district">{{ __('onlineForm.Current Address') }}</label>
                    </div>


                 

                    <!-- Approved input -->
                    <div class="form-check form-switch mb-3">
                        <input type="hidden" class="form-check-input" type="checkbox" id="approved" name="approved" value="0" required>
                        
                    </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" 
                                id="submitButton" type="submit">{{ __('onlineForm.Submit') }}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- Replace the variables below. -->
    {{-- <script>
        function onSubmit(token) {
          document.getElementById("contactForm").submit();
        }
      </script> --}}
    </x-app-layout>