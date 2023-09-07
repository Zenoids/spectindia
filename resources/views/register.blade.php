@extends('layouts.app') 
@section('content')

@php

// $states = [                  
// "Andhra Pradesh",
// " Arunachal Pradesh",
// "Assam",
// " Bihar",
// " Chhattisgarh",
// "Goa",
// "Gujarat",
// "Haryana",
// "Himachal Pradesh",
// "Jharkhand",
// "Karnataka",
// "Kerala",
// "Madhya Pradesh",
// "Maharashtra",
// "Manipur",
// "Mumbai",
// "Mizoram",
// "Nagaland",
// "Odisha",
// "Punjab",
// "Rajasthan",
// "Sikkim",
// "Tamil Nadu",
// "Telangana",
// "Tripura",
// "Uttar Pradesh",
// "Uttarakhand",
// "West Benga",
// "Andaman and Nicobar Islands",
// "Chandigarh",
// "Dadra and Nagar Haveli and Daman and Diu",
// "Delhi",
// "Jammu and Kashmir",
// "Ladakh",
// "Lakshadweep",
// "Puducherry",
// ]; 
//INSERT INTO seats (name, state_id) VALUES ('Araku (ST)', 1),('Chittoor (SC)', 1);

// $parliamentSeats = [
// "Araku (ST)",
// "Srikakulam",
// "Vizianagaram",
// "Visakhapatnam",
// "Anakapalli",
// "Kakinada",
// "Amalapuram (SC)",
// "Rajahmundry",
// "Narasapuram",
// "Eluru",
// "Machilipatnam",
// "Vijayawada",
// "Guntur",
// "Narasaraopet",
// "Bapatla (SC)",
// "Ongole",
// "Nandyal",
// "Kurnool",
// "Anantapur",
// "Hindupur",
// "Kadapa",
// "Nellore",
// "Tirupati (SC)",
// "Rajampet",
// "Chittoor (SC)",
// "Arunachal West",
// "Arunachal East",
// "Karimganj (SC)",
// "Silchar",
// "Autonomous District (ST)",
// "Dhubri",
// "Kokrajhar (ST)",
// "Barpeta",
// "Gauhati",
// "Mangaldoi",
// "Tezpur",
// "Nowgong",
// "Kaliabor",
// "Jorhat",
// "Dibrugarh",
// "Lakhimpur",
// "Valmiki Nagar",
// "Paschim Champaran",
// "Purvi Champara",
// "Sheohar",
// "Sitamarhi",
// "Madhubani",
// "Jhanjharpur",
// "Supaul",
// "Araria",
// "Kishanganj",
// "Katihar",
// "Purnia",
// "Madhepura",
// "Muzaffarpur",
// "Darbhanga",
// "Vaishali",
// "Gopalganj (SC)",
// "Siwan",
// "Maharajganj",
// "Saran",
// "Hajipur (SC)",
// "Ujiarpur",
// "Samastipur (SC)",
// "Begusarai",
// "Khagaria",
// "Bhagalpur",
// "Banka",
// "Munger",
// "Nalanda",
// "Patna Sahib",
// "Pataliputra",
// "Arrah",
// "Buxar",
// "Sasaram (SC)",
// "Karakat",
// "Jahanabad",
// "Aurangabad",
// "Gaya (SC)",
// "Nawada",
// "Jamui (SC)",
// ];

@endphp

