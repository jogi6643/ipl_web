
    @include('layouts.header')
<div class="vn-teamswrap col-100 floatLft">
    <div class="vn-teamsInner">
        <ul class="vn-teamsInnerWrp">
    @if($teamlist['data'])
        @foreach($teamlist['data'] as $list)
            <li class="vn-csk">
                <div class="vn-team-logo"><img src="{{isset($list['franchises_logo'])? $list['franchises_logo']:asset('assets/images/vishal/logo-dc.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>{{$list['franchises_name']}}</h3>
                    <p>{{$list['franchises_venue']}}</p>
                    <div class="vn-trophyBtnout">
                        <div class="vn-trophyBtn">
                            <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                            <span>2010, 2011, 2018</span>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    @else
        <h1>No Data Found </h1>
    @endif
            <!-- <li class="vn-dc">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Delhi<br>Capitals</h3>
                    <p>Arun Jaitley Stadium</p>
                    <div class="vn-trophyBtnout"></div>
                </div>
            </li>
            <li class="vn-kkr">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-kkr.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Kolkata Knight<br>Riders</h3>
                    <p>Eden Gardens</p>
                    <div class="vn-trophyBtnout">
                        <div class="vn-trophyBtn">
                            <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                            <span>2012, 2014</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="vn-mi">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-mi.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Mumbai<br>Indians</h3>
                    <p>M. A. Chidambaram Stadium</p>
                    <div class="vn-trophyBtnout">
                        <div class="vn-trophyBtn">
                            <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                            <span>2010, 2011, 2018</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="vn-rr">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-rr.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Rajasthan<br>Royals</h3>
                    <p>Sawai Mansingh Stadium</p>
                    <div class="vn-trophyBtnout">
                        <div class="vn-trophyBtn">
                            <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                            <span>2008</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="vn-pk">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-pk.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Punjab<br>Kings</h3>
                    <p>IS Bindra Stadium</p>
                    <div class="vn-trophyBtnout"></div>
                </div>
            </li>
            <li class="vn-rcb">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-rcb.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Royal Challengers<br>Bangalore</h3>
                    <p>M. Chinnaswamy Stadium</p>
                    <div class="vn-trophyBtnout"></div>
                </div>
            </li>
            <li class="vn-sh">
                <div class="vn-team-logo"><img src="{{asset('assets/images/vishal/logo-sh.png')}}" alt=""></div>
                <div class="ap-team-contn col-100 floatLft">
                    <h3>Sunrisers<br>Hyderabad</h3>
                    <p>Rajiv Gandhi Intl. Cricket Stadium</p>
                    <div class="vn-trophyBtnout">
                        <div class="vn-trophyBtn">
                            <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                            <span>2016</span>
                        </div>
                    </div>
                </div>
            </li> -->
        </ul>
    </div>
</div>

@include('layouts.footer')





