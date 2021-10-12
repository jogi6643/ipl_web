
@include('layouts.header')

  <main>
    <section class="np-leaderInnserSection ">
      <div class="ap-common-head np-aboutusBg np-venuBg col-100 floatLft floatLft flexDisplay justifyCenter alignCenter   ">
        <a href="about-venues.html" class="np-arrow">
          <img src="{{asset('assets/images/nikhil/np-stadium-arrow.png')}}" alt="">
        </a>
        <div class="np-statiumTitle col-100 floatLft flexDisplay flexColumn">
          <span> Narendra Modi Stadium</span>
          <span class="np-capacity">Capacity : 132,000</span>
        </div>
      </div>
      <div class="np-stadiumBigImg col-100 floatLft">
        <img src="{{asset('assets/images/nikhil/np-stadiumBig.jpg')}}" alt="">
      </div>
      <div class="np-leaderInnserSectionBg np-venu_section np-venu col-100 floatLft flexDisplay">
        <div class="np-stadiumWrp col-100 floatLft flexDisplay justifySpace alignCenter ">
          <div class="ap-common-head np-stadiumMap col-100 floatLft flexDisplay alignCenter flexColumn">
            <span>Map</span>
            <img src="{{asset('assets/images/nikhil/np-map.jpg')}}" alt="">
            <h6>Address : Motera Stadium road, Sabarmati, Ahmedabad, Gujrat 380005</h6>
          </div>
          <div class="ap-common-head np-stadiumMap col-100 floatLft flexDisplay  alignCenter flexColumn ">
            <span>SEATING PLAN</span>
            <img src="{{asset('assets/images/nikhil/np-seating.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </section>
  </main>

@include('layouts.footer')
