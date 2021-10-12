
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
            <div class="np-mostrunsTable col-100 floatLft ">
              <div class="np-battingtable__title col-100 floatLft flexDisplay justifySpace alignCenter">
                <div class="np-battingtable__mostrun col-100 floatLft">
                  Most Runs
                </div>
                <div class="np-battingtable__filter col-100 floatLft textRight flexDisplay justifyEnd alignCenter">
                  Filter
                  <img class="np-filter" src="{{asset('assets/images/nikhil/np-filter.png')}}" alt="">
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

                        <div class="ap-team-wrp flexDisplay justifySpace alignCenter">
                          <h3 class="np-team-name">Shikhar Dhawan</h3>
                          <div class="np-team-ico"><img src="{{asset('assets/images/nikhil/np-shikharTable.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/CSK-logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Mi-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/KKR-Logo.png')}}" alt=""></div>
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
                          <div class="np-ico"><img src="{{asset('assets/images/nikhil/Sunrisers-Logo.png')}}" alt=""></div>
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
  </main>


    @include('layouts.footer')