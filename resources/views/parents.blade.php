@extends('main')
@section('content')

<section class="section section-lg">
        <div class="container">
          <div class="row row-50 row-xxl-70">
            

            <div class="col-md-6 scaleFadeInWrap">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn w-100">
                <article class="post-modern w-100"><a class="post-modern-media" href="{{ asset('/post5') }}">
                	<img src="{{ asset('images/muz_pi-1024x782.jpg') }}" alt="" ></a>
                  <h4 class="post-modern-title">
                  	<a href="{{ asset('/post5') }}">Пальчиками играем – речь развиваем</a></h4>
                </article>
              </div>
            </div>
            
            <div class="col-md-6 scaleFadeInWrap">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn">
                <article class="post-modern">
                	<a class="post-modern-media" href="{{ asset('/post5') }}">
                	<img class="img-responsive" src="{{ asset('images/_43633-1199.jpg') }}" alt="" ></a>
                  <h4 class="post-modern-title">
                  	<a href="{{ asset('/post6') }}">Развитие коммуникативных умений дошкольников</a></h4>
                </article>
              </div>
            </div>

            <div class="col-md-6 scaleFadeInWrap">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn w-100">
                <article class="post-modern w-100">
                  <a class="post-modern-media" href="{{ asset('/post4') }}">
                    <img src="{{ asset('images/sm_full.jpg') }}" alt="" >
                  </a>
                  <h4 class="post-modern-title">
                    <a href="{{ asset('/post4') }}">Учим ребенка общаться</a>
                  </h4>
                </article>
              </div>
            </div>
           
            

          </div>
        </div>
      </section>




@endsection