
    @include('layouts.header')

    <div class="vn-teamswrap col-100 floatLft">
        <div class="vn-teamsInner">
            <ul class="vn-teamsInnerWrp">
            @if($teamdata['data'])
        @foreach($teamdata['data']['men'] as $list)


        @php
				switch($list['abbreviation']){
					case 'KKR': 	$vnClass = 'vn-'.Str::lower($list['abbreviation']);										
					break;
					
                    case 'SRH': 	$vnClass = 'vn-sh';										
					break;

                    case 'DC': 	$vnClass = 'vn-'.Str::lower($list['abbreviation']);										
					break;

                    case 'PBKS': 	$vnClass = 'vn-pk';										
					break;

                    case 'MI': 	$vnClass = 'vn-'.Str::lower($list['abbreviation']);										
					break;

                    case 'RR': 	$vnClass = 'vn-'.Str::lower($list['abbreviation']);										
					break;

                    case 'RCB': 	$vnClass = 'vn-'.Str::lower($list['abbreviation']);										
					break;

                    case 'CSK': 	$vnClass = 'vn-'.Str::lower($list['abbreviation']);										
					break;

					default: $vnClass = 'vn-csk';										
					break;
				}
			@endphp
       
        <li class="{{$vnClass}}" >
        <a href="{{ route('teamsoverview', $list['id']) }}">
                    <div class="vn-team-logo"><img src="{{$list['logo']}}" alt=""></div>
                    <div class="ap-team-contn col-100 floatLft">
                        <h3>{{$list['fullName']}}</h3>
                        <p>M. A. Chidambaram Stadium</p>
                        @if(!empty($list['wonYears']))
                        <div class="vn-trophyBtnout">
                            <div class="vn-trophyBtn">
                                <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                                <span>{{implode(', ',$list['wonYears'])}}</span>
                            </div>
                        </div>
                        @endif                        
                    </div>
                    </a>
                </li>

        @endforeach
    @else
        <h1>No Data Found </h1>
    @endif
            </ul>
        </div>
    </div>

    @include('layouts.footer')