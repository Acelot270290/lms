@extends('frontend.master')
@section('home')

<!--================================
         START HERO AREA
=================================-->
 @include('frontend.home.hero-area')
<!--================================
        END HERO AREA
=================================-->

<!--======================================
        START FEATURE AREA
 ======================================-->
 @include('frontend.home.feature-area')
<!--======================================
       END FEATURE AREA
======================================-->

<!--======================================
        START CATEGORY AREA
======================================-->
@include('frontend.home.category-area')
<!--======================================
        END CATEGORY AREA
======================================-->

<!--======================================
        START COURSE AREA
======================================-->
@include('frontend.home.courses-area')
<!--======================================
        END COURSE AREA
======================================-->

<!-- ================================
       START FUNFACT AREA
================================= -->
@include('frontend.home.funfact-area')
<!-- ================================
       START FUNFACT AREA
================================= -->

<!--======================================
        START CTA AREA
======================================-->
@include('frontend.home.cta-area')
<!--======================================
        END CTA AREA
======================================-->


<div class="section-block"></div>


<div class="section-block"></div>

<div class="section-block"></div>


<!--======================================
        START SUBSCRIBER AREA
======================================-->
@include('frontend.home.subscriber-area')
<!--======================================
        END SUBSCRIBER AREA
======================================-->

@endsection