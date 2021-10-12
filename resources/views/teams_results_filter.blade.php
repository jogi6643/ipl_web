@include('layouts.header')

    <div class="vn-teamOverviewWrap col-100 floatLft">

        <div class="vn-teamNav col-100 floatLft">
            <ul>
                <li >
                    <div class="ap-logoteam-wrp vn-nav-csk">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-csk.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/CSK-logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-dc.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Delhi-Capitals-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-mi.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Mumbai-Indians-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-kkr.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/KKR-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-rr.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/RajasthanRoyalLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-pk.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Punjab-KingsLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-rcb.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/RCBLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="{{asset('assets/images/vishal/nav-sh.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Sunrisers-Logo.png')}}" alt=""></a>
                    </div>

                </li>
            </ul>
        </div>

        <div class="vn-teamOvrBanner col-100 floatLft">
            <img src="{{asset('assets/images/vishal/banner-csk.png')}}" alt="" class="vn-team-Desk">
            <img src="{{asset('assets/images/vishal/vn-mob-banner-team.png')}}" alt="" class="vn-team-Mob">
            <div class="vn-bannerDet">
                <div class="vn-teamTitle col-100 floatLft">
                    <div class="vn-teamBanLogo"><img src="{{asset('assets/images/vishal/logo-csk.png')}}" alt=""></div>
                    <div class="vn-teamTitleODet">
                        <h2>Chennai super kings</h2>
                        <div class="vn-banShare">
                           <a href="#" class="vn-button">Watch Video</a>
                           <div class="vn-socIcons">
                               <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="vn-trophyBtn">
                            <img src="{{asset('assets/images/vishal/ico-trophy.png')}}" alt="">
                            <span>2010, 2011, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="vn-teamdesc col-100 floatLft">
                    <p>Owner : <span>Chennai Super Kings Ltd.</span> </p>
                    <p>Coach : <span>Stephen Fleming</span></p>
                    <p>Venue : <span>M.A. Chidambaram Stadium</span></p>
                    <p>Captain : <span>M.S. Dhoni</span></p>
                </div>
            </div>
        </div>

        <div class="vn-tabbing col-100 floatLft">
            <a href="#">Overview</a>
            <a href="#">schedule</a>
            <a href="#" class="active">results</a>
            <a href="#">squad</a>
            <a href="#">news</a>
            <a href="#">archive</a>
        </div>

        <div class="vn-sheduleWrap col-100 floatLft">
            <div class="vn-sheduleFilterWrap col-100 floatLft">
                <div class="vn-sheduleFilterInner relative">
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
