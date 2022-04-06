<div class="full_width services-section text-center">
      <div class="container">
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
                     $newText = wordwrap(substr($service->service_description, 0, 100), 99, '...');
                     
                !!}
               
                </p>
                <a href="#"
                  >Read More
                  <i class="rightarrow" aria-hidden="true"
                    ><img src="{{ url('/frontassets/images/rightarrow.png') }}" alt="rightarrow" /></i
                ></a>
              </div>
            </div>
        </div>     
   @endforeach
        </div>

      </div>
    </div>