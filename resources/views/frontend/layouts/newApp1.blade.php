<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(config('favicon_image') != "")
             <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/logos/Logo Kecil.png')}}"/>
        @endif
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', '')">
        <meta name="keywords" content="@yield('meta_keywords', '')">

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->

        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/video.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/progess.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        {{--<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">--}}
        <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/colors/switch.css')}}">
        <link href="{{asset('assets/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-2">
        <link href="{{asset('assets/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-3">
        <link href="{{asset('assets/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-4">
        <link href="{{asset('assets/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-5">
        <link href="{{asset('assets/css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-6">
        <link href="{{asset('assets/css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-7">
        <link href="{{asset('assets/css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-8">
        <link href="{{asset('assets/css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-9">

        <link href="{{asset('/vendor/unisharp/laravel-ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css') }}" rel="stylesheet">
        <script src="{{asset('/vendor/unisharp/laravel-ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        @yield('css')
        @stack('after-styles')

        @if(config('onesignal_status') == 1)
            {!! config('onesignal_data') !!}
        @endif

        @if(config('google_analytics_id') != "")
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{config('google_analytics_id')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{config('google_analytics_id')}}');
        </script>
            @endif
        @if(!empty(config('custom_css')))
            <style>
                {!! config('custom_css')  !!}
            </style>
        @endif

    </head>
    <body class="{{config('layout_type')}}">

    <div id="app">
    {{-- <div id="preloader"></div> --}}
    <!-- Start of Header section
        ============================================= -->
        @include('frontend.layouts.partials.navbar')
    <!-- Start of Header section
        ============================================= -->
            @yield('content')
        @include('cookieConsent::index')


        @include('frontend.layouts.partials.footer')

    </div><!-- #app -->

    <!-- Scripts -->

    @stack('before-scripts')

    <!-- For Js Library -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/gmap3.min.js')}}"></script>

    <script src="{{asset('assets/js/switch.js')}}"></script>

    <script>
        @if(request()->has('user')  && (request('user') == 'admin'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('admin@lms.com')
        $('#loginForm').find('#password').val('secret')
        $('#loginForm').find('button').trigger('click');
        @elseif(request()->has('user')  && (request('user') == 'student'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('student@lms.com')
        $('#loginForm').find('#password').val('secret')
        $('#loginForm').find('button').trigger('click');

        @elseif(request()->has('user')  && (request('user') == 'teacher'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('teacher@lms.com')
        $('#loginForm').find('#password').val('secret')
        $('#loginForm').find('button').trigger('click');
        @endif
    </script>


    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
        @if((session()->has('show_login')) && (session('show_login') == true))
        $('#myModal').modal('show');
                @endif
        var font_color = "{{config('font_color')}}"
        setActiveStyleSheet(font_color);
    </script>


    <script>
        $('#search-course').on('keyup', function(){
                searchCourse();
            });
            function searchCourse() {
                var keyword = $('#search-course').val();
                $.post('{{ route("course.search") }}',{
                    _token: $('meta[name="csrf-token"]').attr('content'),keyword:keyword
                },function(data) {
                    cardCourses(data);          
                        console.log(data);
                });
            }

        //ajax
        function cardCourses(res) {
            let htmlView = '';
            if (res.courses.length <= 0) {
                htmlView+= `<p>No data course</p>`
            }
            for( let i = 0; i<res.courses.length; i++){
                htmlView+= 
                    `
                    <!-- slider -->
                    @foreach ($course as $c)
                    <div class="produk-det inline-block">
                    <div class="m-bawah-10">
                        <div class="produk putih-abu left">
                            <div class="gambar-produk">
                                <div class="keterangan-produk">
                                    <div class="value-keterangan-produk courses">COURSES</div>
                                    @if($c->free == 1)
                                    <div class="value-keterangan-produk free">FREE</div>
                                    @endif
                                </div>
                                <img class="foto-produk m-bawah-10" src="assets/img/foto-produk-2.png" alt="">
                                <a href="course/`+res.courses[i].slug+`">
                                    <div class="detail">
                                        Course Detail
                                        <img src="assets/img/next2.png" alt="">
                                    </div>
                                </a>
                            </div>
    
                            <!-- =================  JUDUL-PRODUK  =============== -->
                            <div class="judul-produk">
                                <div class="font-18 width-232 m-kiri-10 m-bawah-20 height-60">`+res.courses[i].title+`</div>
                                    <div class="font-9 m-kiri-10"> instructur : </div>
                                    <div class="font-12 width-232 m-kiri-10">{{ $c->teachers[0]->first_name }} {{ $c->teachers[0]->last_name }}</div>                                    
                                    <!-- =================  HARGA-PRODUK  =============== -->
                                    <div class="container-harga-home auto">
                                        {{-- <div class="diskon inline-block">{{$appCurrency['symbol']}} {{ $c->price }}</div> --}}
                                        {{-- <div class="harga inline-block">{{$appCurrency['symbol']}} {{ $c->strike }}</div> --}}
                                         <div class="diskon inline-block">@rupiah($c->price)</div>
                                            <div class="harga inline-block">@rupiah($c->strike)</div>
                                            <br>
                                            <div class="course-rate ul-li">
                                                <ul>
                                                    @for($i=1; $i<=(int)$c->rating; $i++)
                                                        <li><i class="fas fa-star"></i></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                    <!-- slider -->
                    `
            }

            document.getElementById('course-search').classList.add('d-none');
            $('.s-course').html(htmlView);
            $('.s-course').owlCarousel({
                    margin: 0,
                    responsiveClass: true,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    navText: ["<i class='fas fa-chevron-left fa-2x' style='color: white;'></i>", "<i class='fas fa-chevron-right fa-2x' style='color: white;'></i>"],
                    smartSpeed: 1000,
                    responsive: {
                        0: {
                            items: 4,
                        },
                        400: {
                            items: 4,
                        },
                        600: {
                            items: 4,
                        }, 
                        700: {
                            items: 4,
                        },
                        800: {
                            items: 4,
                        },
                        1000: {
                            items: 4,
                            
                        }
                    },
                });
            
        }
    </script>

    @yield('js')

    @stack('after-scripts')

    @include('includes.partials.ga')

    @if(!empty(config('custom_js')))
        <script>
            {!! config('custom_js') !!}
        </script>
    @endif

    </body>
    </html>
