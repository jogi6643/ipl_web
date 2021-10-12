
    @include('team.teams_header')

        <div class="vn-videoWrap col-100 floatLft">
            <section class="ap-latest-videos col-100 floatLft relative">
                <div class="ap-common-title-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
                    <h2 class="ap-common-head">Latest Videos</h2>
                    <a href="javascript:;" class="ap-viewall-click">View All</a>
                </div>
                <div class="vn-video-inner col-100 floatLft flexDisplay justifySpace alignStart flexWrap">
                   
                    @if($teamoverview['latestVideos'])
        @foreach($teamoverview['latestVideos'] as $list)
        <div class="ap-common-slide">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{$list['imageUrl'] ? $list['imageUrl'] : asset('assets/images/vishal/video1.png')}}" alt="">
                                <a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span> @php
                                        $date_time = explode('T:', $list['date']);
                                        $date = date('l j F, Y', strtotime($date_time[0]));
                                        echo $date;
                                    @endphp</span>
                                    <span><img src="{{asset('assets/images/Exclude.png')}}" alt="">{{$list['views']}}</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">{{$list['title']}}</h3>
                            </div>
                            <div class="ap-time-video absolute">@php echo date("i:s", $list['duration']); @endphp</div>
                        </div>
                    </div>

        @endforeach
    @else
        <h1>No News Found </h1>
    @endif


                    <!-- <div class="ap-common-slide">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/vishal/video2.png')}}" alt="">
                                <a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span><img src="{{asset('assets/images/Exclude.png')}}" alt="">10,000</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">M28: RR vs SRH – Match<br>Highlights</h3>
                            </div>
                            <div class="ap-time-video absolute">02:38</div>
                        </div>
                    </div>
                    <div class="ap-common-slide">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/vishal/video3.png')}}" alt="">
                                <a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span><img src="{{asset('assets/images/Exclude.png')}}" alt="">10,000</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">M27: MI vs CSK – Match<br>Highlights</h3>
                            </div>
                            <div class="ap-time-video absolute">02:38</div>
                        </div>
                    </div>
                    <div class="ap-common-slide">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/vishal/video1.png')}}" alt="">
                                <a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span><img src="{{asset('assets/images/Exclude.png')}}" alt="">10,000</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">M29: PBKS vs DC – Match<br>Highlights</h3>
                            </div>
                            <div class="ap-time-video absolute">02:38</div>
                        </div>
                    </div>
                    <div class="ap-common-slide">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/vishal/video2.png')}}" alt="">
                                <a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span><img src="{{asset('assets/images/Exclude.png')}}" alt="">10,000</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">M28: RR vs SRH – Match<br>Highlights</h3>
                            </div>
                            <div class="ap-time-video absolute">02:38</div>
                        </div>
                    </div>
                    <div class="ap-common-slide">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{asset('assets/images/vishal/video3.png')}}" alt="">
                                <a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>6th Apr, 2021</span>
                                    <span><img src="{{asset('assets/images/Exclude.png')}}" alt="">10,000</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">M27: MI vs CSK – Match<br>Highlights</h3>
                            </div>
                            <div class="ap-time-video absolute">02:38</div>
                        </div>
                    </div> -->
                </div>
            </section>
        </div>

        <div class="vn-latest-news col-100 floatLft">
            <section class="ap-latest-videos ap-latest-news col-100 floatLft relative">
                <div class="ap-common-title-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
                    <h2 class="ap-common-head">Latest News</h2>
                    <a href="javascript:;" class="ap-viewall-click">View All</a>
                </div>
                <div class="ap-common-news-wrap col-100 floatLft flexDisplay justifySpace alignStart flexWrap">

                @if($teamoverview['latestNews'])
        @foreach($teamoverview['latestNews'] as $list)
        <div class="ap-common-news">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{$list['imageUrl'] ? $list['imageUrl'] : asset('assets/images/news-1.jpg')}}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>
                                    @php
                                        $date_time = explode('T:', $list['date']);
                                        $date = date('l j F, Y', strtotime($date_time[0]));
                                        echo $date;
                                    @endphp</span>
                                    <span class="ap-green-text">{{$list['author']}}</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">{{$list['title']}}</h3>
                            </div>
                            
                        </div>
        
                    </div>

        @endforeach
    @else
        <h1>No News Found </h1>
    @endif
                    <!-- <div class="ap-common-news">
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
                    <div class="ap-common-news">
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
        
                    </div> -->
                </div>
            </section>
        </div>
    </div>

    <!-- <section class="ap-sponsers-desk-wrp col-100 floatLft textCenter">
        <div class="ap-vivo-wrp">
            <div class="ap-vivo-title">TITLE SPONSOR</div>
            <div class="ap-vivo-img"><img src="{{asset('assets/images/Vivo-Sample-3.webp" alt=""></div>
        </div>
        <div class="ap-all-sponsors flexDisplay justifySpace alignCenter flexWrap">
            <div class="ap-hot-star flexDisplay justifySpace">
                <div class="ap-logo-wrp-spons">
                    <div class="ap-vivo-title">OFFIAL BRO</div>
                </div>
            </div>
        </div>
    </section> -->

    @include('layouts.footer')
