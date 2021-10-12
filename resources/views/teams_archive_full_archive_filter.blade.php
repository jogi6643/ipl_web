@include('layouts.header')

    <div class="vn-teamOverviewWrap col-100 floatLft">

        <div class="vn-innerPageBan col-100 floatLft">
            <h2>Results</h2>
        </div>

        <div class="vn-sheduleWrap col-100 floatLft ">
            <div class="vn-sheduleFilterWrap col-100 floatLft">
                <div class="vn-sheduleFilterInner relative">
                    <div class="vn-menWoTab">
                       <a href="#" class="active">Men</a>
                       <a href="#">Women</a>
                    </div>
                    <div class="vn-sheduleFilter">
                        <span>Filter</span>
                        <a class="np-filt" href="javascript:;" id="np-filt"><img src="{{asset('assets/images/vishal/ico-filter.png')}}" alt=""></a>
                    </div>
                    <div class="Filter_popup np-popup vn-popup absolute" id="Filter_popup">
                        <div class="popWrp col-100 floatLft">
                          <div class="np-popup--title col-100 floatLft relative flexDisplay alignCenter justifySpace">
                            <h1>Filters</h1>
                            <a href="javascript:;" class="closePop floatRgt"><i class="fa fa-close"></i></a>
                          </div>
                          <div class="np-popup__term col-100 floatLft">

                            <div class="np-popup__term--list col-100 floatLft  ">
                              <div class="np-popup__term--title">
                                Teams
                              </div>
                              <ul class="np-popup__term--list-title col-100 floatLft flexDisplay justifyStart alignCenter flexWrap ">
                                <li>
                                  <input type="checkbox" name="checkbox1" id="chennai" value="chennai">
                                  <label class="np-popup__term--btn " for="chennai"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Chennai Super Kings</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="delhi" value="delhi">
                                  <label class="np-popup__term--btn " for="delhi"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Delhi Capitals</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="raj" value="raj">
                                  <label class="np-popup__term--btn " for="raj"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Rajasthan Royals</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="punjab" value="punjab">
                                  <label class="np-popup__term--btn " for="punjab"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Punjab Kings</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="mumbai" value="mumbai">
                                  <label class="np-popup__term--btn " for="mumbai"> <i class="fa fa-check" aria-hidden="true"></i>
                                  Mumbai Indians</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="sunrisers" value="sunrisers">
                                  <label class="np-popup__term--btn " for="sunrisers"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Sunrisers Hyderabad</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="banglore" value="banglore">
                                  <label class="np-popup__term--btn " for="banglore"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Royal Challengers Banglore</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="kolkata" value="kolkata">
                                  <label class="np-popup__term--btn " for="kolkata"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Kolkata Knight Riders</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="all" value="all">
                                  <label class="np-popup__term--btn " for="all"> <i class="fa fa-check" aria-hidden="true"></i>
                                    All</label>
                                </li>


                              </ul>
                            </div>
                            <div class="np-popup__term--list col-100 floatLft  ">
                              <div class="np-popup__term--title">
                                Venues
                              </div>
                              <ul class="np-popup__term--list-title col-100 floatLft flexDisplay justifyStart alignCenter flexWrap ">
                                <li>
                                  <input type="checkbox" name="checkbox1" id="Delhi_d" value="Delhi_d">
                                  <label class="np-popup__term--btn " for="Delhi_d"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Delhi</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="Mumbai_m" value="Mumbai_m">
                                  <label class="np-popup__term--btn " for="Mumbai_m"> <i class="fa fa-check" aria-hidden="true"></i>
                                    Mumbai</label>
                                </li>
                              </ul>
                            </div>
                            <div class="np-popup__term--list col-100 floatLft  ">
                              <div class="np-popup__term--title">
                                Season
                              </div>
                              <ul class="np-popup__term--list-title col-100 floatLft flexDisplay justifyStart alignCenter flexWrap ">
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2021" value="2021">
                                  <label class="np-popup__term--btn " for="2021"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2021</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2020" value="2020">
                                  <label class="np-popup__term--btn " for="2020"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2020</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2019" value="2019">
                                  <label class="np-popup__term--btn " for="2019"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2019</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2018" value="2018">
                                  <label class="np-popup__term--btn " for="2018"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2018</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2017" value="2017">
                                  <label class="np-popup__term--btn " for="2017"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2017</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2016" value="2016">
                                  <label class="np-popup__term--btn " for="2016"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2016</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2015" value="2015">
                                  <label class="np-popup__term--btn " for="2015"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2015</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2014" value="2014">
                                  <label class="np-popup__term--btn " for="2014"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2014</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2013" value="2013">
                                  <label class="np-popup__term--btn " for="2013"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2013</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2012" value="2012">
                                  <label class="np-popup__term--btn " for="2012"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2012</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2011" value="2011">
                                  <label class="np-popup__term--btn " for="2011"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2011</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2010" value="2010">
                                  <label class="np-popup__term--btn " for="2010"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2010</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2009" value="2009">
                                  <label class="np-popup__term--btn " for="2009"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2009</label>
                                </li>
                                <li>
                                  <input type="checkbox" name="checkbox1" id="2008" value="2008">
                                  <label class="np-popup__term--btn " for="2008"> <i class="fa fa-check" aria-hidden="true"></i>
                                    2008</label>
                                </li>

                              </ul>
                            </div>
                          </div>

                          <!-- <button class="btnClose">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="vn-sheduleList vn-fullArchiveList col-100 floatLft">
                <ul>
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
                </ul>
            </div>
        </div>
    </div>

@include('layouts.footer')
