@extends('main')
@section('content')

  <section class="section section-lg bg-gray-100 pt-0">
    <div class="container">
        <h3 class="wow slideInDown mt-3">Галерея</h3>
          
          <div class=" wow fadeInUpSmall row mt-3" data-lightgallery="group">

          


          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/1.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/1.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/2.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/2.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/3.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/3.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/4.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/4.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/5.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/5.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>



          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/6.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/6.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>


          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/7.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/7.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/8.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/8.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/9.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/9.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/9.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/10.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
            <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/gallery/0.jpg') }}">
              <figure>
                <img src="{{ asset('/images/gallery/0.jpg') }}" alt=""> 
              </figure>
            </a>
          </div>
          
        </div>
      </div>
  </section>




@endsection