<div class="container my-5">
    <div class="row">
        <div class="col">
            <div class="text-center bg-white rounded p-4 mt-5 myform shadow">
                <h4>Study on Social, Political, Economic, Cultural, and Technology Aspects (SPECT)</h4>
                <h3>Volunteer Registration Form</h3>
            </div>
            <!-- Display the error message only when there is an error -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> {{$errors->first()}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="bg-white rounded p-4 my-4 shadow myform">
                <form method="post" action=" {{ route('register.submit') }}" enctype="multipart/form-data">
                    {{-- {{ route('volunteer.registration') }} --}}
                    @csrf
                    <div class="form-group row">
                        <!-- Add form fields using Blade syntax -->
                        <!-- Example: -->
                        <div class="col-12 col-md-4 mt-3">
                            <label for="voter_id" class="form-label">Voter ID</label>
                            <input type="text" class="form-control" id="voter_id" name="voter_id" value="{{ old('voter_id') }}" required>
                        </div>
                        <!-- ... Add other form fields as needed -->
                        <div class="col-12 col-md-4 mt-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}" required>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="mobile_no" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') }}" required>
                        </div>
                        <!-- </div>
                        <div class="form-group row my-3"> -->
                        <div class="col-12 col-md-4 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="whatsapp_no" class="form-label">WhatsApp Number</label>
                            <input type="number" class="form-control" id="whatsapp_no" name="whatsapp_no" value="{{ old('whatsapp_no') }}" required>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="facebook_id" class="form-label">Facebook Id</label>
                            <input type="text" class="form-control" id="facebook_id" name="facebook_id" value="{{ old('facebook_id') }}" required>
                        </div>
                        <!-- </div>
                        <div class="form-group row  my-3"> -->
                        <div class="col-12 col-md-4 mt-3">
                            <label for="twitter_id" class="form-label">Twitter Id</label>
                            <input type="text" class="form-control" id="twitter_id" name="twitter_id" value="{{ old('twitter_id') }}" required>
                        </div>

                        <div class="col-12 col-md-8 mt-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                        </div>
                        <!-- </div>
                        <div class="form-group row my-3"> -->
                    
                        
                     
                       
                      
                        <div class="col-12 col-md-4 mt-3">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select col-12 col-md-4" aria-label="Default select example" id="state" name="state" required>
                                <option value="" selected>Select State</option>

                                @foreach($states as $state)
                                    <option value="{{ $state->id }}" @if(old('state') == $state->name) selected @endif>{{ $state->name }}</option>
                                @endforeach
                            </select>
                            
                           
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="parliament_seat" class="form-label">Parliament Seat</label>
                            <select class="form-select col-12 col-md-4" aria-label="Default select example" id="parliament_seat" name="parliament_seat" required>
                                {{-- <option value="" selected>Select Parliament seat</option>
                                @foreach ($seats as $seat)
                                    <option value="{{ $seat }}" @if (old('parliament_seat') == $seat) selected @endif>{{ $seat }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="col-12 col-md-4 mt-3">
                            <label for="assembly_constituency" class="form-label">Assembly Constituency</label>
                            <select class="form-select col-12 col-md-4" aria-label="Default select example" id="assembly_constituency" name="assembly_constituency" required>
                                {{-- <option value="" selected>Select Parliament seat</option>
                                @foreach ($seats as $seat)
                                    <option value="{{ $seat }}" @if (old('parliament_seat') == $seat) selected @endif>{{ $seat }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        
                        {{-- <div class="col-12 col-md-4 mt-3">
                            <label for="assembly_constituency" class="form-label">Assembly Constituency</label>
                            <input type="text" class="form-control" id="assembly_constituency" name="assembly_constituency" value="{{ old('assembly_constituency') }}" required>
                        </div> --}}
                      

                        <div class="col-12 col-md-4 mt-3">
                            <label for="ward_name_no" class="form-label">Ward Name/Number</label>
                            <input type="text" class="form-control" id="ward_name_no" name="ward_name_no" value="{{ old('ward_name_no') }}" required>
                        </div>


                    


                        <div class="col-12 col-md-8 mt-3">
                            <label for="file" class="form-label">Upload Voter ID card Image or PDF (max 2MB)</label>
                            <input type="file" class="form-control" id="file" name="file" accept=".jpg,.png,.jpeg,.webp,.pdf" value="{{ old('file') }}" required>
                        </div>

                        <!-- </div>

                        <div class="form-group row my-3"> -->
                        <div class="col-12 col-md-4 mt-3">
                            <label for="contribute_options" class="form-label">Contribute Options<small mt-3l class="text-muted d-block">Tick all that apply.</small mt-3l></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="contribute_options[]" value="Policy/Research support" @if(is_array(old('contribute_options')) && in_array('Policy/Research support', old('contribute_options'))) checked @endif>
                                <label class="form-check-label">Policy/Research support</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="contribute_options[]" value="Become a Digital Activist (Social Media)" @if(is_array(old('contribute_options')) && in_array('Become a Digital Activist (Social Media)', old('contribute_options'))) checked @endif>
                                <label class="form-check-label">Become a Digital Activist (Social Media)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="contribute_options[]" value="IT support (coding, web design etc.)" @if(is_array(old('contribute_options')) && in_array('IT support (coding, web design etc.)', old('contribute_options'))) checked @endif>
                                <label class="form-check-label">IT support (coding, web design etc.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="contribute_options[]" value="Content writing (mention preferred language below)" @if(is_array(old('contribute_options')) && in_array('Content writing (mention preferred language below)', old('contribute_options'))) checked @endif>
                                <label class="form-check-label">Content writing (mention preferred language below)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="contribute_options[]" value="Become a photo/video volunteer (Youtubers)" @if(is_array(old('contribute_options')) && in_array('Become a photo/video volunteer (Youtubers)', old('contribute_options'))) checked @endif>
                                <label class="form-check-label">Become a photo/video volunteer (Youtubers)</label>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 mt-3">
                            <label for="about_yourself" class="form-label">About Yourself</label>
                            <textarea type="text" class="form-control" rows="5" id="about_yourself" name="about_yourself" value="{{ old('about_yourself') }}" required>
                                {{ old('about_yourself') }}</textarea>
                        </div>
                    </div>
                    </div>
                    <!-- ... Add other form fields as before with appropriate Blade syntax -->

                    <div class="text-center my-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
