
    
   @include('team.teams_header')
<!-- 
        <div class="vn-sheduleWrap col-100 floatLft">
            <div class="vn-sheduleFilterWrap col-100 floatLft">
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
            </div> -->

            <div class="vn-sheduleList vn-fullArchiveList col-100 floatLft">
                <ul>
                @if($teamresult['data'])
        @foreach($teamresult['data'] as $list)
        <li>
                     <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>{{$list['matchInfo']['teams'][0]['team']['fullName']}}</h3>
                                        <p>{{$list['innings'][0]['scorecard']['runs']}}/{{$list['innings'][0]['scorecard']['wkts']}}</p>
                                        <span>({{$list['innings'][0]['overProgress']}}/{{$list['matchInfo']['oversLimit']}} OV)</span>
                                    </div>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>{{$list['matchInfo']['teams'][1]['team']['fullName']}}</h3>
                                        <p>{{$list['innings'][1]['scorecard']['runs']}}/{{$list['innings'][1]['scorecard']['wkts']}}</p>
                                        <span>({{$list['innings'][1]['overProgress']}}/{{$list['matchInfo']['oversLimit']}} OV)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <div class="vn-ticketTitle">{{$list['matchInfo']['matchStatus']['text']}}</div>
                                <div class="vn-ticnbtn">
                                    <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                                    <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="vn-venueDet">
                                <div class="vn-date"> 
                                @php
                                        $date_time = explode('T:', $list['matchInfo']['matchDate']);
                                        $date = date('l j F, Y', strtotime($date_time[0]));
                                        echo $date;
                                    @endphp</div>
                                <div class="vn-matchno">{{$list['matchInfo']['description']}}</div>
                                <div class="vn-matchTime"><span>@php echo date("H:i", $list['matchInfo']['matchDateMs']); @endphp IST</span><p>{{$list['matchInfo']['venue']['fullName']}}</p></div>
                            </div>
                        </div>

                        <div class="vn-sheduleMob col-100 floatLft">
                            <div class="vn-dateTicket col-100 floatLft">
                                <div class="vnMobDate">
                                    <div class="vn-matchno">{{$list['matchInfo']['description']}}</div>
                                    <div class="vn-date">@php
                                        $date_time = explode('T:', $list['matchInfo']['matchDate']);
                                        $date = date('l j F, Y', strtotime($date_time[0]));
                                        echo $date;
                                    @endphp</div>
                                </div>
                                <a href="#" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <h3>{{$list['matchInfo']['teams'][0]['team']['abbreviation']}}</h3>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <h3>{{$list['matchInfo']['teams'][1]['team']['abbreviation']}}</h3>
                                </div>
                            </div>
                            <div class="vn-timeMatchBtn">

                                <div class="vn-matchTime"><span>@php echo date("H:i", $list['matchInfo']['matchDateMs']); @endphp IST</span><p>{{$list['matchInfo']['venue']['fullName']}}</p></div>
                                <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">{{$list['matchInfo']['matchStatus']['text']}}</div>
                                <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                        </div>
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
                                    <div class="vn-teamTitle">
                                        <h3>Chennai<br>Super Kings</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Delhi<br>Capitals</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <div class="vn-ticnbtn">
                                    <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                                    <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                </div>
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
                                <a href="#" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                        </div>
                    </li>
                     <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Chennai<br>Super Kings</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Delhi<br>Capitals</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <div class="vn-ticnbtn">
                                    <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                                    <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                </div>
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
                                <a href="{{url('teams_result_overview')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Chennai<br>Super Kings</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Delhi<br>Capitals</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <div class="vn-ticnbtn">
                                    <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                                    <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                </div>
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
                                <a href="{{url('teams_result_overview')}}" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="vn-shedule-desk col-100 floatLft">
                            <div class="vn-sheduleLogo">
                                <div class="vn-shedTeam">
                                    <img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Chennai<br>Super Kings</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                                <span>VS</span>
                                <div class="vn-shedTeam vn-team-2">
                                    <img src="{{asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                    <div class="vn-teamTitle">
                                        <h3>Delhi<br>Capitals</h3>
                                        <p>220/3</p>
                                        <span>(20/20 OV)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="vn-ticket">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <div class="vn-ticnbtn">
                                    <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                                    <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                                </div>
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
                                <a href="#" class="vn-ticBtn"><span>TICKETS</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="{{url('teams_result_overview')}}" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="{{url('teams_results_report')}}" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>


    
    @include('layouts.footer')


