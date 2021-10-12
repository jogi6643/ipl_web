@include('team.teams_header')
        <div class="vn-sheduleWrap col-100 floatLft">
            {{-- <div class="vn-sheduleFilterWrap col-100 floatLft">
                <div class="vn-sheduleFilterInner">
                    <div class="vn-sheduleSponcer">
                        <div class="vn-sponcerLogo">
                            <p>OFFICIAL<br>BROADCASTER</p>
                            <img src="{{asset('assets/images/vishal/star-sports.webp')}}" alt="">
                        </div>
                        <div class="vn-sponcerLogo">
                            <p>OFFICIAL DIGITAL<br>STREAMING PARTNER</p>
                            <img src="{{asset('assets/images/vishal/sponsor-hotstar.webp')}}" alt="">
                        </div>
                    </div>
                    <div class="vn-sheduleFilter">
                        <span>Filter</span>
                        <img src="{{asset('assets/images/vishal/ico-filter.png')}}" alt="">
                    </div>
                </div>
            </div> --}}
            <div class="vn-sheduleList col-100 floatLft">
                <ul>
                    @if($response_data['data'])
                       @foreach($response_data['data'] as $key=>$value)
                        <li>
                            <div class="vn-shedule-desk col-100 floatLft">
                                <div class="vn-sheduleLogo">
                                    <div class="vn-shedTeam">
                                        <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                        <h3>{{$value['matchInfo']['teams']['0']['team']['fullName']}}</h3>
                                    </div>
                                    <span>VS</span>
                                    <div class="vn-shedTeam vn-team-2">
                                        <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                        <h3>{{$value['matchInfo']['teams']['1']['team']['fullName']}}</h3>
                                    </div>
                                </div>
                                <div class="vn-ticket">
                                    <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                    <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                                </div>
                                <div class="vn-venueDet">
                                    <div class="vn-date">{{date("l d M,Y", strtotime($value['matchInfo']['matchDate']))}}</div>
                                    <div class="vn-matchno">{{$value['matchInfo']['description']}}</div>
                                    <div class="vn-matchTime"><span>{{date('H:i',$value['matchInfo']['matchDateMs'])}} IST</span><p>{{$value['matchInfo']['venue']['fullName']}}</p></div>
                                </div>
                            </div>

                            <!--<div class="vn-sheduleMob col-100 floatLft">
                                <div class="vn-dateTicket col-100 floatLft">
                                    <div class="vnMobDate">
                                        <div class="vn-matchno">Match 28</div>
                                        <div class="vn-date">Sunday 2 May, 2021</div>
                                    </div>
                                    <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                </div>
                                <div class="vn-sheduleLogo">
                                    <div class="vn-shedTeam">
                                        <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                        <h3>CSK</h3>
                                    </div>
                                    <span>VS</span>
                                    <div class="vn-shedTeam vn-team-2">
                                        <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                        <h3>DC</h3>
                                    </div>
                                </div>
                                <div class="vn-timeMatchBtn">
                                    <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                    <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                                </div>
                            </div>-->
                        </li>
                       @endforeach
                       @else
                        <h1>No Data Found </h1>
                      @endif   
                    
                    <!--<li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>Chennai<br>Super Kings</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>Delhi<br>Capitals</h3>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date">Sunday 2 May, 2021</div>
                                <div class="vn-matchno">Match 28</div>
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">Match 28</div>
                                    <div class="vn-date">Sunday 2 May, 2021</div>
                                </div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>CSK</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>DC</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>Chennai<br>Super Kings</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>Delhi<br>Capitals</h3>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date">Sunday 2 May, 2021</div>
                                <div class="vn-matchno">Match 28</div>
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">Match 28</div>
                                    <div class="vn-date">Sunday 2 May, 2021</div>
                                </div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>CSK</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>DC</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>Chennai<br>Super Kings</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>Delhi<br>Capitals</h3>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date">Sunday 2 May, 2021</div>
                                <div class="vn-matchno">Match 28</div>
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">Match 28</div>
                                    <div class="vn-date">Sunday 2 May, 2021</div>
                                </div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>CSK</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>DC</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>Chennai<br>Super Kings</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>Delhi<br>Capitals</h3>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date">Sunday 2 May, 2021</div>
                                <div class="vn-matchno">Match 28</div>
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">Match 28</div>
                                    <div class="vn-date">Sunday 2 May, 2021</div>
                                </div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>CSK</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>DC</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>Chennai<br>Super Kings</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>Delhi<br>Capitals</h3>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date">Sunday 2 May, 2021</div>
                                <div class="vn-matchno">Match 28</div>
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">Match 28</div>
                                    <div class="vn-date">Sunday 2 May, 2021</div>
                                </div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>CSK</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>DC</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>Chennai<br>Super Kings</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>Delhi<br>Capitals</h3>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date">Sunday 2 May, 2021</div>
                                <div class="vn-matchno">Match 28</div>
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">Match 28</div>
                                    <div class="vn-date">Sunday 2 May, 2021</div>
                                </div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>CSK</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>DC</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">
                                <div class="vn-matchTime"><span>19:30 IST</span><p>Arun Jaitley Stadium</p></div>
                                <a href="{{url('teams_schedule_match_details')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>


   @include('layouts.footer')



