 @include('layouts.header')
 <section class="ap-banner-parent ap-schedule-parent col-100 floatLft relative">
     <div class="ap-inner-banner-wrp col-100 floatLft relative flexDisplay justifySpace alignStart ap-mt18">
         <div class="ap-team-schedule-parent">
             <div class="ap-team-count-down col-100 floatLft textCenter">
                 <h3 class="ap-match-place col-100 floatLft textCenter re">Match 30, Dubai International Cricket Stadium,
                     Dubai</h3>
             </div>
             <div class="ap-team-schedule-inner col-100 floatLft flexDisplay justifyCenter alignStart">
                 <div class="ap-teams-sched-battle textCenter">
                     <div class="ap-team-single-logo">
                         <div class="ap-team-logo-schedule"><img
                                 src="{{ asset('assets/images/ap-csk-logo-home.png') }}" alt=""></div>
                         <h2 class="ap-schedule-team-name">Chennai Super <br> Kings</h2>
                     </div>
                 </div>
                 <div class="ap-schedule-team-vs textCenter">
                     <h2 class="ap-vs-schedule-txt">VS</h2>
                 </div>
                 <div class="ap-teams-sched-battle textCenter">
                     <div class="ap-team-single-logo">
                         <div class="ap-team-logo-schedule"><img
                                 src="{{ asset('assets/images/ap-mi-logo-home.png') }}" alt=""></div>
                         <h2 class="ap-schedule-team-name">Mumbai <br> Indians</h2>
                     </div>
                 </div>
             </div>
             <div class="ap-schedule-counter col-100 floatLft textCenter flexDisplay justifyCenter">
                 <div id="flipdown" class="flipdown"></div>
             </div>
             <div class="ap-schedule-refree col-100 floatLft flexDisplay justifySpace flexWrap">
                 <h3 class="ap-schedule-ref-inner"><span>Umpires :</span>K Anantha Padmanabhan, o Nandan, Chris Gaffany,
                     K Srinivasan</h3>
                 <h3 class="ap-schedule-ref-inner"><span>Referee :</span>Javagal Srinath</h3>
             </div>
         </div>
         <div class="ap-stat-table">
             <div class="ap-tabs-wrp col-100 floatLft flexDisplay justifySpace">
                 <a href="javascript:;" class="ap-common-tab ap-schedule-click active">Schedule</a>
                 <a href="javascript:;" class="ap-common-tab ap-standings-click">Standings</a>
             </div>
             <div class="ap-tab-content col-100 floatLft">
                 <table class="ap-stat-innertable" width="100%" cellpadding="0" cellspacing="0">
                     <tr>
                         <th width="15%">TEAM</th>
                         <th width="8%">PLD</th>
                         <th width="15%">NET RR</th>
                         <th width="8%">PTS</th>
                         <th width="25%">FORM</th>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/DCLogo.png') }}"
                                         alt="">
                                 </div>
                                 <h3 class="ap-team-name">DC</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/CSKloago.png') }}"
                                         alt=""></div>
                                 <h3 class="ap-team-name">CSK</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-red">L</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/DCLogo.png') }}"
                                         alt="">
                                 </div>
                                 <h3 class="ap-team-name">DC</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/RCBLogo-home.png') }}"
                                         alt=""></div>
                                 <h3 class="ap-team-name">RCB</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-red">L</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/DCLogo.png') }}"
                                         alt="">
                                 </div>
                                 <h3 class="ap-team-name">DC</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/RCBLogo-home.png') }}"
                                         alt=""></div>
                                 <h3 class="ap-team-name">RCB</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-red">L</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/DCLogo.png') }}"
                                         alt="">
                                 </div>
                                 <h3 class="ap-team-name">DC</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                     <tr class="ap-no">
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                     </tr>
                     <tr class="ap-bg-wht">
                         <td width="18%">
                             <div class="ap-team-wrp flexDisplay alignCenter">
                                 <div class="ap-team-ico"><img src="{{ asset('assets/images/RCBLogo-home.png') }}"
                                         alt=""></div>
                                 <h3 class="ap-team-name">RCB</h3>
                             </div>
                         </td>
                         <td>
                             <h3 class="ap-team-name">8</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">+0.547</h3>
                         </td>
                         <td>
                             <h3 class="ap-team-name">12</h3>
                         </td>
                         <td>
                             <div class="ap-wkt-wrp">
                                 <span class="ap-green">W</span>
                                 <span class="ap-red">L</span>
                                 <span class="ap-green">W</span>
                             </div>
                         </td>
                     </tr>
                 </table>
             </div>
             <div class="ap-tabs-wrp col-100 floatLft flexDisplay justifySpace">
                 <a href="javascript:;" class="ap-common-tab ap-schedule-click ">View Full Table</a>
                 <a href="javascript:;" class="ap-common-tab ap-standings-click active"> <i
                         class="fa fa-twitter"></i> Tweet</a>
             </div>
         </div>
     </div>
 </section>

 <section class="ap-playing-schedule-teams col-100 floatLft flexDisplay justifySpace alignStart flexWrap">
     <div class="ap-sched-mob-tab col-100 floatLft">
         <a href="javascript:;" class="common-mob-tab-sched active" rel="ap-team-1">Teams</a>
         <a href="javascript:;" class="common-mob-tab-sched" rel="ap-team-2">Playing XI Vote</a>
     </div>
     <div class="ap-team-schedule-tab-wrp ap-team-tab-common active" id="ap-team-1">
         <h2 class="ap-common-head">Team</h2>
         <div class="ap-sched-tab-inner col-100 floatLft">
             <div class="ap-outer-tb-wrp col-100 floatLft flexDisplay alignCenter justifySpace ap-mb40">
                 <a href="javascript:;" class="ap-inner-tb-click ap-active-team">{{$team_schedule['data'][0]['matchInfo']['teams'][0]['team']['fullName']}}</a>
                 <a href="javascript:;" class="ap-inner-tb-click">{{$team_schedule['data'][0]['matchInfo']['teams'][1]['team']['fullName']}}</a>
             </div>
             <ul class="ap-schedule-team-list col-100 floatLft flexDisplay justifySpace flexWrap">
                 @foreach ($team_schedule['data'][0]['matchInfo']['teams'][1]['players'] as $key => $value)
                     @if ($team_schedule['data'][0]['matchInfo']['teams'][1]['wicketKeeper']['fullName'] == $value['fullName'] && $team_schedule['data'][0]['matchInfo']['teams'][1]['captain']['fullName'] == $team_schedule['data'][0]['matchInfo']['teams'][1]['wicketKeeper']['fullName'])
                         <li>
                             <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                                 <div class="ap-player-pic-name">
                                     <div class="ap-player-pic-schd inlineBlk"><img
                                             src="{{ asset('assets/images/amit-assets/ap-schedule-1.png') }}" alt="">
                                     </div>
                                     <span class="ap-player-name-schd inlineBlk">{{$value['fullName']}}</span>
                                 </div>
                                 <div class="ap-player-designat"><span>Wk</span> Captain</div>
                             </div>
                         </li>
                     @elseif($team_schedule['data'][0]['matchInfo']['teams'][1]['captain']['fullName']==$value['fullName'])
                       <li>
                             <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                                 <div class="ap-player-pic-name">
                                     <div class="ap-player-pic-schd inlineBlk"><img
                                             src="{{ asset('assets/images/amit-assets/ap-schedule-1.png') }}" alt="">
                                     </div>
                                     <span class="ap-player-name-schd inlineBlk">{{$value['fullName']}}</span>
                                 </div>
                                 <div class="ap-player-designat"><span></span> Captain</div>
                             </div>
                         </li>
                     @else
                         <li>
                             <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                                 <div class="ap-player-pic-name">
                                     <div class="ap-player-pic-schd inlineBlk"><img
                                             src="{{ asset('assets/images/amit-assets/ap-schedule-13.png') }}"
                                             alt="">
                                     </div>
                                     <span class="ap-player-name-schd inlineBlk">{{ $value['fullName'] }}</span>
                                 </div>
                             </div>
                         </li>
                     @endif

                 @endforeach


                 {{-- <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-13.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Ravindra Jadeja</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-2.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Ambati Rayudu</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-14.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Robin Uthappa</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-3.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">KM Asif</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-15.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Ruturaj Gaikwad</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-4.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Dwayne Bravo</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-16.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Sam Curran</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-5.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Deepak Chahar</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-17.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Shardul Thakur</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-6.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Faf Du Plesis</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-18.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Suresh Raina</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-7.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Imran Tahir</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-19.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Moen Ali</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-8.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Narayan jagadessan</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-18.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Krishnappa Gowtham</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-9.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Karn Sharma</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-19.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Cheteshwar Pujara</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-10.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Lungi Ngidi</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-20.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Harishankar Reddy</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-11.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Mitchell Santner</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-21.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">C Hari Nishaanth</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-12.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">R Sai Kishore</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-22.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Bhagat Varma</span>
                         </div>
                     </div>
                 </li>
                 <li>
                     <div class="ap-player-wrp-sched col-100 floatLft flexDisplay justifySpace alignCenter">
                         <div class="ap-player-pic-name">
                             <div class="ap-player-pic-schd inlineBlk"><img
                                     src="{{ asset('assets/images/amit-assets/ap-schedule-22.png') }}" alt=""></div>
                             <span class="ap-player-name-schd inlineBlk">Josh Hazlewood</span>
                         </div>
                     </div>
                 </li> --}}
             </ul>
         </div>
     </div>
     <div class="ap-schedule-vote-wrp ap-team-tab-common" id="ap-team-2">
         <h2 class="ap-common-head">Playing XI Vote</h2>
         <div class="ap-sched-vote-inner col-100 floatLft ap-mb40">
             <div class="ap-outer-tb-wrp col-100 floatLft flexDisplay alignCenter justifySpace">
                 <a href="javascript:;" class="ap-inner-tb-click ">CSK</a>
                 <a href="javascript:;" class="ap-inner-tb-click ap-active-team">MI</a>
             </div>
             <h3 class="ap-select-player">Select Upto 11 Players</h3>
             <ul class="ap-schedule-team-list col-100 floatLft flexDisplay justifySpace flexWrap">
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-1">
                         <label for="player-1">Player 1</label>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-2">
                         <label for="player-2">Player-2</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-3">
                         <label for="player-3">Player 3</label>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-4">
                         <label for="player-4">Player-4</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-5">
                         <label for="player-5">Player 5</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-6">
                         <label for="player-6">Player-6</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-7">
                         <label for="player-7">Player 7</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-8">
                         <label for="player-8">Player-8</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-9">
                         <label for="player-9">Player 9</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-10">
                         <label for="player-10">Player-10</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-11">
                         <label for="player-11">Player 11</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-12">
                         <label for="player-12">Player-12</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-13">
                         <label for="player-13">Player 13</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-14">
                         <label for="player-14">Player-14</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-15">
                         <label for="player-15">Player 15</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-16">
                         <label for="player-16">Player-16</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-17">
                         <label for="player-17">Player 17</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-18">
                         <label for="player-18">Player-18</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-19">
                         <label for="player-19">Player 19</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-20">
                         <label for="player-20">Player-20</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-21">
                         <label for="player-21">Player 21</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-22">
                         <label for="player-22">Player-22</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-23">
                         <label for="player-23">Player 23</label>

                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-24">
                         <label for="player-24">Player-24</label>
                         <span class="absolute"><img
                                 src="{{ asset('assets/images/amit-assets/ap-plane-orange-ico.png') }}"
                                 alt=""></span>
                     </div>
                 </li>
                 <li>
                     <div class="ap-checkWrp col-100 floatLft relative">
                         <input type="checkbox" id="player-25">
                         <label for="player-25">Player-25</label>

                     </div>
                 </li>
             </ul>
             <h3 class="ap-select-player ap-grey">0 of 11 Selected</h3>
             <div class="ap-submit-selected col-100 floatLft textCenter">
                 <button class="ap-submit-click">Submit</button>
             </div>
         </div>

         <h2 class="ap-common-head">Match Stream</h2>
         <div class="ap-sched-vote-inner col-100 floatLft">
             <ul class="ap-schedule-team-list ap-match-stream col-100 floatLft">
                 <li class="floatLft">
                     <div class="ap-msg-ico"><img
                             src="{{ asset('assets/images/amit-assets/ap-message-sched-ico.png') }}" alt=""></div>
                     <span class="textLeft ap-comment">Match starts at 19:30 IST (14:00 GMT)</span>
                     <span class="textRight">16:06</span>
                 </li>
                 <li class="floatLft">
                     <div class="ap-msg-ico"><img
                             src="{{ asset('assets/images/amit-assets/ap-message-sched-ico.png') }}" alt=""></div>
                     <span class="textLeft ap-comment">Hello and welcome to Match 30 of the
                         2021 VIVO IPL between Chennai Super Kings
                         and Mumbai Indians</span>
                     <span class="textRight">16:06</span>
                 </li>
             </ul>
             <div class="ap-read-more-wrp col-100 floatLft textCenter">
                 <a href="javascript:" class="ap-read-more-comment inlineBlk">Read More</a>
             </div>
         </div>

     </div>
 </section>




 @include('layouts.footer')
