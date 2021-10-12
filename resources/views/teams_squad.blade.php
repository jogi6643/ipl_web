    
  
   @include('team.teams_header')


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
                    @foreach($teamssquad['players'] as $list)
                      <li class="ih-pcard1">
                      @if($teamssquad['captain']==$list['fullName'] )
                        <img src="{{asset('assets/images/ih-p1-absolute.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p1.png')}}" alt="">
                            
                            <div class="ih-p-name">
                                <h2>{{ $list['fullName'] }}</h2>
                            </div>
                          </div>
                          @elseif($teamssquad['wicketKeeper']['fullName']==$list['fullName'] )
                          <img src="{{asset('assets/images/ih-p1-absolute.png')}}" class="ih-p1-ab" alt="">
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p1.png')}}" alt="">
                            
                            <div class="ih-p-name">
                                <h2>{{ $list['fullName'] }}</h2>
                            </div>
                          </div>
                          @else
                          <div class="ih-p-img">
                            <img src="{{asset('assets/images/ih-teams-squad-p1.png')}}" alt="">
                            
                            <div class="ih-p-name">
                                <h2>{{ $list['fullName'] }}</h2>
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


