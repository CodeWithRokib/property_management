@extends('frontend.layouts.app')
@section('title')
    complain
@endsection

@section('content')
    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Complain Us</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Payment
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <x-alert />

            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="address mt-2">
                            <i class="icon-room"></i>
                            <h4 class="mb-2">Location:</h4>
                            <p>
                                43 Raymouth Rd. Baltemoer,<br />
                                London 3910
                            </p>
                        </div>

                        <div class="open-hours mt-4">
                            <i class="icon-clock-o"></i>
                            <h4 class="mb-2">Open Hours:</h4>
                            <p>
                                Sunday-Friday:<br />
                                11:00 AM - 2300 PM
                            </p>
                        </div>

                        <div class="email mt-4">
                            <i class="icon-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p>info@Untree.co</p>
                        </div>

                        <div class="phone mt-4">
                            <i class="icon-phone"></i>
                            <h4 class="mb-2">Call:</h4>
                            <p>+1 1234 55488 55</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <form action="{{ route('complains.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-6 mb-3">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name"  />
                            </div>

                            <!-- Number Field -->
                            <div class="col-6 mb-3">
                                <input type="text" name="number" id="number" class="form-control" placeholder="Number"  />
                            </div>

                            <!-- Flat Field -->
                            <div class="col-6 mb-3">
                                <input type="text" name="flat" id="flat" class="form-control" placeholder="Flat"  />
                            </div>

                            <!-- Apartment Field -->
                            <div class="col-6 mb-3">
                                <input type="text" name="apartment" id="apartment" class="form-control" placeholder="Apartment"  />
                            </div>

                            <!-- Description Field -->
                            <div class="col-12 mb-3">
                                <textarea name="descriptions" id="descriptions" cols="30" rows="7" class="form-control" placeholder="Description" ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <input type="submit" value="Submit Payment" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.untree_co-section -->
@endsection