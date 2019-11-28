@extends('main')
@section('content')

  <section class="section section-lg bg-gray-100 pt-0">
    <div class="container">
        <h3 class="wow slideInDown mt-3">Проекты для педагогов</h3>
          
          <div class=" wow fadeInUpSmall row mt-3">
              	<h4 class="col-lg-12 font-weight-bold">Волшебная соль</h4>
          	
          		<div class="col-lg-4 col-md-4 col-sm-6 sol-xs-12 d-flex mt-4">
          			<b class="fa fa-file-pdf-o icon"></b>
	                <div class="pl-2" style="line-height: 20px;">Паспорт (pdf, 8.07МБ)<br>
	                  <a href="{{ asset('files/solt_passport.pdf') }}" style="color: rgb(6, 62, 8)">скачать</a>
	                </div>
          		</div>

          		<div class="col-lg-4 col-md-4 col-sm-6 sol-xs-12 d-flex mt-4">
          			<b class="fa fa-file-pdf-o icon"></b>
	                <div class="pl-2" style="line-height: 20px;">Проект (pdf, 8.07МБ)<br>
	                  <a href="{{ asset('files/solt_project.pdf') }}" style="color: rgb(6, 62, 8)">скачать</a> 
	                </div>
          		</div>

          		<div class="col-lg-4 col-md-4 col-sm-6 sol-xs-12 d-flex mt-4">
          			<b class="fa fa-file-pdf-o icon"></b>
	                <div class="pl-2" style="line-height: 20px;">Презентация (pptx, 18МБ)<br>
	                  <a href="{{ asset('files/solt_present.pptx') }}" style="color: rgb(6, 62, 8)">скачать</a>
	                </div>
          		</div>

          		<div class="col-lg-6 d-flex mt-4 back-img">
          			<img class="img-responsive" src="{{ asset('/images/solt/0.jpg') }}">
          			<div class="back">
          				<div class="button button-sm button-primary button-winona btn-img" onclick="open_project()">смотреть</div>
          			</div>
          		</div>

          	</div>

          	<div class=" wow fadeInUpSmall row mt-5">
              	<h4 class="col-lg-12 font-weight-bold">Моя семья</h4>

          		<div class="col-lg-4 col-md-4 col-sm-6 sol-xs-12 d-flex mt-4">
          			<b class="fa fa-file-pdf-o icon"></b>
	                <div class="pl-2" style="line-height: 20px;">Проект (pdf, 3.51МБ)<br>
	                  <a href="{{ asset('files/family_project.pdf') }}" style="color: rgb(6, 62, 8)">скачать</a> 
	                </div>
          		</div>

          		<div class="col-lg-4 col-md-4 col-sm-6 sol-xs-12 d-flex mt-4">
          			<b class="fa fa-file-pdf-o icon"></b>
	                <div class="pl-2" style="line-height: 20px;">Презентация (pptx, 17.9МБ)<br>
	                  <a href="{{ asset('files/family_project.pdf.pptx') }}" style="color: rgb(6, 62, 8)">скачать</a>
	                </div>
          		</div>

          		<div class="col-lg-6 d-flex mt-4 back-img">
          			<img class="img-responsive" src="{{ asset('/images/family/0.jpg') }}">
          			<div class="back">
          				<div class="button button-sm button-primary button-winona btn-img" onclick="open_project_family()">смотреть</div>
          			</div>
          		</div>

          	</div>

          	
          </div>
          
      </div>
  </section>




