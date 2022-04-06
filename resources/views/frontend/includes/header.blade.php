<nav class="navbar d-block navbar-expand-lg fixed-top header">
      <div class="container">
        <div
          class="bgColorWhite font_12 d-flex justify-content-between align-items-center headerTop">
          <div class="col opentime">
            <h5><span>Opening Time :</span> 8:30 AM - 9:30 PM</h5>
          </div>

          <div class="col text-end">
            <div class="location-rght-apply">
              <a class="location" href="#"
                ><i class="mapicon" aria-hidden="true"
                  ><img src="{{ url('/frontassets/images/mapicon.png') }}" alt=""
                /></i>
                Our Location</a>
              <a class="applynow desktop-appy" href="#">Apply Now</a>
            </div>
          </div>
        </div>

        <div
          class="d-flex justify-content-between align-items-center headerMain"
        >
          <div class="col-sm-3 headerNavLeft">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ url('/frontassets/images/logo.png') }}" alt="logo" />
            </a>
          </div>
          <div
            class="col-6 text-center justify-content-end collapse navbar-collapse topMenu"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url('/services') }}">Services</a></li>
                  <li>
                    <a class="dropdown-item" href="{{ url('/services/student-visa') }}">Services Details</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">about us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">faq</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">contact us</a>
              </li>
            </ul>
            <div class="mobile-visible">
              <a class="applynow" href="#">Apply Now</a>
              <div class="contactinfo">
                <span class="callicon"
                  ><img src="{{ url('/frontassets/images/calicon.png') }}" alt="call-icon"
                /></span>
                <div class="carttext">
                  <span class="shoppingttle">Contact Us</span>
                  <span class="iteamdisplay">(111) 5802 3059</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3 call-contact">
            <div class="searchbar">
              <div class="searchbar-icon">
                <img src="{{ url('/frontassets/images/search-icon.png') }}" alt="search-icon" />
              </div>
              <div class="searchbar-info">
                <div class="container">
                  <form action="">
                    <div class="input-group">
                      <input type="text" class="form-control sechinput" />
                      <span class="input-group-text searchicon-dv"
                        ><button class="search-submit">
                          <img
                            src="{{ url('/frontassets/images/search-icon.png') }}"
                            alt="search-icon"
                          /></button
                      ></span>
                      <span class="input-group-text srchcross"
                        ><button
                          type="button"
                          class="btn-crss"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button
                      ></span>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="contactinfo desktop-appy">
              <span class="callicon"
                ><img src="{{ url('/frontassets/images/calicon.png') }}" alt="call-icon"
              /></span>
              <div class="carttext">
                <span class="shoppingttle">Contact Us</span>
                <span class="iteamdisplay">(111) 5802 3059</span>
              </div>
            </div>
          </div>
          <button
            class="navbar-toggler menuTriger collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>

    <div class="full_width navbarHeight"></div>