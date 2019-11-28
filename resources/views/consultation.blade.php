@extends('main')
@section('content')

<section class="section section-lg">
        <div class="container">
          <div class="row row-50 row-xxl-70">
            <div class="col-md-6 scaleFadeInWrap">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn w-100">
                <article class="post-modern w-100">
                	<a class="post-modern-media" href="{{ asset('/post1') }}">
                		<img src="{{ asset('images/sotsialno-kommunikativnoe-razvitie.png') }}" alt="" >
                	</a>
                  <h4 class="post-modern-title">
                  	<a href="{{ asset('/post1') }}">Социально-коммуникативное развитие дошкольника</a>
                  </h4>
                </article>
              </div>
            </div>


            <div class="col-md-6 scaleFadeInWrap">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn w-100">
                <article class="post-modern w-100">
                	<a class="post-modern-media" href="{{ asset('/post1') }}">
                	<img src="{{ asset('images/385185_1.jpeg') }}" alt="" ></a>
                  <h4 class="post-modern-title">
                  	<a href="{{ asset('/post2') }}">Cамостоятельность, трудовое воспитание, самообслуживание</a></h4>
                </article>
              </div>
            </div>

            <div class="col-md-6 scaleFadeInWrap">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn w-100">
                <article class="post-modern w-100">
                	<a class="post-modern-media" href="{{ asset('/post3') }}">
                	<img src="{{ asset('images/image.jpg') }}" alt="" ></a>
                  <h4 class="post-modern-title">
                  	<a href="{{ asset('/post3') }}">Пальчиковые игры "Моя семья"</a></h4>
                </article>
              </div>
            </div>
           
            

          </div>
        </div>
      </section>




@endsection