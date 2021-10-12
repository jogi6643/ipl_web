@include('team.teams_header')
        @if($teamlist['data'])
        @foreach($teamlist['data'] as $list)
        <div class="vn-sheduleWrap col-100 floatLft">
            <div class="vn-archiveWrap col-100 floatLft">
                <div class="vn-archiveInner">
                    <ul>
                        <li>
                            <div class="vn-IplLogo"><img src="{{asset('assets/images/vishal/logo-ipl.png')}}" alt=""> <span>{{$list['year']}}</span></div>
                            <div class="vn-archiveDet">
                               <div class="vn-archiveDetInr">
                                   <div class="vn-position">
                                        <p>Position :</p> 
                                        <span>7</span>
                                   </div> 
                                   <div class="vn-scoreDiv">
                                       <span>Top Scorer :</span>
                                        <span>{{$list['TopRunScorer']['totalRuns']}}</span>
                                        <span>{{$list['TopRunScorer']['player_detail'][0]['fullName']}}</span>
                                   </div>
                                   <div class="vn-scoreDiv">
                                        <span>Most Wickets :</span>
                                        <span>{{$list['TopWktTaker']['totalWikcets']}}</span>
                                        <span>{{$list['TopWktTaker']['player_detail'][0]['fullName']}}</span>
                                    </div>
                                    <div class="vn-watchVid">
                                        <a href="{{url('teams-archive-full-archive')}}/{{$list['year']}}/{{$list['team_id']}}">Full Archive</a>
                                    </div>
                               </div>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="vn-IplLogo"><img src="{{asset('assets/images/vishal/logo-ipl.png')}}" alt=""> <span>2020</span></div>
                            <div class="vn-archiveDet">
                               <div class="vn-archiveDetInr">
                                   <div class="vn-position">
                                        <p>Position :</p> 
                                        <span>Runner up</span>
                                   </div> 
                                   <div class="vn-scoreDiv">
                                       <span>Top Scorer :</span>
                                       <span>500</span>
                                       <span>Faf Du Plesis</span>
                                   </div>
                                   <div class="vn-scoreDiv">
                                        <span>Most Wickets :</span>
                                        <span>26</span>
                                        <span>Imran Tahir</span>
                                    </div>
                                    <div class="vn-watchVid">
                                        <a href="{{url('teams_archive_full_archive')}}">Full Archive</a>
                                    </div>
                               </div>
                            </div>
                        </li>
                        <li>
                            <div class="vn-IplLogo"><img src="{{asset('assets/images/vishal/logo-ipl.png')}}" alt=""> <span>2020</span></div>
                            <div class="vn-archiveDet">
                               <div class="vn-archiveDetInr">
                                   <div class="vn-position">
                                        <img src="{{asset('assets/images/vishal/ico-champion.png')}}" alt="">
                                   </div> 
                                   <div class="vn-scoreDiv">
                                       <span>Top Scorer :</span>
                                       <span>500</span>
                                       <span>Faf Du Plesis</span>
                                   </div>
                                   <div class="vn-scoreDiv">
                                        <span>Most Wickets :</span>
                                        <span>26</span>
                                        <span>Imran Tahir</span>
                                    </div>
                                    <div class="vn-watchVid">
                                        <a href="{{url('teams_archive_full_archive')}}">Full Archive</a>
                                    </div>
                               </div>
                            </div>
                        </li>
                        <li>
                            <div class="vn-IplLogo"><img src="{{asset('assets/images/vishal/logo-ipl.png')}}" alt=""> <span>2020</span></div>
                            <div class="vn-archiveDet">
                               <div class="vn-archiveDetInr">
                                   <div class="vn-position">
                                        <p>Position :</p> 
                                        <span>7</span>
                                   </div> 
                                   <div class="vn-scoreDiv">
                                       <span>Top Scorer :</span>
                                       <span>500</span>
                                       <span>Faf Du Plesis</span>
                                   </div>
                                   <div class="vn-scoreDiv">
                                        <span>Most Wickets :</span>
                                        <span>26</span>
                                        <span>Imran Tahir</span>
                                    </div>
                                    <div class="vn-watchVid">
                                        <a href="{{url('teams_archive_full_archive')}}">Full Archive</a>
                                    </div>
                               </div>
                            </div>
                        </li>
                        <li>
                            <div class="vn-IplLogo"><img src="{{asset('assets/images/vishal/logo-ipl.png')}}" alt=""> <span>2020</span></div>
                            <div class="vn-archiveDet">
                               <div class="vn-archiveDetInr">
                                   <div class="vn-position">
                                        <p>Position :</p> 
                                        <span>Runner up</span>
                                   </div> 
                                   <div class="vn-scoreDiv">
                                       <span>Top Scorer :</span>
                                       <span>500</span>
                                       <span>Faf Du Plesis</span>
                                   </div>
                                   <div class="vn-scoreDiv">
                                        <span>Most Wickets :</span>
                                        <span>26</span>
                                        <span>Imran Tahir</span>
                                    </div>
                                    <div class="vn-watchVid">
                                        <a href="{{url('teams_archive_full_archive')}}">Full Archive</a>
                                    </div>
                               </div>
                            </div>
                        </li>
                        <li>
                            <div class="vn-IplLogo"><img src="{{asset('assets/images/vishal/logo-ipl.png')}}" alt=""> <span>2020</span></div>
                            <div class="vn-archiveDet">
                               <div class="vn-archiveDetInr">
                                   <div class="vn-position">
                                        <img src="{{asset('assets/images/vishal/ico-champion.png')}}" alt="">
                                   </div> 
                                   <div class="vn-scoreDiv">
                                       <span>Top Scorer :</span>
                                       <span>500</span>
                                       <span>Faf Du Plesis</span>
                                   </div>
                                   <div class="vn-scoreDiv">
                                        <span>Most Wickets :</span>
                                        <span>26</span>
                                        <span>Imran Tahir</span>
                                    </div>
                                    <div class="vn-watchVid">
                                        <a href="{{url('teams_archive_full_archive')}}">Full Archive</a>
                                    </div>
                               </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>


    @include('layouts.footer')


