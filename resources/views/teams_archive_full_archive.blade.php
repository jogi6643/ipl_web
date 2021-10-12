    @include('layouts.header')

    <div class="vn-teamOverviewWrap col-100 floatLft">

        <div class="vn-innerPageBan col-100 floatLft">
            <h2>Results</h2>
        </div>

        <div class="vn-sheduleWrap col-100 floatLft">
            <div class="vn-sheduleFilterWrap col-100 floatLft">
                <div class="vn-sheduleFilterInner">
                    <div class="vn-menWoTab">
                        <a href="#" class="active">Men</a>
                        <a href="#">Women</a>
                    </div>
                    <div class="vn-sheduleFilter">
                        <span>Filter</span>
                        <img src="{{ asset('assets/images/vishal/ico-filter.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="vn-sheduleList vn-fullArchiveList col-100 floatLft">
                <ul>
                    @foreach ($team_archive['data'] as $key => $value)
                        <li>
                            @php
                                $first_Team = explode(' ', $value['matchInfo']['teams'][0]['team']['fullName'], 2);
                            @endphp
                            {{-- @foreach ($value['matchInfo']['teams'] as $k => $v) --}}
                            <div class="vn-shedule-desk col-100 floatLft">
                                <div class="vn-sheduleLogo">
                                    <div class="vn-shedTeam">
                                        <img src="{{ asset('assets/images/vishal/logo-csk.png') }}" alt="">
                                        <div class="vn-teamTitle">
                                            <h3>{{ $first_Team[0] }}<br>{{ $first_Team[1] }}</h3>
                                            <p>{{ $value['innings'][0]['scorecard']['runs'] }}/{{ $value['innings'][0]['scorecard']['wkts'] }}
                                            </p>
                                            <span>({{ $value['innings'][0]['overProgress'] }}/20 OV)</span>
                                        </div>
                                    </div>
                                    <span>VS</span>
                                    <div class="vn-shedTeam vn-team-2">
                                        <img src="{{ asset('assets/images/vishal/logo-dc.png') }}" alt="">
                                        @php
                                            $second_Team = explode(' ', $value['matchInfo']['teams'][1]['team']['fullName'], 2);
                                        @endphp
                                        <div class="vn-teamTitle">
                                            <h3>{{ $second_Team[0] }}<br>{{ $second_Team[1] }}</h3>
                                            <p>{{ $value['innings'][1]['scorecard']['runs'] }}/{{ $value['innings'][1]['scorecard']['wkts'] }}
                                            </p>
                                            <span>({{ $value['innings'][1]['overProgress'] }}/20 OV)</span>
                                        </div>
                                    </div>


                                </div>

                                <div class="vn-ticket">
                                    @php
                                        $result = explode('by', $value['matchInfo']['matchStatus']['text']);
                                    @endphp
                                    <div class="vn-ticketTitle">{{ $result[0] ?? '' }}
                                        by<br>{{ $result[1] ?? '' }}</div>
                                    <div class="vn-ticnbtn">
                                        <a href="#" class="vn-matchBtn">Match Centre</a>
                                        <a href="#" class="vn-ticBtn"><span>REPORT</span><img
                                                src="{{ asset('assets/images/vishal/ico-arrow.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="vn-venueDet">

                                    @php
                                        $date_time = explode('T20:', $value['matchInfo']['matchDate']);
                                        $date = date('l j F, Y', strtotime($value['matchInfo']['matchDate']));
                                        $time = date('H:i', strtotime($value['matchInfo']['matchDate']));    
                                    @endphp
                                    <div class="vn-date">@php echo $date; @endphp</div>
                                    <div class="vn-matchno">{{ $value['matchInfo']['description'] }}</div>
                                    <div class="vn-matchTime"><span>{{ $time }} IST</span>
                                        <p>{{ $value['matchInfo']['venue']['fullName'] }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                            <div class="vn-sheduleMob col-100 floatLft">
                                <div class="vn-dateTicket col-100 floatLft">
                                    <div class="vnMobDate">
                                        <div class="vn-matchno">Match 28</div>
                                        <div class="vn-date">Sunday 2 May, 2021</div>
                                    </div>
                                    <a href="#" class="vn-ticBtn"><span>TICKETS</span><img
                                            src="{{ asset('assets/images/vishal/ico-arrow.png') }}" alt=""></a>
                                </div>
                                <div class="vn-sheduleLogo">
                                    <div class="vn-shedTeam">
                                        <img src="{{ asset('assets/images/vishal/logo-csk.png') }}" alt="">
                                        <h3>CSK</h3>
                                    </div>
                                    <span>VS</span>
                                    <div class="vn-shedTeam vn-team-2">
                                        <img src="{{ asset('assets/images/vishal/logo-dc.png') }}" alt="">
                                        <h3>DC</h3>
                                    </div>
                                </div>
                                <div class="vn-timeMatchBtn">
                                    <div class="vn-matchTime"><span>19:30 IST</span>
                                        <p>Arun Jaitley Stadium</p>
                                    </div>
                                    <a href="#" class="vn-matchBtn">Match Centre</a>
                                </div>
                                <div class="vn-matchTitleRep">
                                    <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                    <a href="#" class="vn-ticBtn"><span>REPORT</span><img
                                            src="{{ asset('assets/images/vishal/ico-arrow.png') }}" alt=""></a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    {{-- <li>
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
                                    <a href="#" class="vn-matchBtn">Match Centre</a>
                                    <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="#" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                    <a href="#" class="vn-matchBtn">Match Centre</a>
                                    <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="#" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                    <a href="#" class="vn-matchBtn">Match Centre</a>
                                    <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="#" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                    <a href="#" class="vn-matchBtn">Match Centre</a>
                                    <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
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
                                <a href="#" class="vn-matchBtn">Match Centre</a>
                            </div>
                            <div class="vn-matchTitleRep">
                                <div class="vn-ticketTitle">Chennai Super Kings won by <br>14 Runs</div>
                                <a href="#" class="vn-ticBtn"><span>REPORT</span><img src="{{asset('assets/images/vishal/ico-arrow.png')}}" alt=""></a>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>


    <div class="filter" style="display:none">
        <div class="filter-box">
            <div class="head"><h3>Filters</h3> <div class="close"><img src="{{asset('assets/images/close-sign.svg')}}" alt=""></div> </div>
            <div class="filters">
                <h3>Teams</h3>
                <ul class="filter-list">
                    <li> 
                        <input type="radio" id="ch" name="team" value="HTML"> 
                        <label for="ch">Chennai Super KIngs</label>
                    </li>
                    <li> 
                        <input type="radio" id="dl" name="team" value="HTML"> 
                        <label for="dl">Delhi Capitals</label>
                    </li>
                    <li> 
                        <input type="radio" id="ra" name="team" value="HTML"> 
                        <label for="ra">Rajasthan Royals</label>
                    </li>
                    <li> 
                        <input type="radio" id="pu" name="team" value="HTML"> 
                        <label for="pu">Punjab Kings</label>
                    </li>
                    <li> 
                        <input type="radio" id="mu" name="team" value="HTML"> 
                        <label for="mu">Mumbai Indians</label>
                    </li>
                    <li> 
                        <input type="radio" id="su" name="team" value="HTML"> 
                        <label for="su">Sunrisers Hyderabad</label>
                    </li>
                </ul>
            </div>
            <div class="filters">
                <h3>Venues</h3>
                <ul class="filter-list">
                    <li> 
                        <input type="radio" id="delhi" name="venue" value="HTML"> 
                        <label for="delhi">Delhi</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">Mumbai</label>
                    </li>
                </ul>
            </div>
            <div class="filters">
                <h3>Season</h3>
                <ul class="filter-list">
                    <li> 
                        <input type="radio" id="2021" name="venue" value="HTML"> 
                        <label for="2021">2021</label>
                    </li>
                    <li> 
                        <input type="radio" id="2020" name="venue" value="HTML"> 
                        <label for="2020">2020</label>
                    </li>
                    <li> 
                        <input type="radio" id="2019" name="venue" value="HTML"> 
                        <label for="2019">2019</label>
                    </li>
                    <li> 
                        <input type="radio" id="2018" name="venue" value="HTML"> 
                        <label for="2018">2018</label>
                    </li>
                    <li> 
                        <input type="radio" id="2017" name="venue" value="HTML"> 
                        <label for="2017">2017</label>
                    </li>
                    <li> 
                        <input type="radio" id="2016" name="venue" value="HTML"> 
                        <label for="2016">2016</label>
                    </li>
                    <li> 
                        <input type="radio" id="2015" name="venue" value="HTML"> 
                        <label for="2015">2015</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2014</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2013</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2012</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2011</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2010</label>
                    </li>
                                        <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2009</label>
                    </li>
                                        <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2008</label>
                    </li>
                                        <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">2007</label>
                    </li>
                </ul>
            </div>

        </div>    
    </div>    

    @include('layouts.footer')
