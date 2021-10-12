@include('layouts.header')
	
	@foreach($homeData['list'] as $section)
		@if($section['slug'] == 'live-score')
			@foreach($section['contents'] as $liveMatch)
			<section class="ap-match-start-wrp col-100 floatLft flexDisplay justifyCenter">
				<div class="ap-match-innerwrp textCenter">
					<h3 class="ap-match-place col-100 floatLft textCenter re">{{ $liveMatch['label'] }}, {{ $liveMatch['scheduleEntry']['venue']['shortName'] }}, {{ $liveMatch['scheduleEntry']['venue']['city'] }}, {{ $liveMatch['scheduleEntry']['venue']['country'] }} </h3>
					<div class="ap-line-match inlineBlk"><img src="{{asset('assets/images/ap-match-live-line.png')}}" alt=""></div>
					<h2 class="ap-match-win">{{ $liveMatch['matchResult'] }}</h2>
					<div class="ap-teams-battle-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
						<div class="ap-team-result-stat flexDisplay justifySpace alignEnd flexWrap">
							<div class="ap-team-logoName ap-mob-right-align">
								<div class="ap-team-res-logo"><img src="{{ $liveMatch['scheduleEntry']['team1']['team']['image_url'] }}" alt=""></div>
								<div class="ap-team-res-name ap-flt-right">{{ $liveMatch['scheduleEntry']['team1']['team']['fullName'] }}</div>
							</div>
							<div class="ap-team-res-cnt textRight">
								<div class="ap-total-runs">{{ $liveMatch['scheduleEntry']['team1']['team']['r'] }}/{{ $liveMatch['scheduleEntry']['team1']['team']['w'] }}</div>
								<h3 class="ap-runs-overs">Run Rate: {{ $liveMatch['scheduleEntry']['team1']['team']['runRate'] }}</h3>
								<h3 class="ap-runs-overs">Overs: {{ $liveMatch['scheduleEntry']['team1']['team']['ovPlayed'] }}/{{ $liveMatch['scheduleEntry']['team1']['team']['ov'] }}</h3>
								<div class="ap-overs-count">
									@for($i=1; $i <= $liveMatch['scheduleEntry']['team1']['team']['ov']; $i++)
										@if($i <= $liveMatch['scheduleEntry']['team1']['team']['ovPlayed'])
											<span class="ap-overscnt-bar"></span>
										@else
											<span class="ap-overscnt-bar empty"></span>
										@endif
									@endfor
								</div>
							</div>
						</div>
						<div class="ap-team-vs"><h2 class="ap-vs-txt">VS</h2></div>
						<div class="ap-team-result-stat flexDisplay justifySpace alignEnd flexWrap">
							<div class="ap-team-res-cnt textLeft ">
								<div class="ap-total-runs ap-match-lost">{{ $liveMatch['scheduleEntry']['team2']['team']['r'] }}/{{ $liveMatch['scheduleEntry']['team2']['team']['w'] }}</div>
								<h3 class="ap-runs-overs ap-match-lost">Run Rate: {{ $liveMatch['scheduleEntry']['team2']['team']['runRate'] }}</h3>
								<h3 class="ap-runs-overs ap-match-lost">Overs: {{ $liveMatch['scheduleEntry']['team2']['team']['ovPlayed'] }}/{{ $liveMatch['scheduleEntry']['team2']['team']['ov'] }}</h3>
								<div class="ap-overs-count ap-match-lost">
									@for($i=1; $i <= $liveMatch['scheduleEntry']['team2']['team']['ov']; $i++)
										@if($i <= $liveMatch['scheduleEntry']['team2']['team']['ovPlayed'])
											<span class="ap-overscnt-bar"></span>
										@else
											<span class="ap-overscnt-bar empty"></span>
										@endif
									@endfor
								</div>
							</div>
							<div class="ap-team-logoName ap-mob-left-align">
								<div class="ap-team-res-logo"><img src="{{ $liveMatch['scheduleEntry']['team2']['team']['image_url'] }}" alt=""></div>
								<div class="ap-team-res-name">{{ $liveMatch['scheduleEntry']['team2']['team']['fullName'] }}</div>
							</div>
						</div>
					</div>
					<div class="ap-match-refree col-100 floatLft flexDisplay justifyCenter flexColumn alignCenter">
						<div class="ap-refree-inner flexDisplay justifySpace flexWrap">
							<div class="ap-refree-name ap-w50">
								<span class="ap-refree-span-light">Referee:</span>
								<span class="ap-refree-span-bold">{{ $liveMatch['scheduleEntry']['referee'] }}</span>
							</div>
							<div class="ap-refree-name ap-w50">
								<span class="ap-refree-span-light">Toss:</span>
								<span class="ap-refree-span-bold">{{ $liveMatch['scheduleEntry']['toss'] }}</span>
							
							</div>
							<div class="ap-refree-name ap-w100">
								<span class="ap-refree-span-light">Umpires:</span>
								<span class="ap-refree-span-bold">{{ is_array($liveMatch['scheduleEntry']['umpires']) ? implode(', ', $liveMatch['scheduleEntry']['umpires']) : '' }}</span>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			@endforeach
		@endif
	
		@if($section['slug'] == 'banner')
		<section class="ap-banner-parent col-100 floatLft relative">
			<div class="ap-inner-banner-wrp col-100 floatLft relative flexDisplay justifySpace alignStart">
				<div class="ap-slider-video">
					@foreach($section['contents'] as $banner)
						<div class="ap-video-item ap-item-1 relative">
							<img src="{{ $banner['imageUrl'] }}" alt="">
							<div class="ap-video-content absolute">
								<a href="javascript:;" class="ap-watch-btn"><img src="{{asset('assets/images/watchButton.png')}}" alt=""></a>
								<h2 class="ap-video-title col-100 floatLft">{{ $banner['title'] ?? '' }}</h2>
								<h3 class="ap-date col-100 floatLft">{{ $banner['date'] ? date('D M Y', strtotime($banner['date'])) : ''}}</h3>
							</div>
						</div>
					@endforeach

					<!-- <div class="ap-video-item ap-item-1 relative">
						<img src="{{asset('assets/images/bannerslid.jpg')}}" alt="">
						<div class="ap-video-content absolute">
							<a href="javascript:;" class="ap-watch-btn"><img src="{{asset('assets/images/watchButton.png')}}" alt=""></a>
							<h2 class="ap-video-title col-100 floatLft">BCCI ANNOUNCES SCHEDULE FOR REMAINDER <br /> OF VIVO IPL 2021 IN UAE</h2>
							<h3 class="ap-date col-100 floatLft">02 May 2021</h3>
						</div>
					</div>
					<div class="ap-video-item ap-item-1 relative">
						<img src="{{asset('assets/images/bannerslid.jpg')}}" alt="">
						<div class="ap-video-content absolute">
							<a href="javascript:;" class="ap-watch-btn"><img src="{{asset('assets/images/watchButton.png')}}" alt=""></a>
							<h2 class="ap-video-title col-100 floatLft">BCCI ANNOUNCES SCHEDULE FOR REMAINDER <br /> OF VIVO IPL 2021 IN UAE</h2>
							<h3 class="ap-date col-100 floatLft">02 May 2021</h3>
						</div>
					</div> -->
				</div>

				<div class="ap-stat-table">
					<div class="ap-tabs-wrp col-100 floatLft flexDisplay justifySpace" id="tabs">
						<a href="javascript:;" class="ap-common-tab ap-schedule-click active" id="schedule">Schedule</a>
						<a href="javascript:;" class="ap-common-tab ap-standings-click inactive" id="standing">Standings</a>
					</div>
					<div class="ap-tab-content col-100 floatLft" id="scheduleT">
						<table class="ap-stat-innertable" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<th width="15%">TEAM</th>
								<th width="8%">PLD</th>
								<th width="15%">NET RR</th>
								<th width="8%">PTS</th>
								<th width="25%">FORM</th>
							</tr>
							@foreach($section['standings']['contents'] as $standing)
							<tr class="ap-bg-wht">
								<td width="18%">
									<div class="ap-team-wrp flexDisplay alignCenter">
										<div class="ap-team-ico"><img src="{{asset('assets/images/DCLogo.png')}}" alt=""></div>
										<h3 class="ap-team-name">{{ $standing['team'] }}</h3>
									</div>
								</td>
								<td>
									<h3 class="ap-team-name">{{ $standing['pld'] }}</h3>
								</td>
								<td>
									<h3 class="ap-team-name">{{ $standing['netrr'] }}</h3>
								</td>
								<td>
									<h3 class="ap-team-name">{{ $standing['pts'] }}</h3>
								</td>
								<td>
									<div class="ap-wkt-wrp">
										@foreach($standing['form'] as $form)
											<span class="ap-green">{{ $form }}</span>
										@endforeach
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
							@endforeach
						</table>
					</div>
					<div class="ap-tab-content col-100 floatLft" id="standingT" style="display: none;">
						<table class="ap-stat-innertable" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<th width="15%">TEAM</th>
								<th width="8%">PLD</th>
								<th width="15%">NET RR</th>
								<th width="8%">PTS</th>
								<th width="25%">FORM</th>
							</tr>
							@foreach($section['standings']['contents'] as $standing)
							<tr class="ap-bg-wht">
								<td width="18%">
									<div class="ap-team-wrp flexDisplay alignCenter">
										<div class="ap-team-ico"><img src="{{asset('assets/images/DCLogo.png')}}" alt=""></div>
										<h3 class="ap-team-name">{{ $standing['team'] }}</h3>
									</div>
								</td>
								<td>
									<h3 class="ap-team-name">{{ $standing['pld'] }}</h3>
								</td>
								<td>
									<h3 class="ap-team-name">{{ $standing['netrr'] }}</h3>
								</td>
								<td>
									<h3 class="ap-team-name">{{ $standing['pts'] }}</h3>
								</td>
								<td>
									<div class="ap-wkt-wrp">
										@foreach($standing['form'] as $form)
											<span class="ap-green">{{ $form }}</span>
										@endforeach
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
							@endforeach
						</table>
					</div>
					<div class="ap-tabs-wrp col-100 floatLft flexDisplay justifySpace">
						<a href="javascript:;" class="ap-common-tab ap-schedule-click ">View Full Table</a>
						<a href="javascript:;" class="ap-common-tab ap-standings-click active"> <i class="fa fa-twitter"></i> Tweet</a>
					</div>
				</div>
				
			</div>
		</section>
		@endif

		@if($section['slug'] == 'top-video' || $section['slug'] == 'top-highlights' || $section['slug'] == 'trending-video')
			@php
				switch($section['slug']){
					case 'top-video': 	$background = 'ap-latest-videos';
										$titleColor = '';
					break;
					case 'top-highlights': 	$background = 'ap-latest-videos ap-top-highlights';
											$titleColor = 'wht';
					break;
					default: $background = 'ap-latest-videos';
											$titleColor = '';
					break;
				}
			@endphp
			<section class="{{ $background }} col-100 floatLft relative">
				<div class="ap-common-title-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
					<h2 class="ap-common-head {{ $titleColor }}">{{ $section['name'] }}</h2>
					@if($section['show_more'])
						<a href="javascript:;" class="ap-viewall-click">View All</a>
					@endif
				</div>
				<div class="ap-common-slider-wrap col-100 floatLft">
					@foreach($section['contents'] as $data)
						<div class="ap-common-slide">
							<div class="ap-slide-content col-100 floatLft relative">
								<div class="ap-img-box col-100 floatLft relative">
									<img src="{{ $data['imageUrl'] }}" alt="">
									<a href="javascript:;" class="ap-play-video-btn absolute"><img src="{{asset('assets/images/Play.png')}}" alt=""></a>
								</div>
								<div class="ap-img-content col-100 floatLft">
									<div class="ap-date-wrp flexDisplay justifySpace alignCenter">
										<span>{{ date('d M, Y', strtotime($data['date'])) }}</span>
										<span><img src="{{asset('assets/images/Exclude.png')}}" alt="">{{ $data['views'] }}</span>
									</div>
									<h3 class="ap-slide-video-title col-100 floatLft textCenter">{{ $data['title'] }}</h3>
								</div>
								<div class="ap-time-video absolute">{{ $data['duration'] }}</div>
							</div>
						</div>
					@endforeach
				</div>
			</section>
		@endif

		@if($section['slug'] == 'latest-news')
		<section class="ap-latest-videos ap-latest-news col-100 floatLft relative">
			<div class="ap-common-title-wrp col-100 floatLft flexDisplay justifySpace alignCenter">
				<h2 class="ap-common-head">{{ $section['name'] }}</h2>
				@if($section['show_more'])
				<a href="javascript:;" class="ap-viewall-click">View All</a>
				@endif
			</div>
			<div class="ap-common-news-wrap col-100 floatLft flexDisplay justifySpace alignStart flexWrap">
				@foreach($section['contents'] as $news)
				<div class="ap-common-news">
					<div class="ap-slide-content col-100 floatLft relative">
						<div class="ap-img-box col-100 floatLft relative">
							<img src="{{ $news['imageUrl'] }}" alt="">
						</div>
						<div class="ap-img-content col-100 floatLft">
							<div class="ap-date-wrp flexDisplay justifySpace alignCenter">
								<span>{{ date('d M, Y', strtotime($news['date'])) }}</span>
								<span class="ap-green-text">{{ strtoupper($news['subtitle']) }}</span>
							</div>
							<h3 class="ap-slide-video-title col-100 floatLft textCenter">{{ $news['title'] }}</h3>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</section>
		@endif

		@if($section['slug'] == 'app-download-links')
		<section class="ap-offical-app-wrp col-100 floatLft relative flexDisplay justifyCenter">
			<div class="ap-official-innerwrp">
				<div class="ap-app-content-wrp col-100 floatLft flexDisplay justifySpace alignCenter flexWrap">
					@if(!empty($section['contents']))
					<div class="ap-app-text-data">
						<h2 class="ap-common-head">{{ $section['contents'][0]['title'] }}</h2>
						<p class="ap-app-cnt">{{ $section['contents'][0]['description'] }}</p>
						<div class="ap-get-app floatLft">
							<div class="ap-app-download">
								<a href="{{ $section['contents'][0]['playStrorelink'] }}"><img src="{{asset('assets/images/play-store.png')}}" alt=""></a>
								<a href="{{ $section['contents'][0]['appStrorelink'] }}"><img src="{{asset('assets/images/app-store.png')}}" alt=""></a>
							</div>
						</div>
					</div>
					<div class="ap-app-img-data">
						<img src="{{ $section['contents'][0]['image'] }}" alt="">
					</div>
					@endif
				</div>
			</div>
		</section >
		@endif

		@if($section['slug'] == '2021-leaders')
		<section class="ap-latest-videos ap-leader-board col-100 floatLft relative" style="margin-bottom: 40px;">
			<section class="np-section  col-100 floatLft" >
				<h2 class="ap-common-head" style="padding-left: 40px;">{{ $section['name'] }}</h2>
				<div class="np-sectionBG col-100 floatLft ">
				<div class="np-sectionWrp col-100 floatLft ">
					<ul class="np-card__list col-100 floatLft flexDisplay justifySpace alignCenter flexWrap">
						@foreach($section['contents'] as $leaders)
						<li>
							<div class="np-card col-100 floatLft">
								<div class="np-cardBg-Shikhar col-100 floatLft textCenter">
								<div class="np-cardWrp-Shikhar col-100 floatLft">
									<div class="np-card__logo col-100 floatLft flexDisplay justifyCenter alignCenter">
									<img class="np-Shikhar-logo floatLft" src="{{ $leaders['image_url'] }}" alt="">
									</div>
									<div class="np-card__stats  col-100 floatLft textCenter  ">
									<div class="np-card__statsWrp ">
										<div class="np-card__statsBg-Shikhar col-100 floatLft">
										<div class="np-card__statsRuns col-100 floatLft textCenter">
											<div class="np-card__statsRunsWrp col-100 floatLft">
											<div class="np-card__Runs col-100 floatLft flexDisplay  justifyCenter alignCenter">
												<div class="np-runs textCenter ">
												<h3>{{ $leaders['total_runs'] }}</h3>
												<h4>Runs</h4>
												</div>
												<span>
												<img src="{{asset('assets/images/line.png')}}" alt="">
												</span>
												<div class="np-name textLeft">
												<h3>{{ $leaders['player_name'] }}</h3>
												<h4>{{ $leaders['team'] }}</h4>
												</div>
											</div>
											</div>
										</div>
										</div>
									</div>
									</div>
									<div class="np-subtitle  col-100 floatLft ">
									<div class="np-subtitleWrp">
										<div class="np-sub col-100 floatLft">
											<h4>{{ $leaders['title'] }}</h4>
										</div>
									</div>
									</div>
									<div class="np-card__disc  col-100 floatLft  textCenter">
									<div class="np-card__discWrp">
										<div class="np-card__discBg-Shikhar col-100 floatLft">
										<div class="np-card__discRuns  textCenter">
											<div class="np-card__discRunsWrp">
											<div class="np-card__Runs col-100 floatLft flexDisplay  justifyCenter alignCenter">
												<div class="np-runs textCenter ">
												<h3>{{ $leaders['total_matches'] }}</h3>
												<h4>Matches</h4>
												</div>
												<span>
												<img src="{{asset('assets/images/line.png')}}" alt="">
												</span>
												<div class="np-runs textCenter ">
												<h3>{{ $leaders['total_runs'] }}</h3>
												<h4>Runs</h4>
												</div>
												<span>
												<img src="{{asset('assets/images/line.png')}}" alt="">
												</span>
												<div class="np-runs textCenter ">
												<h3>{{ $leaders['total_wickets'] }}</h3>
												<h4>Wickets</h4>
												</div>
												<span>
												<img src="{{asset('assets/images/line.png')}}" alt="">
												</span>
												<div class="np-runs textCenter ">
												<h3>{{ $leaders['ipl_debut'] }}</h3>
												<h4>IPL Debut</h4>
												</div>
											</div>
											</div>
										</div>
										<div class="np-btn col-100 floatLft">
											<a href="#" class="np-button-shikhar"> View Full List </a>
										</div>
										</div>
									</div>
									</div>
								</div>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
				</div>
			</section>
		</section>
		@endif

		@if($section['slug'] == '2021-in-numbers')
		<section class="ap-numbers-wrapper floatLft col-100">
			<h2 class="ap-common-head wht">2021 In Numbers</h2>
			<div class="ap-numbers-wrp-1 floatLft col-100 flexDisplay justifySpace flexWrap">
				<div class="ap-winner-slider">
					@foreach($section['contents'][0]['banners'] as $banners)
					<div class="ap-winner-item">
						<div class="ap-winner-innerWrp col-100 floatLft flexDisplay justifySpace alignCenter">
							<div class="ap-winner-text">
								<h3 class="ap-prev-win">{{ $banners['upperSubtitle'] }}</h3>
								<div class="ap-winner-name">{{ $banners['teamName'] }}</div>
								<h3 class="ap-prev-win">{{ $banners['lowerSubTitle'] }}</h3>
							</div>
							<div class="ap-winner-logo">
								<img src="{{ $banners['imageurl'] ? $banners['imageurl'] : asset('assets/images/csk-logo-big.png')}}" alt="">
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="ap-runs-wrp flexDisplay justifySpace">
					
					<div class="ap-runRate">
						<h2 class="ap-common-number-txt">{{ $section['contents'][1]['netRunRate'] }}</h2>
						<span class="ap-common-small-txt">{{ $section['contents'][1]['name'] }}</span>
					</div>
					<div class="ap-runs">
						<h2 class="ap-common-number-txt">{{ $section['contents'][2]['runs'] }}</h2>
						<span class="ap-common-small-txt">{{ $section['contents'][2]['name'] }}</span>
						<br />
						<span class="ap-common-small-txt textCenter">{{ $section['contents'][2]['title'] }}</span>
					</div>
				</div>
			</div>

			<div class="ap-numbers-wrp-1 floatLft col-100 flexDisplay justifySpace flexWrap ap-mt18">
				<div class="ap-players-num-stats">
					<div class="ap-player-data ap-raina-stats flexDisplay justifySpace alignEnd">
						<div class="ap-player-img"><img src="{{ $section['contents'][3]['imageurl'] }}" alt=""></div>
						<div class="ap-player-stats-txt">
							<div class="ap-stats-player-name">{{ $section['contents'][3]['name'] }}</div>
							<div class="ap-stats-info col-100 floatLft">
								<div class="ap-total-runs">Total Runs</div>
								<div class="ap-run-valus">{{ $section['contents'][3]['totalRuns'] }} <sub>runs</sub></div>
							</div>
							<div class="ap-stats-info col-100 floatLft">
								<div class="ap-total-runs">Strike Rate</div>
								<div class="ap-run-valus">{{ $section['contents'][3]['strikeRate'] }}</sub></div>
							</div>
							<div class="ap-stats-info col-100 floatLft">
								<div class="ap-total-runs">Matches Played</div>
								<div class="ap-run-valus">{{ $section['contents'][3]['matchPlayed'] }}</sub></div>
							</div>
						</div>
					</div>
					<div class="ap-player-data ap-polard-stats flexDisplay justifySpace alignEnd">
						<div class="ap-player-img"><img src="{{ $section['contents'][4]['imageurl'] }}" alt=""></div>
						<div class="ap-player-stats-txt">
							<div class="ap-stats-player-name ap-wht-stat-txt">{{ $section['contents'][4]['name'] }}</div>
							<div class="ap-stats-info col-100 floatLft">
								<div class="ap-total-runs ap-wht-stat-txt">Total Runs</div>
								<div class="ap-run-valus ap-wht-stat-txt">{{ $section['contents'][4]['totalRuns'] }} <sub>runs</sub></div>
							</div>
							<div class="ap-stats-info col-100 floatLft">
								<div class="ap-total-runs ap-wht-stat-txt">Strike Rate</div>
								<div class="ap-run-valus ap-wht-stat-txt">{{ $section['contents'][4]['strikeRate'] }}</sub></div>
							</div>
							<div class="ap-stats-info col-100 floatLft">
								<div class="ap-total-runs ap-wht-stat-txt">Matches Played</div>
								<div class="ap-run-valus ap-wht-stat-txt">{{ $section['contents'][4]['matchPlayed'] }}</sub></div>
							</div>
						</div>
					</div>
				</div>
				<div class="ap-fours-sixes-wrp flexDisplay justifySpace">
					<div class="ap-fours-wrp">
						<h2 class="ap-common-number-txt">{{ $section['contents'][5]['fours'] }}</h2>
						<span class="ap-common-small-txt">{{ $section['contents'][5]['name'] }}</span>
					</div>
					<div class="ap-sixes-wrp">
						<h2 class="ap-common-number-txt">{{ $section['contents'][6]['sixes'] }}</h2>
						<span class="ap-common-small-txt">{{ $section['contents'][6]['name'] }}</span>
					</div>
				</div>
			</div>

			<div class="ap-numbers-wrp-1 floatLft col-100 flexDisplay justifySpace flexWrap ap-mt18">
				<div class="ap-number-pics-wrp ap-pics">
					<a href="javascript:;"><img src="{{asset('assets/images/pic.png')}}" alt=""></a>
				</div>
				<div class="ap-intersting-facts">
					<div class="ap-facts-text">{{ $section['contents'][8]['name'] }}</div>
					<div class="ap-facts-quote"><span>&quot;</span> {{ $section['contents'][8]['short_description'] }}<span>&quot;</span></div>
				</div>
				<div class="ap-number-pics-wrp ap-highlights">
					<a href="javascript:;"><img src="{{asset('assets/images/highlight.png')}}" alt=""></a>
				</div>
			</div>
		</section>
		@endif

		@if($section['slug'] == 'live-match-score')
		<section class="ap-fixed-match-brief col-100 floatLft">
			<div class="ap-fixed-match-slider col-100 floatLft">
				@foreach($section['contents'] as $liveMatchScore)
				<div class="ap-match-slide">
					<div class="ap-match-slide-inner col-100 floatLft flexDisplay justifySpace alignCenter">
						<h3 class="ap-date-rcp">{{ date('d', strtotime($liveMatchScore['date'])) }} <br> <span>{{ date('M', strtotime($liveMatchScore['date'])) }}</span></h3>
						<div class="ap-match-recap-wrp flexDisplay alignCenter justifySpace">
							@if(!empty($teams = $liveMatchScore['teams']))
								<div class="ap-team-name-rcap ap-MI-BG flexDisplay alignCenter">
									<span class="ap-img-rcap"><img src="{{ $teams[0]['imageUrl'] }}" alt=""></span>
									<span class="ap-left-space">{{ $teams[0]['name'] }}</span>
								</div>
								<div class="ap-score-rcap">
									<span class="ap-runs-txt">{{ $teams[0]['runs'] }}/{{ $teams[0]['wicket'] }}</span>
									<span class="ap-vs-rcp-txt">vs</span>
									<span class="ap-runs-txt">{{ $teams[1]['runs'] }}/{{ $teams[1]['wicket'] }}</span>
								</div>
								<div class="ap-team-name-rcap ap-RCB-BG flexDisplay alignCenter">
									<span class="ap-right-space">{{ $teams[1]['name'] }}</span>
									<span class="ap-img-rcap"><img src="{{ $teams[1]['imageUrl'] }}" alt=""></span>
								</div>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</section>
		@endif
	@endforeach

    <!-- <section class="ap-sponsers-desk-wrp col-100 floatLft">
        <img src="{{asset('assets/images/sponsor.png')}}" alt="" class="ap-spons-desk">
        <img src="{{asset('assets/images/sponser-images-mobile.jpg')}}" alt="" class="ap-spons-mob">
    </section> -->

@include('layouts.footer')