
    
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
            <a href="{{url('teams_overview')}}">Overview</a>
            <a href="{{url('teams_result_schedule')}}">schedule</a>
            <a href="{{url('teams_results')}}">results</a>
            <a href="{{url('teams_squad')}}">squad</a>
            <a href="{{url('teams_news')}}" class="active">news</a>
            <a href="{{url('teams_archive')}}">archive</a>
        </div>

        <div class="vn-latest-news vn-sheduleBg col-100 floatLft">
            <section class="ap-latest-videos ap-latest-news col-100 floatLft relative">
                <div class="vn-newsPge col-100 floatLft flexDisplay justifySpace alignStart flexWrap">
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-green-text">ARTICLE</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">Player replacements for RCB, <br />
                                    RR, PBKS and KKR</h3>
                            </div>
                            
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-2.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-red-text">ANNOUNCEMENT</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">
                                    BCCI announces schedule for <br />
                                    VIVO IPL 2021 in UAE</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-3.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-text-blue">FEATURED AND INETRVIEWS</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">VIVO IPL 2021, Match 28 RR vs SRH <br />
                                    – Match Report</h3>
                            </div>
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-green-text">ARTICLE</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">Player replacements for RCB, <br />
                                    RR, PBKS and KKR</h3>
                            </div>
                            
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-2.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-red-text">ANNOUNCEMENT</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">
                                    BCCI announces schedule for <br />
                                    VIVO IPL 2021 in UAE</h3>
                            </div>
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-3.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-text-blue">FEATURED AND INETRVIEWS</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">VIVO IPL 2021, Match 28 RR vs SRH <br />
                                    – Match Report</h3>
                            </div>
                        </div>
                        </a>
          
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-green-text">ARTICLE</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">Player replacements for RCB, <br />
                                    RR, PBKS and KKR</h3>
                            </div>
                            
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-2.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-red-text">ANNOUNCEMENT</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">
                                    BCCI announces schedule for <br />
                                    VIVO IPL 2021 in UAE</h3>
                            </div>
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-3.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-text-blue">FEATURED AND INETRVIEWS</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">VIVO IPL 2021, Match 28 RR vs SRH <br />
                                    – Match Report</h3>
                            </div>
                        </div>
                       </a>
        
                    </div> 
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-green-text">ARTICLE</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">Player replacements for RCB, <br />
                                    RR, PBKS and KKR</h3>
                            </div>
                            
                        </div>
                    </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-2.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-red-text">ANNOUNCEMENT</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">
                                    BCCI announces schedule for <br />
                                    VIVO IPL 2021 in UAE</h3>
                            </div>
                        </div> 
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-3.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-text-blue">FEATURED AND INETRVIEWS</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">VIVO IPL 2021, Match 28 RR vs SRH <br />
                                    – Match Report</h3>
                            </div>
                        </div>
                        </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-green-text">ARTICLE</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">Player replacements for RCB, <br />
                                    RR, PBKS and KKR</h3>
                            </div>
                            
                        </div>
                    </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-2.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-red-text">ANNOUNCEMENT</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">
                                    BCCI announces schedule for <br />
                                    VIVO IPL 2021 in UAE</h3>
                            </div>
                        </div>
                    </a>
        
                    </div>
                    <div class="ap-common-news">
                        <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-3.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-text-blue">FEATURED AND INETRVIEWS</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">VIVO IPL 2021, Match 28 RR vs SRH <br />
                                    – Match Report</h3>
                            </div>
                        </div>
                    </a>
        
                    </div>
                    <div class="ap-common-news">
                         <a href="{{url('teams_news_individual_announcement')}}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-green-text">ARTICLE</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">Player replacements for RCB, <br />
                                    RR, PBKS and KKR</h3>
                            </div>
                            
                        </div>
                    </a>
        
                    </div>
                    <div class="ap-common-news">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-2.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-red-text">ANNOUNCEMENT</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">
                                    BCCI announces schedule for <br />
                                    VIVO IPL 2021 in UAE</h3>
                            </div>
                        </div>
        
                    </div>
                    <div class="ap-common-news">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/news-3.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span class="ap-text-blue">FEATURED AND INETRVIEWS</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">VIVO IPL 2021, Match 28 RR vs SRH <br />
                                    – Match Report</h3>
                            </div>
                        </div>
        
                    </div>
                </div>
                <a href="#" class="vn_viewall">View All</a>
            </section>
        </div>
    </div>


    
    @include('layouts.footer')
