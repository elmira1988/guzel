@extends('main')
@section('content')


      <!-- FScreen-->
      <section class="section section-halfscreen">
        <div class="section-halfscreen-inner">
          <div class="section-halfscreen-image wow fadeIn" style="background-image: url(images/main1.jpg);"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <div class="section-halfscreen-content">
                  <div class="wow-outer divider-small-outer">
                    <div class="divider-small wow fadeInLeft"></div>
                  </div>
                  <div class="wow-outer heading-3">
                    <h3 class="wow fadeInUp" data-wow-delay=".2s">
                      <span class="font-weight-light">Участник конкурса</span><br>
                      <span class="font-weight-bold">Педагог года 2019</span></h3>
                  </div>
                  <div class="wow-outer p">
                    <p class="wow fadeInDown" data-wow-delay=".2s">Меня зовут Давлетшина Гузель Халитовна, я рада приветствовать Вас на своем личном сайте. </p>
                    <p class="wow fadeInDown" data-wow-delay=".2s">Здесь много полезного как для родителей, так и для коллег-педагогов!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Small Features-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-30">
            <div class="col--lg-12 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon linearicons-feather3 wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown">Обо мне</h4>
                  <p class="wow fadeInUpSmall">Александр Сергеевич Пушкин родился 6 июня 1799 года (по старому стилю 26 мая) в Москве в дворянской помещичьей семье (отец его был майор в отставке) в день праздника Вознесения. В тот же день у императора Павла родилась внучка, в честь которой во всех церквах шли молебны и гудели колокола. Так, по случайному совпадению день рождения русского гения был ознаменован всеобщим народным ликованием. Символично и место рождения поэта г. Москва - самое сердце русской жизни, России. Будущего поэта крестили 8 июня в церкви Богоявления в Елохове.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <span id="hobby"></span>
      <section class="section section-lg bg-gray-100 pt-0">
        <div class="container">
          <div class="row row-30">
            <div class="col--lg-12 wow-outer">
              <!-- Box Minimal-->
              <article class="box-minimal">
                <div class="box-minimal-icon linearicons-star wow fadeIn"></div>
                <div class="box-minimal-main wow-outer">
                  <h4 class="box-minimal-title wow slideInDown">Мои хобби</h4>
                  <p class="wow fadeInUpSmall">Хобби-это увлечение, любимое занятие на досуге. Я очень люблю петь и танцевать.
                    <blockquote class="quote-light mt-1">
                      <svg class="quote-light-mark" x="0px" y="0px" width="15px" viewBox="0 0 35 25">
                        <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                      </svg>
                      <div class="quote-light-text mt-1" style="font-size:16px;"><i>
                        <p>Найдите для себя время. Потанцуйте. Это так оживляет, вдохновляет и захватывает! Когда ты танцуешь — ты живёшь!</p></i>
                      </div>
                    </blockquote>

                    <blockquote class="quote-light mt-1">
                      <svg class="quote-light-mark" x="0px" y="0px" width="15px" viewBox="0 0 35 25">
                        <path d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z"></path>
                      </svg>
                      <div class="quote-light-text mt-1" style="font-size:16px;"><i>
                        <p>Пойте! - ведь пение оживляет душу!</p></i>
                      </div>
                    </blockquote>
                  </p>
                  <p class="wow fadeInUpSmall"><div class="row" data-lightgallery="group">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
                  <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/hobby/1.jpg') }}">
                    <figure>
                      <img src="{{ asset('/images/hobby/1.jpg') }}" alt=""> 
                    </figure>
                  </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
                  <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/hobby/2.jpg') }}">
                    <figure>
                      <img src="{{ asset('/images/hobby/2.jpg') }}" alt=""> 
                    </figure>
                  </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
                  <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/hobby/3.jpg') }}">
                    <figure>
                      <img src="{{ asset('/images/hobby/3.jpg') }}" alt=""> 
                    </figure>
                  </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 offset-top-20 mt-3">
                  <a class="thumbnail-classic" data-lightgallery="item" href="{{ asset('/images/hobby/4.jpg') }}">
                    <figure>
                      <img src="{{ asset('/images/hobby/4.jpg') }}" alt=""> 
                    </figure>
                  </a>
                </div>

                
              </div></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>




@endsection