@include('layouts.header')

  <main>
    <section class="np-leaderInnserSection ">
      <div class="np-leaderInnserSectionBg col-100 floatLft flexDisplay justifyCenter  textCenter">
        <div class="np-leaderInnserSectionWrp col-100 floatLft">
          <div class="np-recordTab--title col-100 floatLft">
            <div class="np-recordtabBg col-100 floatRgt flexDisplay justifyEnd alignCenter">
              <a class="np-recordtab__btn firstbtn  col-50" href="javascript:;">By Season Stats</a>
              <a class="np-recordtab__btn secondtbtn col-50" href="javascript:;">All Time Records</a>
            </div>
          </div>
          <div class="np-battingtable_contaner col-100 floatLft flexDisplay justifyCenter ">
            <div class="np-leaderInnser__battingtable col-50 floatLft">
              <div class="np-battingtable__title col-100 floatLft">
                2021 Leaders
              </div>
              <div class="np-battingtableBg col-100 floatLft">
                  <div class="np-recordTab col-100 floatLft">
                    <div class="np-recordtabBg battingtablebg col-100 floatRgt flexDisplay justifyEnd alignCenter">
                      <a class="np-recordtab__btn batting col-50" href="javascript:;">Batting</a>
                      <a class="np-recordtab__btn bollowing col-50" href="javascript:;">Bowling</a>
                    </div>

                </div>
                <div class="np-battingtable__lists col-100 floatLft">
                  <a class="np-list col-100 floatLft textLeft" href="">Most Runs</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Runs (Over)</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Fours</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Fours (Innings)</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Sixes</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Sixes (Innings)</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Fifties</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Most Centuries</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Fastest Fifties</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Fastest Centuries</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Highest Scores</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Highest Scores (Innings)</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Best Batting Strike Rate</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Best Batting Average</a>
                  <a class="np-list col-100 floatLft textLeft" href="">Biggest Sixes</a>
                </div>
              </div>
            </div>
            <div class="np-mostrunsTable col-100 floatLft ">
              <div class="np-battingtable__title col-100 floatLft flexDisplay justifySpace alignCenter relative">
                <div class="np-battingtable__mostrun col-100 floatLft">
                  Most Runs
                </div>
                <div class="np-battingtable__filter col-100 floatLft textRight flexDisplay justifyEnd alignCenter relative">
                  Filter
                  <a class="np-filt" href="javascript:;" id="np-filt">
                  <img class="np-filter" src="{asset('assets/images/nikhil/np-filter.png')}}" alt=""></a>
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
                          Teams
                        </div>
                        <ul class="np-popup__term--list-title col-100 floatLft flexDisplay justifyStart alignCenter flexWrap ">
                          <li>
                            <input type="checkbox" name="checkbox1" id="chennai" value="chennai">
                            <label class="np-popup__term--btn " for="chennai"> <i class="fa fa-check" aria-hidden="true"></i>
                              Chennai Super Kings</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="delhi" value="delhi">
                            <label class="np-popup__term--btn " for="delhi"> <i class="fa fa-check" aria-hidden="true"></i>
                              Delhi Capitals</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="raj" value="raj">
                            <label class="np-popup__term--btn " for="raj"> <i class="fa fa-check" aria-hidden="true"></i>
                              Rajasthan Royals</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="punjab" value="punjab">
                            <label class="np-popup__term--btn " for="punjab"> <i class="fa fa-check" aria-hidden="true"></i>
                              Punjab Kings</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="mumbai" value="mumbai">
                            <label class="np-popup__term--btn " for="mumbai"> <i class="fa fa-check" aria-hidden="true"></i>
                            Mumbai Indians</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="sunrisers" value="sunrisers">
                            <label class="np-popup__term--btn " for="sunrisers"> <i class="fa fa-check" aria-hidden="true"></i>
                              Sunrisers Hyderabad</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="banglore" value="banglore">
                            <label class="np-popup__term--btn " for="banglore"> <i class="fa fa-check" aria-hidden="true"></i>
                              Royal Challengers Banglore</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="kolkata" value="kolkata">
                            <label class="np-popup__term--btn " for="kolkata"> <i class="fa fa-check" aria-hidden="true"></i>
                              Kolkata Knight Riders</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="all" value="all">
                            <label class="np-popup__term--btn " for="all"> <i class="fa fa-check" aria-hidden="true"></i>
                              All</label>
                          </li>


                        </ul>
                      </div>
                      <div class="np-popup__term--list col-100 floatLft  ">
                        <div class="np-popup__term--title">
                          Player
                        </div>
                        <ul class="np-popup__term--list-title col-100 floatLft flexDisplay justifyStart alignCenter flexWrap ">
                          <li>
                            <input type="checkbox" name="checkbox1" id="indian" value="indian">
                            <label class="np-popup__term--btn " for="indian"> <i class="fa fa-check" aria-hidden="true"></i>
                              Indian</label>
                          </li>
                          <li>
                            <input type="checkbox" name="checkbox1" id="overseas" value="overseas">
                            <label class="np-popup__term--btn " for="overseas"> <i class="fa fa-check" aria-hidden="true"></i>
                              Overseas</label>
                          </li>
                        </ul>
                      </div>
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
              <div class="np-mostrunsTableBg col-100 floatLft">
                <div class="np-mostrunsTableWrp col-100 floatLft">
                  <table class="np-mostruns_table" width="100%" cellpadding="0" cellspacing="0" border-collapse: collapse;>
                    <tr class="np-mostrunsTable__head">
                      <th width="6%">POS</th>
                      <th width="16%">Player</th>
                      <th width="6%">Mat</th>
                      <th width="6%">Inns</th>
                      <th width="6%">NO</th>
                      <th width="6%" class="np-tableruns">Runs</th>
                      <th width="6%">HS</th>
                      <th width="6%">Avg</th>
                      <th width="6%">BF</th>
                      <th width="6%">SR</th>
                      <th width="6%">100</th>
                      <th width="6%">50</th>
                      <th width="6%">4s</th>
                      <th width="6%">6s</th>
                    </tr>
                    <tr class="np-bg-org">
                      <td width="6%">
                        1
                      </td>
                      <td class="np-team--player" width="20%" >

                        <div class="ap-team-wrp flexDisplay justifySpace alignCenter col-100 floatLft" >
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                          <div class="np-team-ico"><img src="{asset('assets/images/nikhil/np-shikharTable.png')}}" alt=""></div>
                        </div>
                      </td>


                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        2
                      </td>

                      <td width="18%">
                        <div class="ap-team-wrp flexDisplay  alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        3
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        4
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        5
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        6
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        7
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        8
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        9
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        10
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        11
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        12
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        13
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        14
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        15
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        16
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        17
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                       18
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    <tr>
                      <td width="6%">
                        19
                      </td>

                      <td width="10%">
                        <div class="ap-team-wrp flexDisplay alignCenter">
                          <div class="np-ico"><img src="{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                        </div>
                      </td>

                      <td width="6%">
                        70
                      </td>
                      <td width="6%">
                        4669
                      </td>
                      <td width="6%">
                        84
                      </td>
                      <td width="6%" class="np-tableruns">
                        40.25
                      </td>
                      <td width="6%">
                        3,417
                      </td>
                      <td width="6%">
                        136.64
                      </td>
                      <td width="6%">
                        0
                      </td>
                      <td width="6%">
                        23
                      </td>
                      <td width="6%">
                        317
                      </td>
                      <td width="6%">
                        217
                      </td>
                      <td width="6%">
                        118
                      </td>
                      <td width="6%">
                        39
                      </td>
                    </tr>
                    </tr>
                  </table>
                  <div class="np-mostrunsTab__btn">
                    <a  href="">View All</a>
                  </div>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>


    </section>

    <section>

    </section>
  </main>

@include('layouts.footer')
