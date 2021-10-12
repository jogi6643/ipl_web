@section('header')
@php
use App\Http\APIHandlers;
$headers = [
'Accept:application/json',
// 'Authorization: Bearer ' . APIHandlers::get_token()
];
$response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/menu/web/menu', $headers);
$response = json_decode($response, true);
if (!empty($response['status']) && $response['status'] == true) {
$menus = $response['Data']['menus'];
$trendingMenus = $response['Data']['trendingMenu'];
} else {
$trendingMenus = [];
$menus = [];
}
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Premier League</title>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/slick-slider/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/mcustom/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/flipcount/flipdown.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/magnific/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/init.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/astyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/istyle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/n_style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/device.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vn-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vn-device.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ni-device.css')}}">
   
    <script  src="{{asset('assets/js/jQuery/jquery-3.6.min.js')}}"></script>
    <script defer src="{{asset('assets/js/slick-slider/slick.min.js')}}"></script>
    <script defer src="{{asset('assets/js/flipcount/flipdown.min.js')}}"></script>
    <script defer src="{{asset('assets/js/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script defer src="{{asset('assets/js/mcustom/jquery.mCustomScrollbar.min.js')}}"></script>
    <script defer src="{{asset('assets/js/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script defer src="{{asset('assets/js/site.inc.js')}}"></script>
    <script defer src="{{asset('assets/js/ap.inc.js')}}"></script>

</head>

<body>
    <header class="ap-header col-100 floatLft">
        <div class="ap-stripWht col-100 floatLft flexDisplay justifySpace alignCenter">
            <div class="ap-stripTxt">
                <span>IPL 2021</span>
                <span>19 September - 15 October 2021</span>
            </div>
            <div class="ap-bcciLogo">
                <a href="javascript:;">
                    <h4 class="ap-bcciTxt"><span><img src="{{asset('assets/images/BCCI_logo.png')}}" alt="BCCI Logo"></span>BCCI.tv</h4>
                </a>
            </div>
            <div class="ap-socialDiv">
                <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a href="javascript:;"><i class="fa fa-linkedin-square"></i></a>
                <a href="javascript:;"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="ap-add-banner col-100 floatLft relative">
            <a href="javascript:;" class="ap-close-add absolute"><img src="{{asset('assets/images/close-add.png')}}" alt=""></a>
            <div class="ap-add-banner-inner col-100 floatLft relative flexDisplay justifySpace alignEnd">
                <div class="ap-get-app floatLft">
                    <h2 class="ap-gt-txt">GET THE APP!</h2>
                    <div class="ap-app-download">
                        <a href="javascript:;"><img src="{{asset('assets/images/play-store.png')}}" alt=""></a>
                        <a href="javascript:;"><img src="{{asset('assets/images/app-store.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="ap-get-app floatRgt">
                    <img src="{{asset('assets/images/mob-images.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="ap-main-header col-100 floatLft flexDisplay justifySpace alignCenter">
            <div class="ap-ipl-logo"><a href="{{url('')}}"><img src="{{asset('assets/images/ipl-logo.png')}}" alt=""></a></div>
            <div class="ap-nav">
                <ul class="ap-navigation col-100 floatLft">
                    @foreach($menus as $menu)
                    <li><a href="{{ $menu['slug'] }}"> {{ $menu['title'] }}</a>
                        @if(isset($menu['submenu']))
                        <ul class="sub-menu">
                            @foreach($menu['submenu'] as $submenu)
                            <li><a href="{{ $submenu['slug'] }}"> {{ $submenu['title'] }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="ap-search">
                <a href="javascript:;" class="ap-searchClick"><img src="{{asset('assets/images/magnify.png')}}" alt=""></a>
                <a href="javascript:;" class="ap-fanPolls"><img src="{{asset('assets/images/fanpolls.png')}}" alt=""></a>
                <a href="javascript:;" class="ap-mobile-menu-toggle">
                    <img src="{{asset('assets/images/mob-ham.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="ap-orange-header col-100 floatLft flexDisplay justifyCenter">
            <div class="ap-orange-inner">
                <span>Trending</span>
                <ul class="ap-inner-nav">
                    @foreach($trendingMenus as $trendingMenu)
                    <li><a href="{{ $trendingMenu['slug'] }}">{{ $trendingMenu['title'] }} <i class="fa fa-angle-right"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>
    <!--navigation menu end-->
    @show