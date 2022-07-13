<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>@yield("title")</title>
</head>
<body>

    <noscript class="alert alert-danger d-block text-center">You seems to disable javascript in your browser, you cannot use this website well without javascript</noscript>
@include("layout.navbar")
@yield("content")

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    $(window).scroll(function() {
        $(".slide-up-animation").each(function() {
            let pos = $(this).offset().top;

            let winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide-up");
            }
        });
    });
</script>
<script src="{{asset("js/adminDashboard.js")}}"></script>
</body>
</html>
