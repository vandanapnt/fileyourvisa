@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<div class="full_width inner_banner text-center">
      <img src="{{url('/frontassets/images/services-details-banner.jpg')}}" class="object_fit_cover" />
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
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Student Visa</a></li>
        </ul>
      </div>
    </div>

    <div class="full_width service-details-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12 service-details-wrap-lft">
            <div class="full_width service-details-wrap-lft-in">
              <div class="full_width service-details-left-menu">
                <ul>
                  <li><a href="#">Job/Work Visa</a></li>
                  <li><a class="active" href="#">Student Visa</a></li>
                  <li><a href="#">Business Visa</a></li>
                  <li><a href="#">Tourist & Visitor Visa Available</a></li>
                </ul>
              </div>
              <div class="full_width download-box">
                <h4 class="font_20 font700 colorWhite text-uppercase">
                  Download
                </h4>
                <div class="download-brch">
                  <a href="#">
                    Service Broohoru<br />
                    PDF 12MB
                  </a>
                </div>
                <div class="download-brch">
                  <a href="#">
                    Service Broohoru<br />
                    PDF 12MB
                  </a>
                </div>
                <div class="download-brch">
                  <a href="#">
                    Service Broohoru<br />
                    PDF 12MB
                  </a>
                </div>
              </div>

              <div class="full_width ask-us">
                <h4 class="font_24 font700 colorBlack">Ask Us</h4>
                <div class="ask-pnl">
                  <form class="askfrm" action="">
                    <input
                      type="text"
                      class="form-control askinput"
                      id="name"
                      placeholder="Name"
                      name="name"
                    />
                    <input
                      type="email"
                      class="form-control askinput"
                      id="email"
                      placeholder="Email"
                      name="email"
                    />
                    <input
                      type="text"
                      class="form-control askinput"
                      id="phone"
                      placeholder="Phone"
                      name="phone"
                    />
                    <textarea
                      class="form-control askinput-sub"
                      id="subject"
                      name="subject"
                      placeholder="Subject"
                    ></textarea>
                    <button
                      class="cmnBtn font_16 bgcolorred colorWhite radius-2"
                    >
                      Submit Now
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-12 service-details-wrap-rgt">
            <div class="full_width service-details-wrap-rgt-in">
              <div class="full_width service-details-big-img">
                <img
                  class="object_fit_cover"
                  src="{{url('/frontassets/images/service-right-big-img.jpg')}}" alt=""/>
              </div>
              <div class="full_width servcs-prt-text font_16 font400">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                  a pharetra mi. Quisque in dictum arcu. Nullam aliquam, eros id
                  commodo placerat,Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Cras a pharetra mi.
                </p>
                <p>
                  Cras aliquam ipsum non laoreet maximus. Vivamus vel quam
                  sodales mi eleifend finibus fringilla ut nulla. Curabitur
                  commodo sem id nibh ornare, et pretium ipsum malesuada. Nulla
                  facilisi. Vivamus posuere arcu nec purus convallis, at
                  elementum nulla vehicula. In sodales lectus sed ipsum sagittis
                  condimentum vel nec dolor. Quisque viverra a tellus vitae
                  eleifend. Aliquam a magna auctor, sollicitudin nunc id,
                  lacinia lacus. Quisque vehicula libero vitae augue dapibus
                  tristique. Donec rutrum placerat lectus a mattis. Vestibulum
                  ante ipsum primis in faucibus orci luctus et ultrices posuere.
                </p>
              </div>
              <div class="full_width visaappli-prcss font_16 font400">
                <h4 class="font_26 font700 colorBlack">
                  Visa Application Whole Process
                </h4>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iusto, quae temporibus? Placeat ea dolorum at officiis laborum
                  recusandae enim magni.
                </p>
                <div class="full_width appli-box-pnl">
                  <div class="row">
                    <div class="col-md-4 col-12 appli-box text-center">
                      <div class="full_width appli-box-in font_16 font400">
                        <div class="applyicon">
                          <img src="{{url('/frontassets/images/appli-icon1.png')}}" alt="icon" />
                        </div>
                        <h5 class="font_18 font700">
                          Ensure<br />
                          The Requrements
                        </h5>
                        <p>
                          Lorem ipsum dolor sit amet, consectr adipiscing elit.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-12 appli-box text-center">
                      <div class="full_width appli-box-in font_16 font400">
                        <div class="applyicon">
                          <img src="{{url('/frontassets/images/appli-icon2.png')}}" alt="icon" />
                        </div>
                        <h5 class="font_18 font700">
                          Collection <br />The Documents
                        </h5>
                        <p>
                          Lorem ipsum dolor sit amet, consectr adipiscing elit.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-12 appli-box text-center">
                      <div class="full_width appli-box-in font_16 font400">
                        <div class="applyicon">
                          <img src="{{url('/frontassets/images/appli-icon3.png')}}" alt="icon" />
                        </div>
                        <h5 class="font_18 font700">
                          Fill Up<br />
                          The Required From
                        </h5>
                        <p>
                          Lorem ipsum dolor sit amet, consectr adipiscing elit.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection