<!DOCTYPE html>
<html>
<head>
    <title>TruckJee - Online Truck Hiring Marketplace</title>
    <meta name="description" content="TruckJee is India's first online truck hiring marketplace designed and aimed at creating a transparent truck aggregation system">
    <meta name="author" content="Younus Farveaz">
    <meta name="keywords" content="transportation, logistics, transportation, logistics, cargo, business">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
{{--    <link rel="stylesheet" href="{{ url('css/all.css') }}"/><!-- bootstrap grid -->--}}
    <link rel="stylesheet" href="css/bootstrap.css"/><!-- bootstrap grid -->
    <link rel="stylesheet" href="masterslider/style/masterslider.css" /><!-- Master slider css -->
    <link rel="stylesheet" href="masterslider/skins/default/style.css" /><!-- Master slider default skin -->
    <link rel="stylesheet" href="css/animate.css"/><!-- animations -->
    <link rel="stylesheet" href="css/style_2.css"/><!-- template styles -->
    <link rel="stylesheet" href="css/color-default.css"/><!-- template main color -->
    <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
    <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>
    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-70024477-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body class="{{ app()->getLocale() }}">

@include('layouts.navbar')




<!-- </div> -->


@yield('content')

@include('layouts.footer')

@yield('scripts')

</body>
</html>