@include('layouts.header')

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
                            <li><a href="#" class="ih-pt-act">Men</a></li>
                            <li><a href="#">Women</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="ih-pt-tab-bg">


           <div class="ih-titel relative">
                <div class="ih-t-left">
                    <h2>Points Table</h2>
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
                    <table width="100%" class="ih-td-tab">
                        <tr class="ih-pt-tbl">
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
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img">
                                    <img src="{{asset('assets/images/ishwar/ih-pt-bann-dc.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">DC</h2>
                               </div>
                            </td>
                            <td>8</td>
                            <td>6</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>+0.547</td>
                            <td>1,325/150.2</td>
                            <td>1,325/150.2</td>
                            <td>12</td>
                            <td class="ih-pt-fb-w">
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
                        </tr>

                      </table>

                    <div class="ih-view">
                        <a href="#">view all</a>
                    </div>
                </div>
           </div>

            </div>


        </div>

    </div>

    <div class="ih-pt-tbl">
    <section class="ap-banner-parent col-100 floatLft relative">
        <div class="ap-inner-banner-wrp col-100 floatLft relative flexDisplay justifySpace alignStart">

            <div class="ap-stat-table">
                <div class="ap-tabs-wrp col-100 floatLft flexDisplay justifySpace">
                    <a href="javascript:;" class="ap-common-tab ap-schedule-click active">Men</a>
                    <a href="javascript:;" class="ap-common-tab ap-standings-click">Women</a>
                </div>
                <div class="ap-tab-content col-100 floatLft">
                    <div class="ih-pt-mo-t">
                        <div class="ih-titel relative">
                            <div class="ih-t-left">
                                <h2>Points Table</h2>
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
    </div>


@include('layouts.footer')
