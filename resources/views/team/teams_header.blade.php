@include('layouts.header')

@php
    use App\Http\APIHandlers; 
    $headers = [
        'Accept:application/json',
        // 'Authorization: Bearer ' . APIHandlers::get_token()
    ];
    $response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/franchise/teams-list', $headers);
    $response = json_decode($response, true);
    if (!empty($response['status']) && $response['status'] == true) {
        $response;
    } else {
        $response;
    }
@endphp
<div class="vn-teamOverviewWrap col-100 floatLft">
    <div class="vn-teamNav col-100 floatLft">
            <ul>
            @if($response['data'])
        @foreach($response['data']['men'] as $list)
                <li >
                    <div class="ap-logoteam-wrp vn-nav-csk">                        
                        <a href="{{ route('teamsoverview', $list['id']) }}"><img src="{{$list['logo']}}" alt=""></a>
                    </div>
                </li>
                @endforeach
                @endif              
            </ul>
        </div>

        @php
        $id =  Request::segment(2);

    $headers = [
        'Accept:application/json',
        // 'Authorization: Bearer ' . APIHandlers::get_token()
    ];
    $response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/franchise/detail/'.$id, $headers);
    $response = json_decode($response, true);

  
    if (!empty($response['status']) && $response['status'] == true) {
        $response = $response['data'][0];
    } else {
        $response = $response['data'][0];
    }
@endphp

<div class="vn-teamOvrBanner col-100 floatLft">
            <img src="{{$response['banner'] ?? ''}}" alt="" class="vn-team-Desk">
            <img src="{{$response['banner'] ?? ''}}" alt="" class="vn-team-Mob">
            <div class="vn-bannerDet">
                <div class="vn-teamTitle col-100 floatLft">
                    <div class="vn-teamBanLogo"><img src="{{$response['logo'] ?? ''}}" alt=""></div>
                    <div class="vn-teamTitleODet">
                        <h2>{{$response['fullName'] ?? ''}}</h2>
                        <div class="vn-banShare">
                           <a href="#" class="vn-button">Watch Video</a> 
                           <div class="vn-socIcons">
                               <a href="{{$teamoverview['social']['twitterUrl'] ?? ''}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                               <a href="{{$teamoverview['social']['instagramUrl'] ?? ''}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               <a href="{{$teamoverview['social']['fbUrl'] ?? ''}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </div>
                        </div>


                        @if(!empty($response['wonYears']))
                          <div class="vn-trophyBtnout">
                            <div class="vn-trophyBtn">
                                <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                                <span>{{implode(', ',$response['wonYears'])}}</span>
                            </div>
                        </div>
                        @endif         
                    </div>
                </div>
                <div class="vn-teamdesc col-100 floatLft">
                    <p>Owner : <span>{{$response['owner'] ?? ''}}</span> </p>
                    <p>Coach : <span>{{$response['couch'] ?? ''}}</span></p>
                    <p>Venue : <span>{{$response['venue'] ?? ''}}</span></p>
                    <p>Captain : <span>{{$response['captain'] ?? ''}}</span></p>
                </div>
            </div>
        </div>

        <div class="vn-tabbing col-100 floatLft">
            @php
           
            @endphp

            <a href="{{url('teamsoverview', $response['_id'])}}" class="{{request()->is('teamsoverview*') ? 'active' : '' }}">Overview</a>
            <a href="{{url('teams_result_schedule', $response['_id'])}}" class="{{request()->is('teams_result_schedule*') ? 'active' : '' }}">schedule</a>
            <a href="{{url('teamsresults', $response['_id'])}}" class="{{request()->is('teamsresults*') ? 'active' : '' }}">results</a>
            <a href="{{url('teamssquad', $response['_id'])}}" class="{{request()->is('teamssquad*') ? 'active' : '' }}">squad</a>
            <a href="{{url('teamnews', $response['_id'])}}" class="{{request()->is('teamnews*') ? 'active' : '' }}">news</a>	
            <a href="{{url('teamsarchive', $response['_id'])}}" class="{{request()->is('teamsarchive*') ? 'active' : '' }}">archive</a>

        </div>