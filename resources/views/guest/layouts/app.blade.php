<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!-- <title>Kosher Man</title> -->

        <!-- Dynamic Metadata -->
        <title>@yield('title') || Kosherman</title>
        <meta name="description" content="@yield('meta_description')">
        <meta name="keywords" content="@yield('meta_keywords')"> 
        <meta property="og:image" content="https://koshermanlegal.com/guestassets/images/icons/kosherman-favicon.webp" />
        <meta property="og:image:width" content="1200" />
	    <meta property="og:image:height" content="550" />

        @include('guest.layouts.links')

    </head>
    <body>
        <div class="page-wrapper">
            <div class="preloader"></div>

            @include('guest.layouts.header')
            @yield('content')
            @include('guest.layouts.footer')

        </div>
        <!--End pagewrapper-->
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>
        @include('guest.layouts.scripts')

    </body>
</html>


