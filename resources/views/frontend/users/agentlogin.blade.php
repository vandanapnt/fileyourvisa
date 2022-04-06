@extends('frontend.layouts.app')

@section('content')

<div class="full_width login-section">
      <div class="full_width login-pnl">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-12">
              <div class="full_width contact-us-info">
                <h4 class="font_40 font700 colorBlack">Login</h4>
                <div class="full_width contact-us-info-form">
                @include('flash::message')
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>
                        <i class="fas fa-exclamation-triangle"></i> @lang('Please fix the following errors & try again!')
                    </p>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                  <form class="contactform" method="POST" action="{{ url('/makelogin')  }}">
                    @csrf
                        <!-- redirectTo URL -->
                        <input type="hidden" name="redirectTo" value="{{ url('/')  }}">

                      <!-- request()->redirectTo -->
                    <div class="row">
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <input
                          type="email"
                          class="form-control getinput"
                          id="email" name="email" value="{{ old('email') }}"
                          placeholder="Email" required
                        />
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <input
                          type="password"
                          class="form-control getinput"
                          id="password" name="password" 
                          placeholder="Password" required
                        />
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <button
                          class="cmnBtn font_16 bgcolorred colorWhite radius-2">
                          Login
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

