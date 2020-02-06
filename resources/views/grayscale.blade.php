@extends('layouts.layout')
<!-- Header -->
@section('header')
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Starlight</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">A new open and wild universe led by the Omega confederation.</h2>
            <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
        </div>
    </div>
</header>
@endsection

@section('sections')
<!-- About Section -->
@include('partials.about')

<!-- Projects Section -->
@include('partials.projects')

<!-- Signup Section -->
@include('partials.signup')

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Adresse</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">358 route de la fontenelle 71290 Cuisery</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">l.doudies@ld-clic.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Mobile</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">+33(0) 770 489 614</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="#" class="mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
</section>
@endsection