@endsection
<script type="text/javascript">
	function open_project()
	{
		$(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'images/solt/0.jpg',
            'thumb': 'images/solt/0.jpg',
            'subHtml': '<h4>1 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/1.jpg',
            'thumb': 'images/solt/1.jpg',
            'subHtml': '<h4>2 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/2.jpg',
            'thumb': 'images/solt/2.jpg',
            'subHtml': '<h4>3 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/3.jpg',
            'thumb': 'images/solt/3.jpg',
            'subHtml': '<h4>4 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/4.jpg',
            'thumb': 'images/solt/4.jpg',
            'subHtml': '<h4>5 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/5.jpg',
            'thumb': 'images/solt/5.jpg',
            'subHtml': '<h4>6 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/6.jpg',
            'thumb': 'images/solt/6.jpg',
            'subHtml': '<h4>7 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/7.jpg',
            'thumb': 'images/solt/7.jpg',
            'subHtml': '<h4>8 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/8.jpg',
            'thumb': 'images/solt/8.jpg',
            'subHtml': '<h4>9 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/9.jpg',
            'thumb': 'images/solt/9.jpg',
            'subHtml': '<h4>10 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/10.jpg',
            'thumb': 'images/solt/10.jpg',
            'subHtml': '<h4>11 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/11.jpg',
            'thumb': 'images/solt/11.jpg',
            'subHtml': '<h4>12 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/12.jpg',
            'thumb': 'images/solt/12.jpg',
            'subHtml': '<h4>13 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/13.jpg',
            'thumb': 'images/solt/13.jpg',
            'subHtml': '<h4>14 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/14.jpg',
            'thumb': 'images/solt/14.jpg',
            'subHtml': '<h4>15 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/15.jpg',
            'thumb': 'images/solt/15.jpg',
            'subHtml': '<h4>16 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/16.jpg',
            'thumb': 'images/solt/16.jpg',
            'subHtml': '<h4>17 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/17.jpg',
            'thumb': 'images/solt/17.jpg',
            'subHtml': '<h4>18 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/18.jpg',
            'thumb': 'images/solt/18.jpg',
            'subHtml': '<h4>19 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/19.jpg',
            'thumb': 'images/solt/19.jpg',
            'subHtml': '<h4>20 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/20.jpg',
            'thumb': 'images/solt/20.jpg',
            'subHtml': '<h4>21 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/21.jpg',
            'thumb': 'images/solt/21.jpg',
            'subHtml': '<h4>22 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/22.jpg',
            'thumb': 'images/solt/22.jpg',
            'subHtml': '<h4>23 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/23.jpg',
            'thumb': 'images/solt/23.jpg',
            'subHtml': '<h4>24 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/24.jpg',
            'thumb': 'images/solt/24.jpg',
            'subHtml': '<h4>25 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/25.jpg',
            'thumb': 'images/solt/25.jpg',
            'subHtml': '<h4>26 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/26.jpg',
            'thumb': 'images/solt/26.jpg',
            'subHtml': '<h4>27 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/27.jpg',
            'thumb': 'images/solt/27.jpg',
            'subHtml': '<h4>28 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/28.jpg',
            'thumb': 'images/solt/28.jpg',
            'subHtml': '<h4>29 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/29.jpg',
            'thumb': 'images/solt/29.jpg',
            'subHtml': '<h4>30 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/30.jpg',
            'thumb': 'images/solt/30.jpg',
            'subHtml': '<h4>31 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/31.jpg',
            'thumb': 'images/solt/31.jpg',
            'subHtml': '<h4>32 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/32.jpg',
            'thumb': 'images/solt/32.jpg',
            'subHtml': '<h4>33 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/33.jpg',
            'thumb': 'images/solt/33.jpg',
            'subHtml': '<h4>34 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/34.jpg',
            'thumb': 'images/solt/34.jpg',
            'subHtml': '<h4>35 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/35.jpg',
            'thumb': 'images/solt/35.jpg',
            'subHtml': '<h4>36 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/36.jpg',
            'thumb': 'images/solt/36.jpg',
            'subHtml': '<h4>37 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/37.jpg',
            'thumb': 'images/solt/37.jpg',
            'subHtml': '<h4>38 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/38.jpg',
            'thumb': 'images/solt/38.jpg',
            'subHtml': '<h4>39 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/39.jpg',
            'thumb': 'images/solt/39.jpg',
            'subHtml': '<h4>40 СЛАЙД</h4>'
        }, {
            "src": 'images/solt/40.jpg',
            'thumb': 'images/solt/40.jpg',
            'subHtml': '<h4>41 СЛАЙД</h4>'
        }
        ]
    })

	}

	function open_project_family()
	{
		$(this).lightGallery({
        dynamic: true,
        dynamicEl: [{
            "src": 'images/family/0.jpg',
            'thumb': 'images/family/0.jpg',
            'subHtml': '<h4>1 СЛАЙД</h4>'
        }, {
            "src": 'images/family/1.jpg',
            'thumb': 'images/family/1.jpg',
            'subHtml': '<h4>2 СЛАЙД</h4>'
        }, {
            "src": 'images/family/2.jpg',
            'thumb': 'images/family/2.jpg',
            'subHtml': '<h4>3 СЛАЙД</h4>'
        }, {
            "src": 'images/family/3.jpg',
            'thumb': 'images/family/3.jpg',
            'subHtml': '<h4>4 СЛАЙД</h4>'
        }, {
            "src": 'images/family/4.jpg',
            'thumb': 'images/family/4.jpg',
            'subHtml': '<h4>5 СЛАЙД</h4>'
        }, {
            "src": 'images/family/5.jpg',
            'thumb': 'images/family/5.jpg',
            'subHtml': '<h4>6 СЛАЙД</h4>'
        }, {
            "src": 'images/family/6.jpg',
            'thumb': 'images/family/6.jpg',
            'subHtml': '<h4>7 СЛАЙД</h4>'
        }, {
            "src": 'images/family/7.jpg',
            'thumb': 'images/family/7.jpg',
            'subHtml': '<h4>8 СЛАЙД</h4>'
        }, {
            "src": 'images/family/8.jpg',
            'thumb': 'images/family/8.jpg',
            'subHtml': '<h4>9 СЛАЙД</h4>'
        }, {
            "src": 'images/family/9.jpg',
            'thumb': 'images/family/9.jpg',
            'subHtml': '<h4>10 СЛАЙД</h4>'
        }, {
            "src": 'images/family/10.jpg',
            'thumb': 'images/family/10.jpg',
            'subHtml': '<h4>11 СЛАЙД</h4>'
        }, {
            "src": 'images/family/11.jpg',
            'thumb': 'images/family/11.jpg',
            'subHtml': '<h4>12 СЛАЙД</h4>'
        }, {
            "src": 'images/family/12.jpg',
            'thumb': 'images/family/12.jpg',
            'subHtml': '<h4>13 СЛАЙД</h4>'
        }, {
            "src": 'images/family/13.jpg',
            'thumb': 'images/family/13.jpg',
            'subHtml': '<h4>14 СЛАЙД</h4>'
        }, {
            "src": 'images/family/14.jpg',
            'thumb': 'images/family/14.jpg',
            'subHtml': '<h4>15 СЛАЙД</h4>'
        }, {
            "src": 'images/family/15.jpg',
            'thumb': 'images/family/15.jpg',
            'subHtml': '<h4>16 СЛАЙД</h4>'
        }, {
            "src": 'images/family/16.jpg',
            'thumb': 'images/family/16.jpg',
            'subHtml': '<h4>17 СЛАЙД</h4>'
        }, {
            "src": 'images/family/17.jpg',
            'thumb': 'images/family/17.jpg',
            'subHtml': '<h4>18 СЛАЙД</h4>'
        }, {
            "src": 'images/family/18.jpg',
            'thumb': 'images/family/18.jpg',
            'subHtml': '<h4>19 СЛАЙД</h4>'
        }, {
            "src": 'images/family/19.jpg',
            'thumb': 'images/family/19.jpg',
            'subHtml': '<h4>20 СЛАЙД</h4>'
        }, {
            "src": 'images/family/20.jpg',
            'thumb': 'images/family/20.jpg',
            'subHtml': '<h4>21 СЛАЙД</h4>'
        }, {
            "src": 'images/family/21.jpg',
            'thumb': 'images/family/21.jpg',
            'subHtml': '<h4>22 СЛАЙД</h4>'
        }, {
            "src": 'images/family/22.jpg',
            'thumb': 'images/family/22.jpg',
            'subHtml': '<h4>23 СЛАЙД</h4>'
        }, {
            "src": 'images/family/23.jpg',
            'thumb': 'images/family/23.jpg',
            'subHtml': '<h4>24 СЛАЙД</h4>'
        }, {
            "src": 'images/family/24.jpg',
            'thumb': 'images/family/24.jpg',
            'subHtml': '<h4>25 СЛАЙД</h4>'
        }, {
            "src": 'images/family/25.jpg',
            'thumb': 'images/family/25.jpg',
            'subHtml': '<h4>26 СЛАЙД</h4>'
        }, {
            "src": 'images/family/26.jpg',
            'thumb': 'images/family/26.jpg',
            'subHtml': '<h4>27 СЛАЙД</h4>'
        }, {
            "src": 'images/family/27.jpg',
            'thumb': 'images/family/27.jpg',
            'subHtml': '<h4>28 СЛАЙД</h4>'
        }, {
            "src": 'images/family/28.jpg',
            'thumb': 'images/family/28.jpg',
            'subHtml': '<h4>29 СЛАЙД</h4>'
        }
        ]
    })

	}
</script>