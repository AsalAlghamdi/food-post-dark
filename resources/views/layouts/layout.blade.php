<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Food POS | @yield('title')</title>
    <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/loader.js')}}"></script>

    <meta name="author" content="AsalAlghamdi" />
    <link rel="shortcut icon" href="{{asset('assets/icons/sidebar/logo.svg')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/icons/sidebar/logo.svg')}}">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#252836">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#252836">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#252836">

    <!-- Standard SEO -->
    <meta name="description" content="Food POS website, order your favorite dishes from many popular restaurants.">
    <meta name="keywords" content="Food POS,food,pos,figma,ui,design,restaurant">
    <!-- Open Graph Protocol -->
    <meta property="og:image" content="{{asset('img/food-pos-seo.jpg')}}">
    <meta property="og:title" content="Food POS | @yield('title')">
    <meta property="og:description" content="Food POS website, order your favorite dishes from many popular restaurants.">
    <!-- Twitter Card Info -->
    <meta name="twitter:image" content="{{asset('img/food-pos-seo.jpg')}}">
    <meta name="twitter:title" content="Food POS | @yield('title')">
    <meta name="twitter:description" content="Food POS website, order your favorite dishes from many popular restaurants.">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @include('partials.styles')
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL ASSETS CUSTOM STYLES -->
    @yield('style')
    <!-- END PAGE LEVEL ASSETS CUSTOM STYLES -->

</head>

<body class="dashboard-analytics">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('partials.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('partials.scripts')
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL ASSETS CUSTOM SCRIPTS -->
    @yield('script')
    <!-- BEGIN PAGE LEVEL ASSETS CUSTOM SCRIPTS -->

</body>

</html>