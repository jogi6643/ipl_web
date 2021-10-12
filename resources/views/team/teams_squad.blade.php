{{-- dd($teamssquad['data'][0]['captain']['fullName']) --}}
    @include('layouts.header')


    <div class="vn-teamOverviewWrap col-100 floatLft">
    <div class="vn-teamNav col-100 floatLft">
            <!-- <ul>
                <li >
                    <div class="ap-logoteam-wrp vn-nav-csk">
                        <a href="#"><img src="images/CSK-logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        <a href="#"><img src="images/Delhi-Capitals-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                
                        <a href="#"><img src="images/Mumbai-Indians-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        
                        <a href="#"><img src="images/KKR-Logo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        
                        <a href="#"><img src="images/RajasthanRoyalLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        
                        <a href="#"><img src="images/Punjab-KingsLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        
                        <a href="#"><img src="images/RCBLogo.png')}}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="ap-logoteam-wrp">
                        
                        <a href="#"><img src="images/Sunrisers-Logo.png')}}" alt=""></a>
                    </div>
                
                </li>
            </ul> -->
    </div>

        <div class="vn-teamOvrBanner col-100 floatLft">
            <img src="images/vishal/banner-csk.png')}}" alt="" class="vn-team-Desk">
            <img src="images/vishal/vn-mob-banner-team.png')}}" alt="" class="vn-team-Mob">
            <div class="vn-bannerDet">
                <div class="vn-teamTitle col-100 floatLft">
                    <!-- <div class="vn-teamBanLogo"><img src="images/vishal/logo-csk.png')}}" alt=""></div> -->
                    <div class="vn-teamTitleODet">
                        <h2>{{ $teamssquad['data'][0]['fullName'] }}</h2>
                        <div class="vn-banShare">
                           <a href="#" class="vn-button">Watch Video</a> 
                           <div class="vn-socIcons">
                               <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="vn-trophyBtn">
                            <img src="images/vishal/ico-trophy.png')}}" alt="">
                            <span>
                                @if(isset($teamssquad['data'][0]['wonYears']) && count($teamssquad['data'][0]['wonYears'])>0)
                                {{ $teamssquad['data'][0]['wonYears'] }}
                                @else
                                N/A
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="vn-teamdesc col-100 floatLft">
                    <p>Owner : <span>
                    @if(isset($teamssquad['data'][0]['owner']) && count($teamssquad['data'][0]['owner'])>0)
                        {{ $teamssquad['data'][0]['owner'] }}
                    @else
                        N/A
                    @endif
                    </span> </p>
                    <p>Coach : <span>Stephen Fleming</span></p>
                    <p>Venue : <span>
                    @if(isset($teamssquad['data'][0]['venue']))    
                        {{ $teamssquad['data'][0]['venue'] }}
                    @else
                        N/A
                    @endif    
                    </span></p>
                    <p>Captain : <span>
                    @if(isset($teamssquad['data'][0]['captain']['fullName']))    
                        {{ $teamssquad['data'][0]['captain']['fullName'] }}
                    @else
                        N/A
                    @endif 
                    </span></p>
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
           <div class="ih-titel">
                <div class="ih-t-left">
                    <h2>IPL Squad 2021</h2>
                </div>
                <div class="ih-t-right">
                    <h3>Filter</h3>
                    <a href="#"><img src="{{asset('assets/images/ishwar/ih-teams-squad-filter-icon.png')}}" alt=""></a>
                </div>
           </div>

           <div class="ih-pcard-sec">
                <div class="ih-pcard-wrap">
                    <ul>
                    @foreach($teamssquad['data'][0]['players'] as $v)

                      <li class="ih-pcard1">
                        @if($teamssquad['data'][0]['captain']['fullName']==$v['fullName'] )
                        <img src="{{asset('assets/images/ih-p1-absolute.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p1.png')}}" alt="">
                            
                            <div class="ih-p-name">
                                <h2>{{ $v['fullName'] }}</h2>
                            </div>
                          </div>
                          @else
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p1.png')}}" alt="">
                            
                            <div class="ih-p-name">
                                <h2>{{ $v['fullName'] }}</h2>
                            </div>
                          </div>
                          @endif


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
                    @endforeach



                      <!-- <li class="ih-pcard1">

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
                      </li>  -->
                    </ul>

                    <div class="ih-view">
                        <a href="#">view all</a>
                    </div>
                </div>
           </div>


        </div>

    </div>


    
    @include('layouts.footer')


