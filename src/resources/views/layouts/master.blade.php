<!DOCTYPE html>
<html lang="en">

    <head><!-- head-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta name="author" content="@yield('author', Config::get('general.author') )" />
        <meta name="description" content="@yield('description', Config::get('general.description') )">
        <meta name="keywords" content="@yield('keywords', Config::get('general.keywords') )">

        <meta name="_token" content="{!! csrf_token() !!}">

        <title>@yield('title','My shop')</title>

        <!-- ./css styles-->
        <link rel="shortcut icon" href="{{ asset('ico/favicon.png') }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <link  rel="stylesheet" href="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}"/>
        <link  rel="stylesheet" href="{{ URL::asset('//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}">

        @yield('styles')
        <!-- ./css styles-->

        <!-- include the BotDetect layout stylesheet -->
        @if (class_exists('CaptchaUrls'))
          <link  rel="stylesheet" href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css">
        @endif
    </head><!-- ./head-->

    <body> <!-- body-->

        <div class="container"><!-- container-->

            <!-- header -->
            @include('photo-album::partials.header')
            <!-- ./header -->

            <!-- menu -->
            @include('photo-album::partials.menu', array('menu_data' => []))
            <!-- ./menu -->

            <!-- content -->
            @yield('content')
            <!-- ./content -->

            <!-- footer -->
            @include('photo-album::partials.footer')
            <!-- ./footer -->

            <!-- scripts -->
            <!-- NB: JQUERY.MIN.JS MUST ALWAYS BE THE FIRST OTHER WISE IT WILL CONFLICT WITH BOOTSTRAP.MIN.JS -->
            <script src="{{ URL::asset('//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
            <script src="{{ URL::asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>
            @yield('scripts')
            <!-- ./scripts -->

        </div><!-- ./container-->

    </body><!--/ body-->

</html><!--/ html-->
