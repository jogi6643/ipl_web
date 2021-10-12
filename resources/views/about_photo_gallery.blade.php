    
    @include('layouts.header')


    <div class="ih-apg-bann">
        <img src="{{asset('assets/images/ishwar/ih-apg-bann.png')}}">
        <div class="ih-apg-bann-in">
            
            <div class="ih-apg-tit">
                <h2>Photos</h2>
            </div>
        </div>
    </div>

   <section class="ap-common-bg-grey ih-apg-bg col-100 floatLft">
        <section class="ap-latest-videos ap-latest-news ap-no-bg-result col-100 floatLft relative">
        
            <div class="ap-results-photos-wrap col-100 floatLft flexDisplay justifyCenter alignStart flexWrap">
                @if($photolist['data'])
                @foreach($photolist['data'] as $list)
                    <div class="ap-photo-inner-wrp ih-apg-cart">
                        <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{isset($list['imageUrl'])? $list['imageUrl']:asset('assets/images/ap-match-photo-1.jpg')}}" alt=""></a>
                    
                        <div class="ih-apg-apsu">
                            <div class="ih-top-btn">
                                <div class="ih-top-btni">
                                <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                                </div>
                                <h2>120</h2>
                            </div>
                            
                            <div class="ih-apg-cont">
                                <h3>IPL 2021</h3>
                                <h2>Match 27 : MI VS CSK</h2>
                                <p>@php echo date('d M Y', strtotime($list['date'])); @endphp</p>
                            </div>
                        </div>
                    
                    
                    </div>
                @endforeach
                @else
                    <h1>No Data Found</h1>
                @endif
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-2.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-3.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-4.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-5.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-6.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-1.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-2.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-3.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-4.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-5.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-6.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-1.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-2.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-3.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-4.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-5.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-6.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-1.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-2.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-3.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-4.jpg')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-5.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
                <div class="ap-photo-inner-wrp ih-apg-cart">
                    <a href="#ap-photo-pop" class="ap-phto-click"><img src="{{asset('assets/images/ap-match-photo-6.png')}}" alt=""></a>
                    <div class="ih-apg-apsu">
                        <div class="ih-top-btn">
                            <div class="ih-top-btni">
                            <img src="{{asset('assets/images/ishwar/ih-apg-c.png')}}" alt="">
                            </div>
                            <h2>120</h2>
                        </div>
                        
                        <div class="ih-apg-cont">
                            <h3>IPL 2021</h3>
                            <h2>Match 27 : MI VS CSK</h2>
                            <p>01 May 2021</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ap-mob-view-all col-100 floatLft textCenter">
                <a href="javascript:;" class="ap-viewall-click">View All</a>
            </div>
        </section>
   </section>
    
    @include('layouts.footer')

