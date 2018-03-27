<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
-
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">

    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body>

@include('shared.site.header')
<!--NAVBAR SECTION END-->

@yield('content')
<!--CONTENT SECTION END-->

@include('shared.site.footer')
<!-- FOOTER SECTION END-->

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/scrollreveal.min.js') }}"></script>

<script>
    $(function () {

        // Submit logout form
        $('.sign-out').click(function () {
            $('#logout-form').submit()
        });

        // CSRF protection for AJAX calls
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });


</script>
</body>

</html>
