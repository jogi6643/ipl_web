@if(isset($data['data']))
<section class="ap-ball-summary-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
    <div class="ap-ball-by-txt textCenter">
        <h2 class="ap-bsum highlight"><span><img src="{{asset('assets/images/ap-cricket-ball-1.png')}}" alt=""></span>Ball By Ball</h2>
        <h2 class="ap-bsum"><span><img src="{{asset('assets/images/ap-stumps-small-ico.png')}}" alt=""></span>Fall of Wickets</h2>
    </div>
    <div class="ap-overs-slider">
        @if(isset($data['data']['innings'][1]['overHistory']))
        @foreach($data['data']['innings'][1]['overHistory'] as $over)

        <div class="ap-overs-item">
            <div class="ap-overs-content col-100 floatLft flexDisplay alignCenter">
                <span class="ap-over-num">OVER {{ isset($over['ovNo']) ? $over['ovNo'] : '0' }}</span>
                <div class="ap-overs-ball   ">
                    @foreach($over['ovBalls'] as $overball)
                    @php

                    $class = ((strval($overball) == '6') ? "six-runs" : ((strval($overball) == '4') ? "four-runs" : ((strval($overball) == 'W') ? "wicket-ball" : ((strval($overball) == '.') ? "dot-ball" : "black_text"))));
                    $dotBall = ( $class == "dot-ball")? '<i class="fa fa-minus" aria-hidden="true"></i>' : '';
                    $black_text = ( $class == "black_text")? "style=color:black" : '';

                    @endphp
                    <span class="ap-ball-single {{ $class }}" {!!   $black_text  !!} data-innings-no="{{ $data['data']['innings'][1]['inningsNumber']}}">{!! (strval($overball) == '.') ? $dotBall : $overball !!}</span>
                    @endforeach

                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>
<section class="ap-match-start-wrp col-100 floatLft flexDisplay justifyCenter">
    <div class="ap-match-innerwrp textCenter">
        <h3 class="ap-match-place col-100 floatLft textCenter re">{{ isset($data['data']['matchInfo']['description']) ? $data['data']['matchInfo']['description'] : '' }}, {{ isset($data['data']['matchInfo']['venue']['fullName']) ? $data['data']['matchInfo']['venue']['fullName'] : '' }}, {{ isset($data['data']['matchInfo']['venue']['city'])? $data['data']['matchInfo']['venue']['city'] : '' }}, {{ isset($data['data']['matchInfo']['venue']['country'])?$data['data']['matchInfo']['venue']['country']:''}}</h3>
        <div class="ap-line-match inlineBlk"><img src="{{asset('assets/images/ap-match-live-line.png')}}" alt=""></div>
        <h2 class="ap-match-win">{{ isset($data['data']['matchInfo']['matchStatus']['text']) ? $data['data']['matchInfo']['matchStatus']['text'] : '' }}</h2>
        <div class="ap-teams-battle-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
            <div class="ap-team-result-stat flexDisplay justifySpace alignEnd flexWrap">
                <div class="ap-team-logoName ap-mob-right-align">
                    <div class="ap-team-res-logo"><img src="{{ isset($data['data']['matchInfo']['teams'][0]['team']['logo']) ? $data['data']['matchInfo']['teams'][0]['team']['logo'] : '' }}" alt=""></div>
                    <div class="ap-team-res-name ap-flt-right">{{ isset($data['data']['matchInfo']['teams'][0]['team']['fullName']) ? $data['data']['matchInfo']['teams'][0]['team']['fullName'] : '' }}</div>
                </div>
                <div class="ap-team-res-cnt textRight">
                    <div class="ap-total-runs">220/3</div>
                    <h3 class="ap-runs-overs">Run Rate: 11.00</h3>
                    <h3 class="ap-runs-overs">Overs: 20/20</h3>
                    <div class="ap-overs-count">
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                    </div>
                </div>
            </div>
            <div class="ap-team-vs">
                <h2 class="ap-vs-txt">VS</h2>
            </div>
            <div class="ap-team-result-stat flexDisplay justifySpace alignEnd flexWrap">
                <div class="ap-team-res-cnt textLeft ">
                    <div class="ap-total-runs ap-match-lost">217/3</div>
                    <h3 class="ap-runs-overs ap-match-lost">Run Rate: 10.52</h3>
                    <h3 class="ap-runs-overs ap-match-lost">Overs: 17/20</h3>
                    <div class="ap-overs-count ap-match-lost">
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar"></span>
                        <span class="ap-overscnt-bar empty"></span>
                        <span class="ap-overscnt-bar empty"></span>
                        <span class="ap-overscnt-bar empty"></span>
                    </div>
                </div>
                <div class="ap-team-logoName ap-mob-left-align">
                    <div class="ap-team-res-logo"><img src="{{ isset($data['data']['matchInfo']['teams'][1]['team']['logo']) ? $data['data']['matchInfo']['teams'][1]['team']['logo'] : '' }}" alt=""></div>
                    <div class="ap-team-res-name">{{ isset($data['data']['matchInfo']['teams'][1]['team']['fullName']) ? $data['data']['matchInfo']['teams'][1]['team']['fullName'] : '' }}</div>
                </div>
            </div>
        </div>
        <div class="ap-match-refree col-100 floatLft flexDisplay justifyCenter flexColumn alignCenter">
            <div class="ap-refree-inner flexDisplay justifySpace flexWrap">
                <div class="ap-refree-name ap-w50">
                    <span class="ap-refree-span-light">Referee:</span>
                    <span class="ap-refree-span-bold">Javagal Srinath</span>
                </div>
                <div class="ap-refree-name ap-w50">
                    <span class="ap-refree-span-light">Toss:</span>
                    <span class="ap-refree-span-bold">CSK Won The Toss And Choose To Bat</span>

                </div>
                <div class="ap-refree-name ap-w100">
                    <span class="ap-refree-span-light">Umpires:</span>
                    <span class="ap-refree-span-bold">K Anantha Padmanabhan, o Nandan, Chris Gaffany, K Srinivasan </span>
                </div>
            </div>

        </div>

    </div>
</section>
@else
<div>No data found</div>
@endif