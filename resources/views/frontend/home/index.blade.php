@extends('frontend.layouts.master')


@section('content')
    <!--=============================
            BANNER START
        ==============================-->
      @include('frontend.home.components.sider')
    <!--=============================
            BANNER END
        ==============================-->


    <!--=============================
            WHY CHOOSE START
        ==============================-->
       @include('frontend.home.components.why_choose_us')
    <!--=============================
            WHY CHOOSE END
        ==============================-->


    <!--=============================
            OFFER ITEM START
        ==============================-->
    @include('frontend.home.components.offer_item')

    <!-- CART POPUT START -->
    @include('frontend.home.components.cart_popup')
    <!-- CART POPUT END -->
    <!--=============================
            OFFER ITEM END
        ==============================-->


    <!--=============================
            MENU ITEM START
        ==============================-->
    @include('frontend.home.components.menu_item')
    <!--=============================
            MENU ITEM END
        ==============================-->


    <!--=============================
            ADD SLIDER START
        ==============================-->
   @include('frontend.home.components.add_slider')
    <!--=============================
            ADD SLIDER END
        ==============================-->


    <!--=============================
            TEAM START
        ==============================-->
          @include('frontend.home.components.team')
    <!--=============================
            TEAM END
        ==============================-->


    <!--=============================
            DOWNLOAD APP START
        ==============================-->
      @include('frontend.home.components.app_download')
    <!--=============================
            DOWNLOAD APP END
        ==============================-->


    <!--=============================
           TESTIMONIAL  START
        ==============================-->
    @include('frontend.home.components.testemonial')
    <!--=============================
            TESTIMONIAL END
        ==============================-->


    <!--=============================
            COUNTER START
        ==============================-->
      @include('frontend.home.components.counter')
    <!--=============================
            COUNTER END
        ==============================-->


    <!--=============================
            BLOG 2 START
        ==============================-->
   @include('frontend.home.components.blog2_start')
    <!--=============================
            BLOG 2 END
        ==============================-->
@endsection
