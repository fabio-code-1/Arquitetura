@extends('layouts.app')

@section('content')



<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    @include('hero')
</section><!-- End Hero Section -->

<!-- ======= Get Started Section ======= -->
<section id="get-started" class="get-started section-bg">
    @include('started')
</section><!-- End Get Started Section -->

<!-- ======= Constructions Section ======= -->
<section id="constructions" class="constructions">
    @include('construction')
</section><!-- End Constructions Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    @include('services')
</section><!-- End Services Section -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
    @include('alt-services')
</section><!-- End Alt Services Section -->

<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
    @include('projects')
</section><!-- End Our Projects Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    @include('testimonials')
</section><!-- End Testimonials Section -->

@endsection