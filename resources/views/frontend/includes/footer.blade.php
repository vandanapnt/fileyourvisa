<!--@include ('frontend.includes.footer-comment-area')-->



<div class="full_width footer">
      <div class="scroll-top"><img src="{{'images/top-arrow.png'}}" alt="" /></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-12 col-12 footer-logo-area">
            <div class="full_width footer-logo-area-in">
              <div class="full_width footer-logo-pnl">
                <div class="foooter-logo">
                  <a href="#"
                    ><img src="{{'images/footer-logo.png'}}" alt="logo"
                  /></a>
                </div>
                <div class="footerlogotext">
                  <p>
                    Sed perspiciatis unde omnis natus error voluptatem accusan
                    doloreqe laudantium totam aperiam eaquae abillo inventore
                  </p>
                </div>
                <div class="followus">
                  <h4 class="font_18 font700 colorWhite">Follow Us</h4>
                  <ul>
                    <li>
                      <a href="#"
                        ><img src="{{'images/social-icon1.png'}}" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{'images/social-icon2.png'}}" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{'images/social-icon3.png'}}" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="#"
                        ><img src="{{'images/social-icon4.png'}}" alt=""
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="full_width calluspanel">
                <div class="callus-in">
                  <div class="calusicon">
                    <img src="images/cal-us-icon.png" alt="calus" />
                  </div>
                  <div class="calustext">
                    <h6 class="calormsg">Call - Or - SMS</h6>
                    <h4 class="calno">+1 878 298 023</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-12 col-12 ftr-rgt-link-pnl">
            <div class="row">
              <div class="col-sm-4 col-12">
                <div class="quicklink">
                  <h4 class="font_18 font700 colorWhite">Quick Links</h4>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="quicklink">
                  <h4 class="font_18 font700 colorWhite">Visa Information</h4>
                  <ul>
                    <li><a href="#">Visitor Visas</a></li>
                    <li><a href="#">Permanent Residence Visas</a></li>
                    <li><a href="#">Business Visas</a></li>
                    <li><a href="#">Working Holiday Visas</a></li>
                    <li><a href="#">Studying & Training Visas</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 col-12">
                <div class="quicklink getint">
                  <h4 class="font_18 font700 colorWhite">Get in Touch</h4>
                  <ul>
                    <li>
                      <a href="#"
                        ><i><img src="images/ftr-cal-icon.png" alt="" /></i> 1
                        587 203 692
                      </a>
                    </li>
                    <li>
                      <a href="#"
                        ><i><img src="images/ftr-email-icon.png" alt="" /></i>
                        support@gmail.com
                      </a>
                    </li>
                    <li>
                      <i><img src="images/ftr-map-icon.png" alt="" /></i>
                      <a href="#"
                        >250 Halderman Rd, West Alexandria, OH, 45381</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 subcrib-section">
                <div class="full_width subcrib-section-in">
                  <div class="row">
                    <div class="col-sm-4 col-12 sub-txt">
                      <h4 class="font_17 font600 colorWhite">
                        Get More Update Join Our <br />
                        Newsletters
                      </h4>
                    </div>
                    <div class="col-sm-8 col-12 sub-input-pnl">
                      <div class="sub-input-box">
                        <div class="news-lttr">
                          <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your email address"
                          />
                          <button
                            class="btn btn-theme sub-button"
                            type="submit"
                          >
                            Subscribe
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="full_width copyright">
                  <div class="copyright-in">
                    © 2022 fileyourvisa. All Rights Reserved.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div id="preloader">
        <img src="images/logoSmall.png" alt="loader">
    </div> -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <script src="{{'frontjs/bootstrap.bundle.min.js'}}"></script>

    <script src="{{'frontjs/slick.js'}}"></script>
    <script src="{{'frontjs/custom.js'}}"></script>

    <!-- <script>
        $(window).bind('load', function () {
            $('#preloader').delay(600).fadeOut('slow');
        })
    </script> -->
    <script type="text/javascript">
      $(function () {
        $(".searchbar-icon").click(function () {
          $(this).next().slideToggle();
        });
        $(".searchbar-info .btn-crss").click(function () {
          $(this).parents(".searchbar-info").slideUp();
        });
        $(window).on("scroll", function () {
          if ($(window).scrollTop() > 500) {
            $(".scroll-top").fadeIn();
          } else {
            $(".scroll-top").fadeOut();
          }
        });
        $(".scroll-top").click(function () {
          console.log("ffff");
          $("html,body").animate({ scrollTop: 0 }, 500);
        });

        $(".country-slide").slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          arrows: true,
          dots: false,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                arrows: false,
                slidesToShow: 3,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,
              },
            },
          ],
        });
      });
    </script>