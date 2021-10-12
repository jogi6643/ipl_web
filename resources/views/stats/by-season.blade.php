@include('layouts.header')
<style type="text/css">
.active{
	background: #19398a;
    color: #fff !important;
}
</style>
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
									<a class="np-recordtab__btn batting col-50" href="javascript:void(0);">Batting</a>
									<a class="np-recordtab__btn bollowing col-50" href="javascript:void(0);">Bowling</a>
								</div>
								<!-- <a class="np-recordtab__btn batting col-50" href="javascript:;">Batting</a>
                    			<a class="np-recordtab__btn bollowing col-50" href="javascript:;">Bowling</a> -->
							</div>
							<div class="np-battingtable__lists col-100 floatLft">
								<a class="np-list col-100 floatLft textLeft {{ ($sort=='mostRuns') ? 'active' : ''}}" href="{{ route('statsBySeason', [$season, 'mostRuns']) }}">Most Runs</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Most Runs (Over)</a>
								<a class="np-list col-100 floatLft textLeft {{ ($sort=='most4s') ? 'active' : ''}}" href="{{ route('statsBySeason', [$season, 'most4s']) }}">Most Fours</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Most Fours (Innings)</a>
								<a class="np-list col-100 floatLft textLeft {{ ($sort=='most6s') ? 'active' : ''}}" href="{{ route('statsBySeason', [$season, 'most6s']) }}">Most Sixes</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Most Sixes (Innings)</a>
								<a class="np-list col-100 floatLft textLeft {{ ($sort=='most50s') ? 'active' : ''}}" href="{{ route('statsBySeason', [$season, 'most50s']) }}">Most Fifties</a>
								<a class="np-list col-100 floatLft textLeft {{ ($sort=='most100s') ? 'active' : ''}}" href="{{ route('statsBySeason', [$season, 'most100s']) }}">Most Centuries</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Fastest Fifties</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Fastest Centuries</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Highest Scores</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Highest Scores (Innings)</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Best Batting Strike Rate</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Best Batting Average</a>
								<a class="np-list col-100 floatLft textLeft" href="javascript:void(0);">Biggest Sixes</a>
							</div>
						</div>
					</div>
					<div class="np-mostrunsTable col-100 floatLft ">
						<div class="np-battingtable__title col-100 floatLft flexDisplay justifySpace alignCenter">
							<div class="np-battingtable__mostrun col-100 floatLft">
								Most Runs
							</div>
							<div class="np-battingtable__filter col-100 floatLft textRight flexDisplay justifyEnd alignCenter vn-sheduleFilter">
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
										<th width="6%" class="{{ ($sort=='mostRuns') ? 'np-tableruns' : ''}}">Runs</th>
										<th width="6%">HS</th>
										<th width="6%">Avg</th>
										<th width="6%">BF</th>
										<th width="6%">SR</th>
										<th width="6%" class="{{ ($sort=='most100s') ? 'np-tableruns' : ''}}">100</th>
										<th width="6%" class="{{ ($sort=='most50s') ? 'np-tableruns' : ''}}">50</th>
										<th width="6%" class="{{ ($sort=='most4s') ? 'np-tableruns' : ''}}">4s</th>
										<th width="6%" class="{{ ($sort=='most6s') ? 'np-tableruns' : ''}}">6s</th>
									</tr>
									@php
										$pos = 1; 
									@endphp
									@foreach($statsData as $stat)
										<tr class="{{ ($pos==1) ? 'np-bg-org' : '' }}">
											<td width="6%"> {{ $pos }} </td>
											<td width="10%">
												@if($pos==1)
												<div class="ap-team-wrp flexDisplay justifySpace alignCenter">
													<div class="np-team-ico"><img src="{{asset('assets/images/nikhil/np-shikharTable.png')}}" alt=""></div>
													<h3 class="np-team-name">{{ $stat['teams']['player_detail']['fullName'] }}</h3>
												</div>
												@else
												<div class="ap-team-wrp flexDisplay  alignCenter">
													@php 
														switch($stat['teams']['team_detail']['abbreviation']){
															case 'CSK': $img = asset('assets/images/nikhil/CSK-logo.png');
																		break;
															case 'MI': $img = asset('assets/images/nikhil/Mi-Logo.png');
																		break;
															case 'SRH': $img = asset('assets/images/nikhil/Sunrisers-Logo.png');
																		break;															
															case 'RR': $img = asset('assets/images/nikhil/Rajasthan-Logo.png');
																		break;
															case 'KKR': $img = asset('assets/images/nikhil/KKR-Logo.png');
																		break;
															case 'RCB': $img = asset('assets/images/nikhil/RCB-Logo.png');
																		break;
															case 'PBKS': $img = asset('assets/images/nikhil/Punjab-Logo.png');
																		break;
															case 'DC': $img = asset('assets/images/nikhil/Mi-Logo.png');
																		break;
															default: $img = asset('assets/images/nikhil/CSK-logo.png');
																		break;
														}
													@endphp
													<div class="np-ico"><img src="{{ $img }}" alt=""></div>
													<h3 class="np-team-name">{{ $stat['teams']['player_detail']['fullName'] }}</h3>
												</div>
												@endif
											</td>
											<td width="6%"> -- </td>
											<td width="6%"> -- </td>
											<td width="6%"> -- </td>
											<td width="6%" class="{{ ($sort=='mostRuns') ? 'np-tableruns' : ''}}">{{ $stat['mostRuns'] }}</td>
											<td width="6%"> -- </td>
											<td width="6%"> -- </td>
											<td width="6%"> -- </td>
											<td width="6%"> -- </td>
											<td width="6%" class="{{ ($sort=='most100s') ? 'np-tableruns' : ''}}">{{ $stat['most100s'] }}</td>
											<td width="6%" class="{{ ($sort=='most50s') ? 'np-tableruns' : ''}}">{{ $stat['most50s'] }}</td>
											<td width="6%" class="{{ ($sort=='most4s') ? 'np-tableruns' : ''}}">{{ $stat['most4s'] }}</td>
											<td width="6%" class="{{ ($sort=='most6s') ? 'np-tableruns' : ''}}">{{ $stat['most6s'] }}</td>
										</tr>
										@php
											$pos++;
										@endphp
									@endforeach
								</table>
								<!-- <div class="np-mostrunsTab__btn">
									<a href="">View All</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<div class="filter" style="display:none">
	<div class="filter-box">
		<div class="head">
			<h3>Filters</h3> 
			<div class="close"><img src="{{asset('assets/images/close-sign.svg')}}" alt=""></div> 
		</div>
		<form action="{{ route('statsBySeason', [$season, $sort]) }}" method="GET">
			<div class="filters">
				<h3>Teams</h3>
				<ul class="filter-list">
					@foreach($teamsData as $team)
					<li> 
						<input type="radio" id="{{ $team['id'] }}" name="team" value="{{ $team['id'] }}"> 
						<label for="{{ $team['id'] }}">{{ $team['fullName'] }}</label>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="filters">
				<h3>Player</h3>
				<ul class="filter-list">
					<li> 
						<input type="radio" id="all" name="player_type" value="all"> 
						<label for="all">All</label>
					</li>
					<li> 
						<input type="radio" id="indian" name="player_type" value="indian"> 
						<label for="indian">Indian</label>
					</li>
					<li> 
						<input type="radio" id="Overseas" name="player_type" value="Overseas"> 
						<label for="Overseas">Overseas</label>
					</li>
				</ul>
			</div>
			<div class="filters">
				<h3>Season</h3>
				<ul class="filter-list">
					@foreach($seasons as $i)
					<li> 
						<input type="radio" id="{{ $i }}" name="season" value="{{ $i }}" {{ ($season == $i) ? 'checked' : '' }}> 
						<label for="{{ $i }}">{{ $i }}</label>
					</li>
					@endforeach
				</ul>
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>    
</div>

@include('layouts.footer')