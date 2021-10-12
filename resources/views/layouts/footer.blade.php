@section('footer')
@php
use App\Http\APIHandlers;
$headers = [
'Accept:application/json',
// 'Authorization: Bearer ' . APIHandlers::get_token()
];
$response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/menu/web/menu', $headers);
$response = json_decode($response, true);
if (!empty($response['status']) && $response['status'] == true) {
    $footerMenus = $response['Data']['footer'];
} else {
    $footerMenus = [];
}

$response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/menu/sponsors', $headers);
$response = json_decode($response, true);
if (!empty($response['status']) && $response['status'] == true) {
    $sponsors = $response['data'];
} else {
    $sponsors = [];
}
$sponsData = [];
foreach($sponsors as $sponsor){
    switch($sponsor['group']){
        case 'title_sponsor':    $sponsData['title_sponsor'][] = $sponsor;
                                break;
        case 'official_broadcaster':    $sponsData['official_broadcaster'][] = $sponsor;
                                break;
        case 'official_digital_streaming_partner':    $sponsData['official_digital_streaming_partner'][] = $sponsor;
                                break;                                
        case 'official_partner':    $sponsData['official_partner'][] = $sponsor;
                                break;
        case 'umpire_partner':    $sponsData['umpire_partner'][] = $sponsor;
                                break;
        case 'official_strategic_timeout_partner':    $sponsData['official_strategic_timeout_partner'][] = $sponsor;
                                break;
        default: $sponsData['others'][] = $sponsor;
                                break;
    }
}
@endphp
<!--sponsor logo start section -->
<footer class="col-100 floatLft relative flexDisplay justifyCenter flexColumn alignCenter">
    <div class="ap-footer-wrapper first ap-mt18">
        <div class="ap-sponserers-wrp col-100 floatLft">
            <div class="ap-vivo-wrp col-100 floatLft textCenter">
                <div class="ap-common-spons-title">TITLE SPONSOR</div>
                @if(isset($sponsData['title_sponsor']))
                @foreach($sponsData['title_sponsor'] as $image)
                    <div class="ap-vivo-img"><a href="javascript:void(0);"><img src="{{ $image['image_url'] }}" alt=""></a></div>
                @endforeach
                @endif    
            </div>
            <div class="ap-all-spons col-100 floatLft flexDisplay justifySpace alignCenter flexWrap">
                <div class="ap-small-spons flexDisplay justifySpace">
                    <div class="ap-spons-1 rightBorder">
                        <div class="ap-common-spons-title textCenter">OFFICIAL <br> BROADCASTER</div>
                        @if(isset($sponsData['official_broadcaster']))
                        @foreach($sponsData['official_broadcaster'] as $image)
                            <div class="ap-vivo-img"><a href="javascript:void(0);"><img src="{{ $image['image_url'] }}" alt=""></a></div>
                        @endforeach
                        @endif
                    </div>
                    <div class="ap-spons-1 rightBorder ap-no-bor">
                        <div class="ap-common-spons-title textCenter">OFFICIAL DIGITAL <br> STREAMING PARTNER</div>
                        @if(isset($sponsData['official_digital_streaming_partner']))
                        @foreach($sponsData['official_digital_streaming_partner'] as $image)
                            <div class="ap-vivo-img"><a href="javascript:void(0);"><img src="{{ $image['image_url'] }}" alt=""></a></div>
                        @endforeach
                        @endif
                    </div>
                </div>

                <div class="ap-large-spons">
                    <div class="ap-common-spons-title textCenter" style="height: 80px;">OFFICIAL PARTNERS</div>
                    <ul class="ap-inner-spons col-100 floatLft flexDisplay justifySpace alignCenter">
                        @if(isset($sponsData['official_partner']))
                        @foreach($sponsData['official_partner'] as $image)
                            <li><a href="javascript:void(0);"><img src="{{ $image['image_url'] }}" alt=""></a></li>
                        @endforeach
                        @endif
                    </ul>
                </div>

                <div class="ap-small-spons flexDisplay justifySpace">
                    <div class="ap-spons-1 textCenter rightBorder leftBorder-add">
                        <div class="ap-common-spons-title textCenter" style="height: 80px;">UMPIRE PARTNER</div>
                        @if(isset($sponsData['umpire_partner']))
                        @foreach($sponsData['umpire_partner'] as $image)
                            <div class="ap-vivo-img"><a href="javascript:void(0);"><img src="{{ $image['image_url'] }}" alt=""></a></div>
                        @endforeach
                        @endif
                    </div>
                    <div class="ap-spons-1 textCenter">
                        <div class="ap-common-spons-title textCenter" style="height: 80px;">OFFICIAL STRATEGIC <br> TIMEOUT PARTNER</div>
                        @if(isset($sponsData['official_strategic_timeout_partner']))
                        @foreach($sponsData['official_strategic_timeout_partner'] as $image)
                            <div class="ap-vivo-img"><a href="javascript:void(0);"><img src="{{ $image['image_url'] }}" alt=""></a></div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="javascript:;" class="ap-fanpoll-ico"><img src="{{asset('assets/images/fanpoll-ico-mob.png')}}" alt=""></a>

    <div class="ap-footer col-100 floatLft relative flexDisplay justifyCenter ">
        <div class="ap-absolute-elements absolute ap-foot-img1"><img src="{{asset('assets/images/foot-batsman.png')}}" alt=""></div>
        <div class="ap-absolute-elements absolute ap-foot-img2"><img src="{{asset('assets/images/foot-ipl-logo.png')}}" alt=""></div>

        <div class="ap-footer-wrapper">
            <div class="ap-footer-inner col-100 floatLft flexDisplay justifySpace alignStart flexWrap">
                @if(isset($footerMenus))
                @foreach($footerMenus as $footer)
                <div class="ap-foot-menu">
                    <h2 class="ap-foot-head">{{ $footer['title'] }}</h2>
                    <ul class="ap-foot-nav col-100 floatLft">
                        @foreach($footer['options'] as $option)
                        <li><a href="{{ $option['slug'] }}">{{ $option['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                @endif
            </div>
            <div class="ap-foot-line col-100 floatLft"></div>
                <div class="ap-copy col-100 floatLft textLeft">Copyright © IPL {{ date('Y') }} All Rights Reserved. 
                <ul class="social-icon">
                    <li><a href="#"><img src="{{asset('assets/images/footer-twitter.svg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/footer-facebook.svg')}}" alt=""></a></li>
                    <li><a href="#"><img src="{{asset('assets/images/footer-instagram.svg')}}" alt=""></a></li>
                </ul>  
                </div>  
           </div>
        </div>
    </div>
  
</footer>
