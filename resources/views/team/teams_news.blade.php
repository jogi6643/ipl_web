@include('team.teams_header')
    <div class="vn-latest-news vn-sheduleBg col-100 floatLft">
        <section class="ap-latest-videos ap-latest-news col-100 floatLft relative">
            <div class="vn-newsPge col-100 floatLft flexDisplay justifySpace alignStart flexWrap">
                <?php $key = 0; ?>
                @foreach($teamNews as $news)
                {{-- dd($news['references'][0]['id']) --}}
                <div class="ap-common-news">
                    
                    <!-- <a href="{{url('teams_news_individual_announcement')}}"> -->
                    <a href="{{url('teamsannouncement')}}/{{$news['references'][0]['id'] }}">
                        <div class="ap-slide-content col-100 floatLft relative">
                            <div class="ap-img-box col-100 floatLft relative">
                                <img src="{{ $news['imageUrl'] ? $news['imageUrl'] : asset('assets/images/news-1.jpg') }}" alt="">
                            </div>
                            <div class="ap-img-content col-100 floatLft">
                                <div class="ap-date-wrp flexDisplay justifySpace alignCenter">
                                    <span>{{ date('dS M, Y', strtotime($news['date'])) }}</span>
                                    @php 
                                        $subtitle = $news['subtitle'] ? strtoupper($news['subtitle']) : 'FEATURED AND INETRVIEWS';
                                        switch($news['subtitle']){
                                            case 'Article':     $subtitleClass = 'ap-green-text';
                                                                break;
                                            case 'Announcement':$subtitleClass = 'ap-red-text';
                                                                break;
                                            default:            $subtitleClass = 'ap-text-blue';
                                                                break;
                                        }
                                    @endphp
                                    <span class="{{ $subtitleClass }}">{{ $subtitle }}</span>
                                </div>
                                <h3 class="ap-slide-video-title col-100 floatLft textCenter">{{ $news['title'] }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $key++; ?>
                @endforeach
            </div>
            <a href="#" class="vn_viewall">View All</a>
        </section>
    </div>
</div>

@include('layouts.footer')