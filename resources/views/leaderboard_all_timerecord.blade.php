
    @include('layouts.header')

  <main>
    <section class="np-leaderInnserSection ">
      <div class="np-leaderInnserSectionBg col-100 floatLft flexDisplay justifyCenter  textCenter">
        <div class="np-leaderInnserSectionWrp col-100 floatLft">
          <div class="np-recordTab col-100 floatLft">
            <div class="np-recordtabBg col-100 floatRgt flexDisplay justifyEnd alignCenter">
              <a class="np-recordtab__btn firstbtn  col-50" href="javascript:;">By Season Stats</a>
              <a class="np-recordtab__btn secondtbtn col-50" href="javascript:;">All Time Records</a>
            </div>
          </div>
          <div class="np-battingtable_contaner np-battingtable_content  col-100 floatLft flexDisplay justifyCenter ">
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
                  <!-- <a class="np-recordtab__btn batting col-50" href="javascript:;">Batting</a>
                    <a class="np-recordtab__btn bollowing col-50" href="javascript:;">Bowling</a> -->
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
            <div class="np-section col-100 floatLft">
              <h2 class="np-battingtable__title floatLft" style="padding-left: 40px">All Time Batting Leaders</h2>
              <div class="np-sectionWrp col-100 floatLft">
                <ul class=" np-card__list np-card__leaderbordinnerList col-100 floatLft flexDisplay justifySpace alignCenter flexWrap ">
                  <li>
                    <a href="{{url('leaderboard_inner')}}">
                      <div class="np-card  col-100 floatLft">
                        <div class="np-cardBg-Shikhar col-100 floatLft textCenter">
                          <div class="np-cardWrp-Shikhar col-100 floatLft">
                            <div class=" np-card__logo col-100 floatLft flexDisplay justifyCenter alignCenter ">
                              <img class="np-Shikhar-logo floatLft" src="{{asset('assets/images/np-ShikharImg.png')}}" alt="" />
                            </div>
                            <div class="np-card__stats col-100 floatLft textCenter">
                              <div class="np-card__statsBg-Shikhar col-100 floatLft">
                                <div class=" np-card__statsRuns col-100 floatLft textCenter ">
                                  <div class=" np-card__Runs col-100 floatLft flexDisplay justifyCenter alignCenter ">
                                    <div class="np-runs textCenter">
                                      <h3>380</h3>
                                      <h4>Runs</h4>
                                    </div>
                                    <span>
                                      <img src="{{asset('assets/images/line.png')}}" alt="" />
                                    </span>
                                    <div class="np-name textLeft">
                                      <h3>Shikhar Dhawan</h3>
                                      <h4>DC</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="np-sub col-100 floatLft">
                              <h4>UPSTOX MOST VALUABLE PLAYER</h4>
                            </div>
                            <div class="np-card__disc col-100 floatLft textCenter">
                              <div class="np-card__discBg-Shikhar col-100 floatLft">
                                <div class="np-card__discRuns textCenter">
                                  <div class="
                                        np-card__Runs
                                        col-100
                                        floatLft
                                        flexDisplay
                                        justifyCenter
                                        alignCenter
                                      ">
                                    <div class="np-runs textCenter">
                                      <h3>08</h3>
                                      <h4>Matches</h4>
                                    </div>
                                    <span>
                                      <img src="{{asset('assets/images/line.png')}}" alt="" />
                                    </span>
                                    <div class="np-runs textCenter">
                                      <h3>380</h3>
                                      <h4>Runs</h4>
                                    </div>
                                    <span>
                                      <img src="{{asset('assets/images/line.png')}}" alt="" />
                                    </span>
                                    <div class="np-runs textCenter">
                                      <h3>0</h3>
                                      <h4>Wickets</h4>
                                    </div>
                                    <span>
                                      <img src="{{asset('assets/images/line.png')}}" alt="" />
                                    </span>
                                    <div class="np-runs textCenter">
                                      <h3>2008</h3>
                                      <h4>IPL Debut</h4>
                                    </div>
                                  </div>
                                </div>
                                <div class="np-btn col-100 floatLft">
                                  <a href="#" class="np-button-shikhar">
                                    View Full List
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('leaderboard_inner')}}">
                    <div class="np-card  col-100 floatLft">
                      <div class="np-cardBg-harshal col-100 floatLft textCenter">
                        <div class="np-cardWrp-harshal col-100 floatLft">
                          <div class="
                                np-card__logo
                                col-100
                                floatLft
                                flexDisplay
                                justifyCenter
                                alignCenter
                              ">
                            <img class="np-harshal-logo" src="{{asset('assets/images/NP-harshal_Patel.png')}}" alt="" />
                          </div>
                          <div class="np-card__stats col-100 floatLft textCenter">
                            <div class="np-card__statsBg-harshal col-100 floatLft">
                              <div class="
                                    np-card__statsRuns
                                    col-100
                                    floatLft
                                    textCenter
                                  ">
                                <div class="np-card__statsRunsWrp col-100 floatLft">
                                  <div class="
                                        np-card__Runs
                                        col-100
                                        floatLft
                                        flexDisplay
                                        justifyCenter
                                        alignCenter
                                      ">
                                    <div class="np-runs textCenter">
                                      <h3>17</h3>
                                      <h4>Wickets</h4>
                                    </div>
                                    <span>
                                      <img src="{{asset('assets/images/line.png')}}" alt="" />
                                    </span>
                                    <div class="np-name textLeft">
                                      <h3>Harshal Patel</h3>
                                      <h4>RCB</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="np-sub col-100 floatLft">
                            <h4>UPSTOX MOST VALUABLE PLAYER</h4>
                          </div>

                          <div class="np-card__disc col-100 floatLft textCenter">
                            <div class="np-card__discBg-harshal col-100 floatLft">
                              <div class="np-card__discRuns textCenter">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>07</h3>
                                    <h4>Matches</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>38</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>17</h3>
                                    <h4>Wickets</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>2012</h3>
                                    <h4>IPL Debut</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="np-btn col-100 floatLft">
                                <a href="javascript:;" class="np-button-harshal">
                                  View Full List
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('leaderboard_inner')}}">
                    <div class="np-card  col-100 floatLft">
                      <div class="np-cardBg-Jos col-100 floatLft textCenter">
                        <div class="np-cardWrp-Jos col-100 floatLft">
                          <div class="
                                np-card__logo
                                col-100
                                floatLft
                                flexDisplay
                                justifyCenter
                                alignCenter
                              ">
                            <img class="np-jos-logo" src="{{asset('assets/images/Np-Jobs.png')}}" alt="" />
                          </div>
                          <div class="np-card__stats col-100 floatLft textCenter">
                            <div class="np-card__statsBg-Jos col-100 floatLft">
                              <div class="
                                    np-card__statsRuns
                                    col-100
                                    floatLft
                                    textCenter
                                  ">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>380</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-name textLeft">
                                    <h3>Jos Buttler</h3>
                                    <h4>DC</h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="np-sub col-100 floatLft">
                            <h4>UPSTOX MOST VALUABLE PLAYER</h4>
                          </div>

                          <div class="np-card__disc col-100 floatLft textCenter">
                            <div class="np-card__discBg-Jos col-100 floatLft">
                              <div class="np-card__discRuns textCenter">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>08</h3>
                                    <h4>Matches</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>215</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>0</h3>
                                    <h4>Wickets</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>2016</h3>
                                    <h4>IPL Debut</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="np-btn col-100 floatLft">
                                <a href="javascript:;" class="np-button-jos">
                                  View Full List
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  </li>
                </ul>
              </div>
              <h2 class="np-battingtable__title floatLft" style="padding-left: 40px">All Time Bowling Leaders</h2>
              <div class="np-sectionWrp col-100 floatLft">
                <ul class=" np-card__list np-card__leaderbordinnerList col-100 floatLft flexDisplay justifySpace alignCenter flexWrap ">
                  <li>
                    <div class="np-card  col-100 floatLft">
                      <div class="np-cardBg-Shikhar col-100 floatLft textCenter">
                        <div class="np-cardWrp-Shikhar col-100 floatLft">
                          <div class=" np-card__logo col-100 floatLft flexDisplay justifyCenter alignCenter ">
                            <img class="np-Shikhar-logo floatLft" src="{{asset('assets/images/np-ShikharImg.png')}}" alt="" />
                          </div>
                          <div class="np-card__stats col-100 floatLft textCenter">
                            <div class="np-card__statsBg-Shikhar col-100 floatLft">
                              <div class=" np-card__statsRuns col-100 floatLft textCenter ">
                                <div class=" np-card__Runs col-100 floatLft flexDisplay justifyCenter alignCenter ">
                                  <div class="np-runs textCenter">
                                    <h3>380</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-name textLeft">
                                    <h3>Shikhar Dhawan</h3>
                                    <h4>DC</h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="np-sub col-100 floatLft">
                            <h4>UPSTOX MOST VALUABLE PLAYER</h4>
                          </div>
                          <div class="np-card__disc col-100 floatLft textCenter">
                            <div class="np-card__discBg-Shikhar col-100 floatLft">
                              <div class="np-card__discRuns textCenter">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>08</h3>
                                    <h4>Matches</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>380</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>0</h3>
                                    <h4>Wickets</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>2008</h3>
                                    <h4>IPL Debut</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="np-btn col-100 floatLft">
                                <a href="#" class="np-button-shikhar">
                                  View Full List
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="np-card  col-100 floatLft">
                      <div class="np-cardBg-harshal col-100 floatLft textCenter">
                        <div class="np-cardWrp-harshal col-100 floatLft">
                          <div class="
                                np-card__logo
                                col-100
                                floatLft
                                flexDisplay
                                justifyCenter
                                alignCenter
                              ">
                            <img class="np-harshal-logo" src="{{asset('assets/images/NP-harshal_Patel.png')}}" alt="" />
                          </div>
                          <div class="np-card__stats col-100 floatLft textCenter">
                            <div class="np-card__statsBg-harshal col-100 floatLft">
                              <div class="
                                    np-card__statsRuns
                                    col-100
                                    floatLft
                                    textCenter
                                  ">
                                <div class="np-card__statsRunsWrp col-100 floatLft">
                                  <div class="
                                        np-card__Runs
                                        col-100
                                        floatLft
                                        flexDisplay
                                        justifyCenter
                                        alignCenter
                                      ">
                                    <div class="np-runs textCenter">
                                      <h3>17</h3>
                                      <h4>Wickets</h4>
                                    </div>
                                    <span>
                                      <img src="{{asset('assets/images/line.png')}}" alt="" />
                                    </span>
                                    <div class="np-name textLeft">
                                      <h3>Harshal Patel</h3>
                                      <h4>RCB</h4>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="np-sub col-100 floatLft">
                            <h4>UPSTOX MOST VALUABLE PLAYER</h4>
                          </div>

                          <div class="np-card__disc col-100 floatLft textCenter">
                            <div class="np-card__discBg-harshal col-100 floatLft">
                              <div class="np-card__discRuns textCenter">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>07</h3>
                                    <h4>Matches</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>38</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>17</h3>
                                    <h4>Wickets</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>2012</h3>
                                    <h4>IPL Debut</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="np-btn col-100 floatLft">
                                <a href="javascript:;" class="np-button-harshal">
                                  View Full List
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="np-card  col-100 floatLft">
                      <div class="np-cardBg-Jos col-100 floatLft textCenter">
                        <div class="np-cardWrp-Jos col-100 floatLft">
                          <div class="
                                np-card__logo
                                col-100
                                floatLft
                                flexDisplay
                                justifyCenter
                                alignCenter
                              ">
                            <img class="np-jos-logo" src="{{asset('assets/images/Np-Jobs.png')}}" alt="" />
                          </div>
                          <div class="np-card__stats col-100 floatLft textCenter">
                            <div class="np-card__statsBg-Jos col-100 floatLft">
                              <div class="
                                    np-card__statsRuns
                                    col-100
                                    floatLft
                                    textCenter
                                  ">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>380</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-name textLeft">
                                    <h3>Jos Buttler</h3>
                                    <h4>DC</h4>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="np-sub col-100 floatLft">
                            <h4>UPSTOX MOST VALUABLE PLAYER</h4>
                          </div>

                          <div class="np-card__disc col-100 floatLft textCenter">
                            <div class="np-card__discBg-Jos col-100 floatLft">
                              <div class="np-card__discRuns textCenter">
                                <div class="
                                      np-card__Runs
                                      col-100
                                      floatLft
                                      flexDisplay
                                      justifyCenter
                                      alignCenter
                                    ">
                                  <div class="np-runs textCenter">
                                    <h3>08</h3>
                                    <h4>Matches</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>215</h3>
                                    <h4>Runs</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>0</h3>
                                    <h4>Wickets</h4>
                                  </div>
                                  <span>
                                    <img src="{{asset('assets/images/line.png')}}" alt="" />
                                  </span>
                                  <div class="np-runs textCenter">
                                    <h3>2016</h3>
                                    <h4>IPL Debut</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="np-btn col-100 floatLft">
                                <a href="javascript:;" class="np-button-jos">
                                  View Full List
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>

    @include('layouts.footer')
