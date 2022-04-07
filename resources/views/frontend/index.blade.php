@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<div class="full_width banner">
      <img src="{{ url('frontassets/images/banner.jpg')}}" class="object_fit_cover" />
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="bannerContent">
            <h4>Effective Visa Solution</h4>
            <h1 class="font_52 fontopensans colorWhite font700 text-uppercase">
              Visa & Immigration <br />Consultation
            </h1>
            <h5 class="font_16 colorWhite font400">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a
              pharetra mi.<br />
              Quisque in dictum arcu. Nullam aliquam, eros id commodo placerat,
            </h5>
            <a href="#" class="cmnBtn font_16 bgcolorred colorWhite radius-2"
              >Book Now</a
            >
          </div>
        </div>
      </div>
    </div>

    <div class="full_width visainformation-section bgcolorred">
      <div class="container">
        <div class="row">
          <a
            href="#"
            class="col-xl-3 col-lg-3 col-md-6 col-12 information-visa-in"
          >
            <div class="visainfortext">
              <span class="visainfoimg"
                ><img src="{{ url('frontassets/images/visainfo-icon1.png') }}" alt=""
              /></span>
              <h3 class="font_20 font700 colorWhite">
                Online Visa <br />
                Application
              </h3>
            </div>
          </a>
          <a
            href="#"
            class="col-xl-3 col-lg-3 col-md-6 col-12 information-visa-in"
          >
            <div class="visainfortext">
              <span class="visainfoimg"
                ><img src="{{ url('frontassets/images/visainfo-icon2.png') }}" alt=""
              /></span>
              <h3 class="font_20 font700 colorWhite">
                Visa <br />
                Information
              </h3>
            </div>
          </a>
          <a
            href="#"
            class="col-xl-3 col-lg-3 col-md-6 col-12 information-visa-in"
          >
            <div class="visainfortext">
              <span class="visainfoimg"
                ><img src="{{ url('frontassets/images/visainfo-icon3.png')}}" alt=""
              /></span>
              <h3 class="font_20 font700 colorWhite">
                Immigration <br />
                Resources
              </h3>
            </div>
          </a>
          <a
            href="#"
            class="col-xl-3 col-lg-3 col-md-6 col-12 information-visa-in"
          >
            <div class="visainfortext">
              <span class="visainfoimg"
                ><img src="{{ url('frontassets/images/visainfo-icon4.png') }}" alt=""
              /></span>
              <h3 class="font_20 font700 colorWhite">
                Online Passport <br />
                Application
              </h3>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="full_width services-section text-center">
      <div class="container">
        <h5 class="font_20 colorBlack font600">FEATURED SERVICES</h5>
        <h2 class="font_40 colorBlack font700">
          We Provide Visa & Immigration Service <br />
          From Experienced Lawyers
        </h2>
        <div class="row">
        @foreach($services as $k => $service)
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-box">
            <div class="full_width service-box-in">
              <div class="service-img">
                <img
                  class="object_fit_cover"
                  src="{{url('/uploads/services/'.$service->service_image)}}"
                  alt=""/>
              </div>
              <div class="services-text font_15 font600">
                <h5 class="font_22 colorBlack font600">
                   {{ $service->service_title }}
                </h5>
                <p> 
                {!!                
                  $newText = substr($service->service_description, 0, 100).'...';
                     
                !!}
               
                </p>
                <a href="{{url('/services/'.$service->service_slug)}}"
                  >Read More
                  <i class="rightarrow" aria-hidden="true"
                    ><img src="{{url('frontassets/images/rightarrow.png')}}" alt="rightarrow" /></i
                ></a>
              </div>
            </div>
        </div>     
   @endforeach
          
        </div>
      </div>
    </div>

    <div class="full_width scolershipbanner">
      <img src="{{url('frontassets/images/scolarship-banner.jpg')}}" class="object_fit_cover" />
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-lg-6 col-md-7 col-12 bannerContent text-center">
            <h3 class="font_33 fontopensans colorWhite font700">
              20+ Best Universities Scholarship <br />
              Programs From 20 Countries​
            </h3>
            <h5 class="font_15 colorWhite font400">
              We also help with other family based employment based and
              investment<br />
              based Immigration. Praesent eui vel aliquam nisl efficitur eu.
            </h5>
            <ul class="flagul">
              <li><img src="{{ url('frontassets/images/flag-1.jpg') }}" alt="flag" /></li>
              <li><img src="{{ url('frontassets/images/flag-2.jpg') }}" alt="flag" /></li>
              <li><img src="{{ url('frontassets/images/flag-3.jpg') }}" alt="flag" /></li>
              <li><img src="{{ url('frontassets/images/flag-4.jpg') }}" alt="flag" /></li>
              <li><img src="{{ url('frontassets/images/flag-5.jpg') }}" alt="flag" /></li>
            </ul>
            <h4 class="font_15 font700 colorWhite">
              Validity From : 2022-01-11 12:00 - 2022-01-11 12:00
            </h4>
            <a href="#" class="cmnBtn font_16 bgcolorred colorWhite radius-2">
              Apply Now</a
            >
          </div>
        </div>
      </div>
    </div>

    <div class="full_width about-section-home">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about-home-lft-text font_16 font400">
              <h4 class="font_20 colorBlack font600 text-uppercase">
                ABOUT fileyourvisa
              </h4>
              <h3 class="font_40 colorBlack font700">
                25+ Years of Your Trust and <br />Recommendation
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a
                pharetra mi. Quisque in dictum arcu. Nullam aliquam, eros id
                commodo placerat,Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Cras a pharetra mi. Quisque in dictum arcu.
                Nullam aliquam, eros id commodo placerat, Lorem ipsum dolor sit
                amet, consectetur adipiscing elit.
              </p>
              <a href="#" class="cmnBtn font_16 bgcolorred colorWhite radius-2">
                Read More</a
              >
            </div>
          </div>
          <div class="col-md-6 right-ab-img">
            <div class="row">
              <div class="col-lg-12">
                <img
                  class="object_fit_cover"
                  src="{{ url('frontassets/images/about-right-img1.jpg') }}"
                  alt=""
                />
              </div>

              <div class="col-lg-6 mb15">
                <img
                  class="object_fit_cover"
                  src="{{ url('frontassets/images/about-right-img2.jpg')}}"
                  alt=""
                />
              </div>
              <div class="col-lg-6">
                <img
                  class="object_fit_cover"
                  src="{{ url('frontassets/images/about-right-img3.jpg') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="full_width client-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorBlack font600">
                Happy Clients & Students
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorBlack font600">Visa & Immigration</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorBlack font600">Countries Affiliation</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorBlack font600">Top University Partner</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="full_width popular-country-section">
      <img src="{{url('frontassets/images/populer-country-bg.jpg')}}" class="object_fit_cover" />
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-md-12 col-12 bannerContent text-center">
            <h5 class="font_20 font600 colorWhite">POPULAR COUNTRIES</h5>
            <h3 class="font_40 fontopensans colorWhite font700">
              Select Your Favorite Country<br />
              To Apply Visa
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="full_width country-visa-area">
      <div class="container">
        <div class="row">
          <div class="full_width country-slide">
            <div class="col-md-3 col-12 country-box">
              <div class="full_width country-box-pnl">
                <div class="full_width country-box-in">
                  <div class="full_width country-box-img">
                    <img
                      class="object_fit_cover"
                      src="{{url('frontassets/images/country-img-1.jpg')}}"
                      alt=""
                    />
                  </div>
                  <div class="full_width country-flag-dv">
                    <div class="flgimg">
                      <img src="{{ url('frontassets/images/flag-1.jpg') }}" alt="" />
                    </div>
                    <div class="flagtext">
                      <h4 class="font_18 colorBlack font700 text-uppercase">
                        United States
                      </h4>
                      <h6 class="font_13 font600 text-uppercase">
                        58 Universities
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 country-box">
              <div class="full_width country-box-pnl">
                <div class="full_width country-box-in">
                  <div class="full_width country-box-img">
                    <img
                      class="object_fit_cover"
                      src="{{ url('frontassets/images/country-img-2.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="full_width country-flag-dv">
                    <div class="flgimg">
                      <img src="{{ url('frontassets/images/flag-2.jpg') }}" alt="" />
                    </div>
                    <div class="flagtext">
                      <h4 class="font_18 colorBlack font700 text-uppercase">
                        New Zealand
                      </h4>
                      <h6 class="font_13 font600 text-uppercase">
                        58 Universities
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 country-box">
              <div class="full_width country-box-pnl">
                <div class="full_width country-box-in">
                  <div class="full_width country-box-img">
                    <img
                      class="object_fit_cover"
                      src="{{ url('frontassets/images/country-img-3.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="full_width country-flag-dv">
                    <div class="flgimg">
                      <img src="{{ url('frontassets/images/flag-3.jpg') }}" alt="" />
                    </div>
                    <div class="flagtext">
                      <h4 class="font_18 colorBlack font700 text-uppercase">
                        United Kingdom
                      </h4>
                      <h6 class="font_13 font600 text-uppercase">
                        58 Universities
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 country-box">
              <div class="full_width country-box-pnl">
                <div class="full_width country-box-in">
                  <div class="full_width country-box-img">
                    <img
                      class="object_fit_cover"
                      src="{{url('frontassets/images/country-img-4.jpg')}}"
                      alt=""
                    />
                  </div>
                  <div class="full_width country-flag-dv">
                    <div class="flgimg">
                      <img src="{{ url('frontassets/images/flag-4.jpg') }}" alt="" />
                    </div>
                    <div class="flagtext">
                      <h4 class="font_18 colorBlack font700 text-uppercase">
                        Switzerland
                      </h4>
                      <h6 class="font_13 font600 text-uppercase">
                        58 Universities
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-12 country-box">
              <div class="full_width country-box-pnl">
                <div class="full_width country-box-in">
                  <div class="full_width country-box-img">
                    <img
                      class="object_fit_cover"
                      src="{{ url('frontassets/images/country-img-1.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="full_width country-flag-dv">
                    <div class="flgimg">
                      <img src="{{ url('frontassets/images/flag-1.jpg') }}" alt="" />
                    </div>
                    <div class="flagtext">
                      <h4 class="font_18 colorBlack font700 text-uppercase">
                        United States
                      </h4>
                      <h6 class="font_13 font600 text-uppercase">
                        58 Universities
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="full_width testimonials-section text-center">
      <div class="container">
        <h5 class="font_20 colorBlack font600">TESTIMONIALS</h5>
        <h3 class="font_40 font700 colorBlack">
          What Clients Say About Us and <br />
          Our Services
        </h3>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 testimoni">
            <div
              class="testimonials-pnl font_15 font-400 bgColorWhite text-left"
            >
              <div class="testiuser">
                <div class="testiusericon">
                  <img
                    class="object_fit_cover"
                    src="{{ url('frontassets/images/testi-img1.jpg') }}"
                    alt=""
                  />
                </div>
                <div class="testiname">
                  <h4 class="font_20 colorBlack font700">David Mark</h4>
                  <h6 class="font_14 font600">Student</h6>
                </div>
              </div>
              <p>
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                non rutrum erat. Nunc sapien neque, vestibulum ac sagittis eget,
                luctus eget lectus. ”
              </p>
              <div class="testiclone">
                <img src="{{url('frontassets/images/quote-icon.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 testimoni">
            <div
              class="testimonials-pnl font_15 font-400 bgColorWhite text-left"
            >
              <div class="testiuser">
                <div class="testiusericon">
                  <img
                    class="object_fit_cover"
                    src="{{url('frontassets/images/testi-img1.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="testiname">
                  <h4 class="font_20 colorBlack font700">David Mark</h4>
                  <h6 class="font_14 font600">Student</h6>
                </div>
              </div>
              <p>
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                non rutrum erat. Nunc sapien neque, vestibulum ac sagittis eget,
                luctus eget lectus. ”
              </p>
              <div class="testiclone">
                <img src="{{ url('frontassets/images/quote-icon.png') }}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 testimoni">
            <div
              class="testimonials-pnl font_15 font-400 bgColorWhite text-left"
            >
              <div class="testiuser">
                <div class="testiusericon">
                  <img
                    class="object_fit_cover"
                    src="{{ url('frontassets/images/testi-img1.jpg') }}"
                    alt=""
                  />
                </div>
                <div class="testiname">
                  <h4 class="font_20 colorBlack font700">David Mark</h4>
                  <h6 class="font_14 font600">Student</h6>
                </div>
              </div>
              <p>
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                non rutrum erat. Nunc sapien neque, vestibulum ac sagittis eget,
                luctus eget lectus. ”
              </p>
              <div class="testiclone">
                <img src="{{url('frontassets/images/quote-icon.png')}}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
