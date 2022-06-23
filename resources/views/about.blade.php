@extends('indexheader')
@section('indexBody')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image:url(/img/cal5.png);">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/cal6.jpeg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-warning">About Us</h6>
                        <p>This Calorie Calculator is based on several equations, and the results of the calculator are based on an estimated average. The Harris-Benedict Equation was one of the earliest equations used to calculate basal metabolic rate (BMR), which is the amount of energy expended per day at rest. It was revised in 1984 to be more accurate and was used up until 1990, when the Mifflin-St Jeor Equation was introduced. The Mifflin-St Jeor Equation also calculates BMR, and has been shown to be more accurate than the revised Harris-Benedict Equation. The Katch-McArdle Formula is slightly different in that it calculates resting daily energy expenditure (RDEE), which takes lean body mass into account, something that neither the Mifflin-St Jeor nor the Harris-Benedict Equation do. Of these equations, the Mifflin-St Jeor Equation is considered the most accurate equation for calculating BMR with the exception that the Katch-McArdle Formula can be more accurate for people who are leaner and know their body fat percentage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   @endsection