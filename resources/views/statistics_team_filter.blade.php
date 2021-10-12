
@include('layouts.header')

    <div class="vn-teamOverviewWrap col-100 floatLft">
    <div class="vn-teamNav col-100 floatLft">
            <ul>
                <li >
                    <div class="ap-logoteam-wrp vn-nav-csk">
                        <!-- <a href="#"><img src="images/vishal/nav-csk.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/CSK-logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-dc.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Delhi-Capitals-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-mi.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Mumbai-Indians-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-kkr.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/KKR-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-rr.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/RajasthanRoyalLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-pk.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/Punjab-KingsLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-rcb.png')}}" alt=""></a> -->
                        <a href="#"><img src="{{asset('assets/images/RCBLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <!-- <a href="#"><img src="images/vishal/nav-sh.png')}}" alt=""></a> -->
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
            <a href="#">results</a>
            <a href="#" class="active">squad</a>
            <a href="#">news</a>
            <a href="#">archive</a>
        </div>
    </div>



    <div class="ih-teams-squad-sec">
        <div class="ih-bg">
           <div class="ih-titel relative">
                <div class="ih-t-left">
                    <h2>IPL Squad 2021</h2>
                </div>
                <div class="ih-t-right">
                    <h3>Filter</h3>
                    <a class="np-filt" href="javascript:;" id="np-filt"><img src="{{asset('assets/images/ishwar/ih-teams-squad-filter-icon.png')}}" alt=""></a>
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

           <div class="ih-pcard-sec">
                <div class="ih-pcard-wrap">
                    <ul>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p1.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>MS Dhoni</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">

                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p2.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Bhagath Varma</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p3.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Imran Tahir</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p4.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Harishankar Reddy</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p5.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Ruturaj Gaikwad</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>

                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p6.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Hari Nishaanth</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p7.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Ravindra Jadeja</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p8.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Deepak Chahar</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p9.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>KM Asif</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p10.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Moeen Ali</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>

                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p11.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Shardul Thakur</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p12.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Sai Kishore</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p13.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Josh Hazlewood</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p14.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Narayan Jagdeesan</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p15.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Suresh Raina</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>

                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p16.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Karn Sharma</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p17.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Lungi Ngidi</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p18.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Sam Curran</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p19.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Faf Du Plesis</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p20.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Dwyane Bravo</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>

                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p21.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Robin Uthappa</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p22.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Cheteshwar Pujara</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p23.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Ambati Rayudu</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                        <img src="{{asset('assets/images/ih-p1-absolute2.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p24.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>Mitchell Santner</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>
                      <li class="ih-pcard1">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p25.png')}}" alt="">

                            <div class="ih-p-name">
                                <h2>K. Gowtham</h2>
                            </div>
                          </div>
                          <div class="ih-p-cont">
                                <h2>IPL 2021</h2>
                                <ul class="ih-p-cont-in">
                                    <li>
                                        <h3>07</h3>
                                        <p>Matches</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>380</h3>
                                        <p>Runs</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>0</h3>
                                        <p>Wickets</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/images/ih-teams-squad-line.png')}}" alt="">
                                    </li>
                                    <li>
                                        <h3>2008</h3>
                                        <p>IPL Debut</p>
                                    </li>
                                </ul>
                          </div>
                          <div class="ih-vp-btn">
                          <a href="#" >view profile</a>
                          </div>
                      </li>


                    </ul>

                    <div class="ih-view">
                        <a href="#">view all</a>
                    </div>
                </div>
           </div>


        </div>

    </div>


@include('layouts.footer')
