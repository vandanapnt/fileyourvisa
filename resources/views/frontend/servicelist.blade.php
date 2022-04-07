@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<div class="full_width inner_banner text-center">
      <img src="{{url('/frontassets/images/service-banner.jpg')}}" class="object_fit_cover" />
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="bannerContent">
            <h1 class="font_52 fontopensans colorWhite font700 text-uppercase">
              Services
            </h1>
          </div>
        </div>
      </div>
      <div class="full_width inner-breadcum">
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/services')}}">Services</a></li>
        </ul>
      </div>
    </div>

    <div class="full_width service-info-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 ser-info-lft">
            <div class="full_width serinfolft-in">
              <div class="serinfolft-in-img">
                <img
                  class="object_fit_cover"
                  src="{{url('/frontassets/images/service-info-img.jpg')}}"
                  alt=""
                />
              </div>
              <div class="full_width serinfo-txt-sctn font_16 font400">
                <h4 class="font_20 font700 colorBlack">FEATURED SERVICES</h4>
                <h2 class="font_40 font700 colorBlack">
                  We Take The Challenge to Make The Life Easier
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                  a pharetra mi. Quisque in dictum arcu. Nullam aliquam, eros id
                  commodo placerat,Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Cras a pharetra mi.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-12 ser-info-right">
            <div class="full_width servc-info-pnl">
              <div class="info-srvc-box boxbg1 font400 font_16 colorBlack">
                <h4 class="font_22 colorBlack font400">PROPER INFORMATION</h4>
                <p>
                  Work permit approval in higher education is designed for
                  career professionals seeking
                </p>
                <a href="#"
                  ><img src="{{url('/frontassets/images/infoservices-arrow-icon.png')}}" alt=""
                /></a>
              </div>
              <div class="info-srvc-box boxbg2 font400 font_16 colorBlack">
                <h4 class="font_22 colorBlack font400">ADVICE & CONSULTANCY</h4>
                <p>
                  Work permit approval in higher education is designed for
                  career professionals seeking
                </p>
                <a href="#"
                  ><img src="{{url('/frontassets/images/infoservices-arrow-icon.png')}}" alt=""
                /></a>
              </div>
              <div class="info-srvc-box boxbg3 font400 font_16 colorBlack">
                <h4 class="font_22 colorBlack font400">
                  TOUR & TRAVEL GUIDELINES
                </h4>
                <p>
                  Work permit approval in higher education is designed for
                  career professionals seeking
                </p>
                <a href="#"
                  ><img src="{{url('/frontassets/images/infoservices-arrow-icon.png')}}" alt=""
                /></a>
              </div>
              <div class="info-srvc-box boxbg4 font400 font_16 colorBlack">
                <h4 class="font_22 colorBlack font400">
                  EDUCATION TIPS AND TRICKS
                </h4>
                <p>
                  Work permit approval in higher education is designed for
                  career professionals seeking
                </p>
                <a href="#"
                  ><img src="{{url('/frontassets/images/infoservices-arrow-icon.png')}}" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('frontend.includes.visa-services')

    <div class="full_width clnt-section">
      <img src="{{url('/frontassets/images/clintbg.jpg')}}" class="object_fit_cover" />
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorWhite font600">
                Happy Clients &amp; Students
              </h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorWhite font600">Visa &amp; Immigration</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorWhite font600">Countries Affiliation</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 client-section-in">
            <div class="full_width client-box">
              <h3 class="font_72 color-green font700">2k+</h3>
              <h5 class="font_17 colorWhite font600">Top University Partner</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="full_width ourmission visarequest">
      <div class="container">
        <div class="full_width misstion-in">
          <div class="misstion_text font400 font_16">
            <h4 class="font_20 font600 colorBlack text-uppercase">
              WORKING PROCESS
            </h4>
            <h2 class="font_40 font700 colorBlack">
              We Take 1-2 Working Months For Processing
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Pellentesque ullamcorper venenatis fringilla. Praesent quis
              ultricies turpis. Pelleque nibh magna, sagittis eget lacinia
            </p>
            <ul class="vsarqst">
              <li>Visa Requests</li>
              <li>Visa Apply</li>
              <li>Visa Service</li>
            </ul>
            <a href="#" class="cmnBtn font_16 bgcolorred colorWhite radius-2">
              See Our Services</a
            >
          </div>
          <div class="misttion-img-pnl">
            <div class="full_width missn-img">
              <img
                class="object_fit_cover"
                src="{{url('/frontassets/images/mission-img.jpg')}}"
                alt="mission-img"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="full_width edulogo-area">
      <div class="container">
        <div class="full_width edulogoin">
          <div class="full_width edulogo-box">
            <div class="edulogobox-img">
              <img src="{{url('/frontassets/images/edulogo1.jpg')}}" alt="" />
            </div>
          </div>
          <div class="full_width edulogo-box">
            <div class="edulogobox-img">
              <img src="{{url('/frontassets/images/edulogo2.jpg')}}" alt="" />
            </div>
          </div>
          <div class="full_width edulogo-box">
            <div class="edulogobox-img">
              <img src="{{url('/frontassets/images/edulogo3.jpg')}}" alt="" />
            </div>
          </div>
          <div class="full_width edulogo-box">
            <div class="edulogobox-img">
              <img src="{{url('/frontassets/images/edulogo4.jpg')}}" alt="" />
            </div>
          </div>
          <div class="full_width edulogo-box">
            <div class="edulogobox-img">
              <img src="{{url('/frontassets/images/edulogo5.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
 
@endsection