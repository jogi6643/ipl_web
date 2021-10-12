@extends('layouts.main')    
@section('content')
    <div class="vn-teamOverviewWrap col-100 floatLft">
    
    <div class="ih-pt-bann">
        <img src="{{asset('assets/images/ishwar/ih-pt-bann.png')}}">
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
 <div class="ih-points-table-sec">
        <div class="ih-pt-bg">

            <div class="ih-pt-wm-btn">
                <div class="ih-pt-wm-in">
                    <div class="ih-pt-w">
                        <ul>
                            <li class="teamGender" data-id="m"><a href="javascript:void(0);" class="ih-pt-act" >Men</a></li>
                            <li class="teamGender" data-id="w"><a href="javascript:void(0);">Women</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="ih-pt-tab-bg">
           <div class="ih-titel">
                <div class="ih-t-left">
                    <h2>Points Table</h2>
                </div>
                <div class="ih-t-right vn-sheduleFilter ">
                    <h3>Filter</h3>
                    <a href="javascript:void(0);"><img src="{{asset('assets/images/ishwar/ih-teams-squad-filter-icon.png')}}" alt=""></a>
                </div>
           </div>

           <div class="ih-pcard-sec">
                <div class="ih-pcard-wrap">
                    <table width="100%" class="ih-td-tab">
                        <tr class="ih-pt-tbl" style="display:revert">
                          <th style="text-align: left;">Team</th>
                          <th>Pld</th>
                          <th>Won</th>
                          <th>Lost</th>
                          <th>Tied</th>
                          <th>N/R</th>
                          <th>Net RR</th>
                          <th>For</th>
                          <th>Against</th>
                          <th>Pts</th>
                          <th>Form</th>
                        </tr>

                   <tbody id="pointsdata">
                       
                    </tbody>
                        <!-- <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-csk.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">CSK</h2>
                               </div>
                            </td>
                            <td>7</td>
                            <td>5</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>+1.263</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-rcb.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">RCB</h2>
                               </div>
                            </td>
                            <td>7</td>
                            <td>5</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-0.171</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-mi.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">MI</h2>
                               </div>
                            </td>
                            <td>7</td>
                            <td>4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                            <td>+0.547</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-rr.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">RR</h2>
                               </div>
                            </td>
                            <td>7</td>
                            <td>3</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-0.547</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-pbks.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">PBKS</h2>
                               </div>
                            </td>
                            <td>8</td>
                            <td>3</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-0.547</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-kkr.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">KKR</h2>
                               </div>
                            </td>
                            <td>7</td>
                            <td>2</td>
                            <td>5</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-0.547</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-srh.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">SRH</h2>
                               </div>
                            </td>
                            <td>7</td>
                            <td>1</td>
                            <td>6</td>
                            <td>0</td>
                            <td>0</td>
                            <td>-0.547</td>
                            <td>1,285/134.1</td>
                            <td>1,285/134.1</td>
                            <td>12</td>
                            <td>
                              <div class="ih-pt-fb">
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-r">L</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                              </div>
                            </td>
                        </tr> -->
                        
                      </table>

                    <div class="ih-view">
                        <a href="#">view all</a>
                    </div>
                </div>
           </div>

            </div>


        </div>

    </div>
    <div class="filter" style="display:none">
        <div class="filter-box">
            <div class="head"><h3>Filters</h3> <div class="close"><img src="{{asset('assets/images/close-sign.svg')}}" alt=""></div> </div>
            <!-- <div class="filters">
                <h3>Teams</h3>
                <ul class="filter-list">
                    <li> 
                        <input type="radio" id="ch" name="team" value="HTML"> 
                        <label for="ch">Chennai Super KIngs</label>
                    </li>
                    <li> 
                        <input type="radio" id="dl" name="team" value="HTML"> 
                        <label for="dl">Delhi Capitals</label>
                    </li>
                    <li> 
                        <input type="radio" id="ra" name="team" value="HTML"> 
                        <label for="ra">Rajasthan Royals</label>
                    </li>
                    <li> 
                        <input type="radio" id="pu" name="team" value="HTML"> 
                        <label for="pu">Punjab Kings</label>
                    </li>
                    <li> 
                        <input type="radio" id="mu" name="team" value="HTML"> 
                        <label for="mu">Mumbai Indians</label>
                    </li>
                    <li> 
                        <input type="radio" id="su" name="team" value="HTML"> 
                        <label for="su">Sunrisers Hyderabad</label>
                    </li>
                </ul>
            </div>
            <div class="filters">
                <h3>Venues</h3>
                <ul class="filter-list">
                    <li> 
                        <input type="radio" id="delhi" name="venue" value="HTML"> 
                        <label for="delhi">Delhi</label>
                    </li>
                    <li> 
                        <input type="radio" id="mumbai" name="venue" value="HTML"> 
                        <label for="mumbai">Mumbai</label>
                    </li>
                </ul>
            </div> -->
            <div class="filters">
                <h3>Season</h3>
                <ul class="filter-list">
                    <li> 
                        <input type="radio" id="2021" name="venue" value="HTML"> 
                        <label for="2021">2021</label>
                    </li>
                    <li> 
                        <input type="radio" id="2020" name="venue" value="HTML"> 
                        <label for="2020">2020</label>
                    </li>
                    <li> 
                        <input type="radio" id="2019" name="venue" value="HTML"> 
                        <label for="2019">2019</label>
                    </li>
                    <li> 
                        <input type="radio" id="2018" name="venue" value="HTML"> 
                        <label for="2018">2018</label>
                    </li>
                    <li> 
                        <input type="radio" id="2017" name="venue" value="HTML"> 
                        <label for="2017">2017</label>
                    </li>
                    <li> 
                        <input type="radio" id="2016" name="venue" value="HTML"> 
                        <label for="2016">2016</label>
                    </li>
                    <li> 
                        <input type="radio" id="2015" name="venue" value="HTML"> 
                        <label for="2015">2015</label>
                    </li>
                    <li> 
                        <input type="radio" id="2014" name="venue" value="HTML"> 
                        <label for="2014">2014</label>
                    </li>
                    <li> 
                        <input type="radio" id="2013" name="venue" value="HTML"> 
                        <label for="2013">2013</label>
                    </li>
                    <li> 
                        <input type="radio" id="2012" name="venue" value="HTML"> 
                        <label for="2012">2012</label>
                    </li>
                    <li> 
                        <input type="radio" id="2011" name="venue" value="HTML"> 
                        <label for="2011">2011</label>
                    </li>
                    <li> 
                        <input type="radio" id="2010" name="venue" value="HTML"> 
                        <label for="2010">2010</label>
                    </li>
                                        <li> 
                        <input type="radio" id="2009" name="venue" value="HTML"> 
                        <label for="2009">2009</label>
                    </li>
                                        <li> 
                        <input type="radio" id="2008" name="venue" value="HTML"> 
                        <label for="2008">2008</label>
                    </li>
                                        <li> 
                        <input type="radio" id="2007" name="venue" value="HTML"> 
                        <label for="2007">2007</label>
                    </li>
                </ul>
            </div>

        </div>    
    </div>   
    <!-- <div class="ih-pt-tbl">
    <section class="ap-banner-parent col-100 floatLft relative">
        <div class="ap-inner-banner-wrp col-100 floatLft relative flexDisplay justifySpace alignStart">
            
            <div class="ap-stat-table">
                <div class="ap-tabs-wrp col-100 floatLft flexDisplay justifySpace">
                    <a href="javascript:;" class="ap-common-tab ap-schedule-click active">Men</a>
                    <a href="javascript:;" class="ap-common-tab ap-standings-click">Women</a>
                </div>
                <div class="ap-tab-content col-100 floatLft">
                    <div class="ih-pt-mo-t">
                        <div class="ih-titel">
                            <div class="ih-t-left">
                                <h2>Points Table</h2>
                            </div>
                            <div class="ih-t-right">
                                <h3>Filter</h3>
                                <a href="#"><img src="{{asset('assets/images/ishwar/ih-teams-squad-filter-icon.png')}}" alt=""></a>
                            </div>
                       </div>
                    </div>
                    <table class="ap-stat-innertable" width="100%" cellpadding="0" cellspacing="0">
                        <tr class="ap-bg-wht">
                            <td width="18%">
                                <div class="ap-team-wrp flexDisplay alignCenter">
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/DCLogo.png')}}" alt=""></div>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-csk.png')}}" alt=""></div>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-mi.png')}}" alt=""></div>
                                    <h3 class="ap-team-name">MI</h3>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-rcb.png')}}" alt=""></div>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-pbks.png')}}" alt=""></div>
                                    <h3 class="ap-team-name">PBKS</h3>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-kkr.png')}}" alt=""></div>
                                    <h3 class="ap-team-name">KKR</h3>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-srh.png')}}" alt=""></div>
                                    <h3 class="ap-team-name">SRH</h3>
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
                                    <div class="ap-team-ico"><img src="{{asset('assets/images/ishwar/ih-pt-bann-rr.png')}}" alt=""></div>
                                    <h3 class="ap-team-name">RR</h3>
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
            </div>
        </div>
    </section>
    </div> -->
    <script src="{{ asset('assets/js/points.js') }}" type="text/javascript"></script>

    
    @stop


