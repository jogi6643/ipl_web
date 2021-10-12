                        @if($PointTable)
                            @foreach($PointTable as $point)
                        <tr>
                            <td class="ih-t-color">
                               <div class="ih-pt-ic">
                                   <div class="ih-pt-img" style="width: 109px">
                                    <img src="{{isset($point['image'])? $point['image']:asset('assets/images/vishal/logo-dc.png')}}" alt="">
                                   </div>
                                   <h2 class="ih-pt-cont">{{isset($point['team'])? $point['team']: ""}}</h2>
                               </div>
                            </td>
                            <td>{{isset($point['pld'])? $point['pld']: "0"}}</td>
                            <td>{{isset($point['won'])? $point['won']: "0"}}</td>
                            <td>{{isset($point['lost'])? $point['lost']: "0"}}</td>
                            <td>{{isset($point['tied'])? $point['tied']: "0"}}</td>
                            <td>{{isset($point['n/r'])? $point['n/r']: "0"}}</td>
                            <td>{{isset($point['netrr'])? $point['netrr']: "0"}}</td>
                            <td>{{isset($point['for'])? $point['for']: "0/0"}}</td>
                            <td>{{isset($point['against'])? $point['against']: "0/0"}}</td>
                            <td>{{isset($point['pts'])? $point['pts']: "0/0"}}</td>
                            <td class="ih-pt-fb-w">
                              <div class="ih-pt-fb">
                                  @if($point['form'])
                                  @foreach($point['form'] as $ptn)
                                  @if($ptn=="W" ||$ptn=="w" )
                                  <span class="ih-pt-g">W</span>
                                  @elseif($ptn=="L" || $ptn=="l")
                                  <span class="ih-pt-r">L</span>
                                  @endif
                                  @endforeach
                                  <!-- <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span>
                                  <span class="ih-pt-g">W</span> -->
                                  @endif
                              </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <h1>No Data Found </h1>
                        @endif