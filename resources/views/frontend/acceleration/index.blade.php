<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ICT Startup Acceleration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,500,1,0" />

    <link rel="stylesheet" href="{{ url('acceleration/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('acceleration/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url('acceleration/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('acceleration/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('acceleration/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ url('acceleration/css/aos.css') }}">

    <link rel="stylesheet" href="{{ url('acceleration/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ url('acceleration/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('acceleration/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ url('acceleration/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('acceleration/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('acceleration/css/style.css') }}">
	<style>
    #hero {
			background-image:
			linear-gradient(to bottom, #005aea94 , #ffff),
			url({{ url("acceleration/images/bg.jpg") }});
		}
    .programmeDetails{
        font-size: 18px;
        font-family: 'Times New Roman', Courier, monospace;
    }

    /* snow starts */
  @import url('https://fonts.googleapis.com/css?family=Corben:700');
  .snow {
    position: absolute;
    min-width: 100vw;
    min-height: 100vh;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
  }

  .snow .svg {
    position: absolute;
    width: 100%;
    height: 100%;
  }

  #snow-top-layer {
    will-change: transform;
    transform: translateY(-768px);
    animation: fall 22.5s infinite linear;
  }

  #snow-bottom-layer {
    will-change: transform;
    transform: translateY(-768px);
    animation: fall 45s infinite linear;
  }

  @keyframes fall {
    
    100% {
      transform: translateY(0);
    }
    
  }
  /* snow ends */
  
  /* timelines here  */
  /* Timeline */
  @import url(https://fonts.googleapis.com/css?family=Cinzel:700);

/* Timeline */
.timeline,
.timeline-horizontal {
  list-style: none;
  padding: 20px;
  position: relative;
}
.timeline:before {
  top: 40px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline .timeline-item {
  margin-bottom: 20px;
  position: relative;
}
.timeline .timeline-item:before,
.timeline .timeline-item:after {
  content: "";
  display: table;
}
.timeline .timeline-item:after {
  clear: both;
}
.timeline .timeline-item .timeline-badge {
  color: #fff;
  width: 54px;
  height: 54px;
  line-height: 52px;
  font-size: 22px;
  text-align: center;
  position: absolute;
  top: 18px;
  left: 50%;
  margin-left: -25px;
  background-color: #bbdefb;
  border: 3px solid #ffffff;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline .timeline-item .timeline-badge i,
.timeline .timeline-item .timeline-badge .fa,
.timeline .timeline-item .timeline-badge .glyphicon {
  top: 2px;
  left: 0px;
}
.timeline .timeline-item .timeline-badge.primary {
  background-color: #bbdefb;
}
.timeline .timeline-item .timeline-badge.info {
  background-color: #26c6da;
}
.timeline .timeline-item .timeline-badge.success {
  background-color: #80DEEA;
}
.timeline .timeline-item .timeline-badge.warning {
  background-color: #a7ffeb;
}
.timeline .timeline-item .timeline-badge.danger {
  background-color: #42a5f5;
}
.timeline .timeline-item .timeline-panel {
  position: relative;
  width: 46%;
  float: left;
  right: 16px;
  border: 1px solid #c0c0c0;
  background: #ffffff;
  border-radius: 2px;
  padding: 20px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline .timeline-item .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -16px;
  display: inline-block;
  border-top: 16px solid transparent;
  border-left: 16px solid #c0c0c0;
  border-right: 0 solid #c0c0c0;
  border-bottom: 16px solid transparent;
  content: " ";
}
.timeline .timeline-item .timeline-panel .timeline-title {
  margin-top: 0;
  font-size: 25px;
  font-family: 'Times New Roman', cursive; 
  color: #0c0c0c
}
.timeline .timeline-item .timeline-panel .timeline-body > p,
.timeline .timeline-item .timeline-panel .timeline-body > ul {
  margin-bottom: 0;
  font-family: 'Cinzel',sans-serif;
  color: #a79898;
}
.timeline .timeline-item .timeline-panel .timeline-body > p + p {
  margin-top: 0px;
}
.timeline .timeline-item:last-child:nth-child(even) {
  float: right;
}
.timeline .timeline-item:nth-child(even) .timeline-panel {
  float: right;
  left: 16px;
}
.timeline .timeline-item:nth-child(even) .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-horizontal {
  list-style: none;
  position: relative;
  padding: 20px 0px 20px 0px;
  display: inline-block;
}
.timeline-horizontal:before {
  height: 3px;
  top: auto;
  bottom: 26px;
  left: 56px;
  right: 0;
  width: 100%;
  margin-bottom: 20px;
}
.timeline-horizontal .timeline-item {
  display: table-cell;
  height: 280px;
  width: 20%;
  min-width: 320px;
  float: none !important;
  padding-left: 0px;
  padding-right: 20px;
  margin: 0 auto;
  vertical-align: bottom;
}
.timeline-horizontal .timeline-item .timeline-panel {
  top: auto;
  bottom: 64px;
  display: inline-block;
  float: none !important;
  left: 0 !important;
  right: 0 !important;
  width: 100%;
  margin-bottom: 20px;
}
.timeline-horizontal .timeline-item .timeline-panel:before {
  top: auto;
  bottom: -16px;
  left: 28px !important;
  right: auto;
  border-right: 16px solid transparent !important;
  border-top: 16px solid #c0c0c0 !important;
  border-bottom: 0 solid #c0c0c0 !important;
  border-left: 16px solid transparent !important;
}
.timeline-horizontal .timeline-item:before,
.timeline-horizontal .timeline-item:after {
  display: none;
}
.timeline-horizontal .timeline-item .timeline-badge {
  top: auto;
  bottom: 0px;
  left: 43px;
}
/* timelines ends here  */

/* about section custorm */
h1,
h2,
h3,
h4,
h5,
h6 {}
a,
a:hover,
a:focus,
a:active {
    text-decoration: none;
    outline: none;
}
        
a,
a:active,
a:focus {
    color: #6f6f6f;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}
        
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
img {
    max-width: 100%;
    height: auto;
}
section {
    padding: 60px 0;
    /* min-height: 100vh;*/
}

.sec-title{
  position:relative;
  z-index: 1;
  margin-bottom:60px;
}

.sec-title .title{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 24px;
  color: #00aeef;
  font-weight: 500;
  margin-bottom: 15px;
}

.sec-title h2{
  position: relative;
  display: block;
  font-size:40px;
  line-height: 1.28em;
  color: #222222;
  font-weight: 600;
  padding-bottom:18px;
}

.sec-title h2:before{
  position:absolute;
  content:'';
  left:0px;
  bottom:0px;
  width:50px;
  height:3px;
  background-color:#d1d2d6;
}

.sec-title .text{
  position: relative;
  font-size: 16px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
  margin-top: 35px;
}

.sec-title.light h2{
  color: #ffffff;
}

.sec-title.text-center h2:before{
  left:50%;
  margin-left: -25px;
}

.list-style-one{
  position:relative;
}

.list-style-one li{
  position:relative;
  font-size:16px;
  line-height:26px;
  color: #222222;
  font-weight:400;
  padding-left:35px;
  margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #ff2222;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover{
  color: #44bce2;
}

.btn-style-one{
  position: relative;
  display: inline-block;
  font-size: 17px;
  line-height: 30px;
  color: #ffffff;
  padding: 10px 30px;
  font-weight: 600;
  overflow: hidden;
  letter-spacing: 0.02em;
  background-color: #00aeef;
}

.btn-style-one:hover{
  background-color: #0794c9;
  color: #ffffff;
}
.about-section{
  position: relative;
  padding: 120px 0 70px;
}

.about-section .sec-title{
  margin-bottom: 45px;
}

.about-section .content-column{
  position: relative;
  margin-bottom: 50px;
}

.about-section .content-column .inner-column{
  position: relative;
  padding-left: 30px;
}

.about-section .text{
  margin-bottom: 20px;
  font-size: 16px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
}

.about-section .list-style-one{
  margin-bottom: 45px;
}

.about-section .btn-box{
  position: relative;
}

.about-section .btn-box a{
  padding: 15px 50px;
}

.about-section .image-column{
  position: relative;
}

.about-section .image-column .text-layer{
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column{
  position: relative;
  padding-left: 80px;
  padding-bottom: 0px;
}
.about-section .image-column .inner-column .author-desc{
    position: absolute;
    bottom: 16px;
    z-index: 1;
    background: orange;
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
}
.about-section .image-column .inner-column .author-desc h2{
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #fff;
  margin: 0;
}
.about-section .image-column .inner-column .author-desc span{
    font-size: 16px;
    letter-spacing: 6px;
    text-align: center;
    color: #fff;
  display: block;
  font-weight: 400;
}
.about-section .image-column .inner-column:before{
    content: '';
    position: absolute;
    width: calc(50% + 80px);
    height: calc(100% + 160px);
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;
    border: 44px solid #00aeef;
}

.about-section .image-column .image-1{
  position: relative;
}
.about-section .image-column .image-2{
  position: absolute;
  left: 0;
  bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
      border-radius: 46px;
}

.about-section .image-column .video-link{
  position: absolute;
  left: 70px;
  top: 170px;
}

.about-section .image-column .video-link .link{
  position: relative;
  display: block;
  font-size: 22px;
  color: #191e34;
  font-weight: 400;
  text-align: center;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color: #ffffff;
  border-radius: 50%;
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
  background-color: #191e34;
  color: #f
}
  /* end about section custorm  */

  /* STAGES section  */
  .section-services {
	padding-top: 110px;
	padding-bottom: 120px;
	font-family: "Poppins", sans-serif;
	background-color: #211f24;
	color: #fff;
}

.section-services .header-section {
	margin-bottom: 35px;
}

.section-services .header-section .title {
	position: relative;
	margin-bottom: 40px;
	padding-bottom: 25px;
	text-transform: uppercase;
	font-weight: 700;
}

.section-services .header-section .title:before {
	content: "";
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	width: 140px;
	height: 1px;
	background-color: #f70037;
}

.section-services .header-section .title:after {
	content: "";
	position: absolute;
	bottom: -1px;
	left: 50%;
	transform: translateX(-50%);
	width: 45px;
	height: 3px;
	background-color: #f70037;
}

.section-services .header-section .title span {
	color: #f70037;
}

.section-services .header-section .description {
	color: #6f6f71;
}

.section-services .single-service {
	margin-top: 40px;
	background-color: #24252a;
	box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
}

.section-services .single-service .part-1 {
	padding: 40px 40px 25px;
	border-bottom: 2px solid #1d1e23;
}

.section-services .single-service .part-1 i {
	margin-bottom: 25px;
	font-size: 50px;
	color: #f70037;
}

.section-services .single-service .part-1 .title {
	font-size: 17px;
	font-weight: 700;
	letter-spacing: 0.02em;
	line-height: 1.8em;
}

.section-services .single-service .part-2 {
	padding: 30px 40px 40px;
}

.section-services .single-service .part-2 .description {
	margin-bottom: 22px;
	color: #6f6f71;
	font-size: 14px;
	line-height: 1.8em;
}

.section-services .single-service .part-2 a {
	color: #fff;
	font-size: 14px;
	text-decoration: none;
}

.section-services .single-service .part-2 a i {
	margin-right: 10px;
	color: #f70037;
}
/* stages section  */
	</style>
  <link href="https://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise" rel="stylesheet" type="text/css"/>
  </head>
  <body>  
    <div id="hero" class="hero-wrap" data-stellar-background-ratio="0.5">
      <!-- snow starts here  -->
      <div class="snow">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
        <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
        <g id="snow-bottom-layer">
          <ellipse cx="6" cy="1009.5" rx="6" ry="5.5"/>
          <ellipse cx="138" cy="1110.5" rx="6" ry="5.5"/>
          <ellipse cx="398" cy="1055.5" rx="6" ry="5.5"/>
          <ellipse cx="719" cy="1284.5" rx="6" ry="5.5"/>
          <ellipse cx="760" cy="1155.5" rx="6" ry="5.5"/>
          <ellipse cx="635" cy="1459.5" rx="6" ry="5.5"/>
          <ellipse cx="478" cy="1335.5" rx="6" ry="5.5"/>
          <ellipse cx="322" cy="1414.5" rx="6" ry="5.5"/>
          <ellipse cx="247" cy="1234.5" rx="6" ry="5.5"/>
          <ellipse cx="154" cy="1425.5" rx="6" ry="5.5"/>
          <ellipse cx="731" cy="773.5" rx="6" ry="5.5"/>
          <ellipse cx="599" cy="874.5" rx="6" ry="5.5"/>
          <ellipse cx="339" cy="819.5" rx="6" ry="5.5"/>
          <ellipse cx="239" cy="1004.5" rx="6" ry="5.5"/>
          <ellipse cx="113" cy="863.5" rx="6" ry="5.5"/>
          <ellipse cx="102" cy="1223.5" rx="6" ry="5.5"/>
          <ellipse cx="395" cy="1155.5" rx="6" ry="5.5"/>
          <ellipse cx="826" cy="943.5" rx="6" ry="5.5"/>
          <ellipse cx="626" cy="1054.5" rx="6" ry="5.5"/>
          <ellipse cx="887" cy="1366.5" rx="6" ry="5.5"/>
          <ellipse cx="6" cy="241.5" rx="6" ry="5.5"/>
          <ellipse cx="138" cy="342.5" rx="6" ry="5.5"/>
          <ellipse cx="398" cy="287.5" rx="6" ry="5.5"/>
          <ellipse cx="719" cy="516.5" rx="6" ry="5.5"/>
          <ellipse cx="760" cy="387.5" rx="6" ry="5.5"/>
          <ellipse cx="635" cy="691.5" rx="6" ry="5.5"/>
          <ellipse cx="478" cy="567.5" rx="6" ry="5.5"/>
          <ellipse cx="322" cy="646.5" rx="6" ry="5.5"/>
          <ellipse cx="247" cy="466.5" rx="6" ry="5.5"/>
          <ellipse cx="154" cy="657.5" rx="6" ry="5.5"/>
          <ellipse cx="731" cy="5.5" rx="6" ry="5.5"/>
          <ellipse cx="599" cy="106.5" rx="6" ry="5.5"/>
          <ellipse cx="339" cy="51.5" rx="6" ry="5.5"/>
          <ellipse cx="239" cy="236.5" rx="6" ry="5.5"/>
          <ellipse cx="113" cy="95.5" rx="6" ry="5.5"/>
          <ellipse cx="102" cy="455.5" rx="6" ry="5.5"/>
          <ellipse cx="395" cy="387.5" rx="6" ry="5.5"/>
          <ellipse cx="826" cy="175.5" rx="6" ry="5.5"/>
          <ellipse cx="626" cy="286.5" rx="6" ry="5.5"/>
          <ellipse cx="887" cy="598.5" rx="6" ry="5.5"/>
        </g>
        </g>
        <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
        <g id="snow-top-layer">
          <circle cx="8" cy="776" r="8"/>
          <circle cx="189" cy="925" r="8"/>
          <circle cx="548" cy="844" r="8"/>
          <circle cx="685" cy="1115" r="8"/>
          <circle cx="858" cy="909" r="8"/>
          <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)"/>
          <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)"/>
          <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)"/>
          <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)"/>
          <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)"/>
          <circle cx="8" cy="8" r="8"/>
          <circle cx="189" cy="157" r="8"/>
          <circle cx="548" cy="76" r="8"/>
          <circle cx="685" cy="347" r="8"/>
          <circle cx="858" cy="141" r="8"/>
          <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)"/>
          <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)"/>
          <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)"/>
          <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)"/>
          <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)"/>
        </g>
        </g>
    </svg>
    </div>
    <!-- snow ends here  -->
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <span style="color:white">iMBEJU Program</span></h1>
            <p style="color:white" class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span style="color:white" class="icon-calendar mr-2"></span>10 February 2023 - 10 April 2023</p>
            <div id="timer" class="d-flex">
              <div style="color:white" class="time" id="days"></div>
              <div style="color:white" class="time pl-3" id="hours"></div>
              <div style="color:white" class="time pl-3" id="minutes"></div>
              <div style="color:white" class="time pl-3" id="seconds"></div>
			      </div>
          </div>
          
          <div class="col-lg-6 col-md-4 mt-0 mt-md-5">
          	<form action="#" class="request-form ftco-animate">
          		<h2 class="h2  text-center text-primary" style="font-size:28px;font-family: 'Verdana', Courier, monospace">ACCELERATION PROGRAMME</h2>
	    				<div class="form-group">
								<div class="checkbox">
								   <label>The <a href="https://softcenter.ictc.go.tz/" target="blank"><b style="color: rgb(32, 136, 240);">ICT Commission's</b></a> Digital Acceleration Programme in partnership with <a href="https://crdbbank.co.tz/en" target="blank"><b style="color: rgb(40, 195, 9);">CRDB Foundation
								</b></a> is pleased to invite teams of innovators to join the iMBEJU Program 
								which offers business acceleration facilitation to business ready startup companies with ICT or ICT enabled solutions.</label>
								</div>
							</div>
	            <div class="form-group">
	              <a href="{{Route('applyToProgram')}}" class="btn btn-primary py-3 px-4">Apply Now</a>
	            </div>
	    	    </form>
          </div>
          <div class="" style="display: flex;flex-wrap: nowrap;">
            <div style="text-align: center;line-height: 175px;"><a href="https://crdbbank.co.tz/en" target="blank"><img src='{{ url("acceleration/images/sponsors/logo1.png") }}' width="100%"></a></div>
            <div style="text-align: center;line-height: 175px;"><a href="https://crdbbank.co.tz/en" target="blank"><img src='{{ url("acceleration/images/sponsors/logo3.png") }}' width="100%"></a></div>
            <div style="text-align: center;line-height: 175px;"><a href="https://www.ictc.go.tz/" target="blank"><img src='{{ url("acceleration/images/sponsors/logo2.png") }}' width="100%"></a></div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-12">
            <div style="display:inline-block;width:100%;overflow-y:auto;">
            <ul class="timeline timeline-horizontal">
              <li class="timeline-item">
                <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">March 11 <sup>th</sup></h4>
                  </div>
                  <div class="timeline-body">
                    <p>Call for Applications</p>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">April 10 <sup>th</sup></h4>
                  </div>
                  <div class="timeline-body">
                    <p>Deadline to Apply</p>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">April 22 <sup>nd</sup></h4>
                  </div>
                  <div class="timeline-body">
                    <p>Start-Ups application reviewed and eligible applicants selected.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">April 29 <sup>th</sup></h4>
                  </div>
                  <div class="timeline-body">
                    <p>Short-Listed Start-Ups Enter Due</p>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">May 15<sup>th</sup></h4>
                  </div>
                  <div class="timeline-body">
                    <p>Acceleration program commencement</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="about-section" style='background-color:#E9EEF2'>
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About iMBEJU</span>
                            <h2>Concerning the Programme</h2>
                        </div>
                        <div class="text">The Programme seeks to identfy and select from a diverse group of ambitious, entrepreneurial-minded innovators building products, services and companies that are disruptive and transformative in nature, and that can harness the power of the Digital Economy to drive Tanzanian's entry into the Forth Industrial Revolution.</div>
                      <!-- <div class="text">
                      Through this programme, Digital Starts-Ups will be paired with an extensive network of mentors, industry experts and leaders, educated in product design, service roll-out and implementation, business modelling and mass distribution channels, will be provided access to institutional and corporate partners including an opportunity to partner with CRDB Bank's Digital Innovations services, and free working space.
                      </div> -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one">Apply Now</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                      <div class="author-desc">
                        <h2>iMBEJU</h2>
                        <span>Program</span>
                      </div>
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src='{{ url("acceleration/images/aboutSection.jpg") }}' alt=""></a></figure>
                     
                    </div>
                </div>
              
            </div>
        </div>
    </section>

    <section class="section-services">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-10 col-lg-8">
					<div class="header-section">
						<h2 class="title"><span style="color:white">Funding</span> <span style="color:white">Categories</span></h2>
						<!-- <p class="description">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some injected humour</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Start Single Service -->
				<div class="col-md-6 col-lg-6">
					<div class="single-service">
						<div class="part-1">
							<i class="fab fa-500px"></i>
							<h3 class="title" style="color:white">Pilot Stage (Market Entry State - MVP)</h3>
						</div>
						<div class="part-2">
							<p class="description">
                <ul>
                  <li>Goal is to conduct Pilot for six (6) months</li>
                  <li>Startup has a fully working MVP</li>
                  <li>Start-Up is entering the to aquire initial customers (Pilot Customers)</li>
                  <li>Duration of this fund is maximum 6 months Run-way budget</li>
                </ul>
              </p>
							<div class="btn-box">
                  <a href="#" class="theme-btn btn-style-one">Apply Now</a>
              </div>
						</div>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Start Single Service -->
				<div class="col-md-6 col-lg-6">
					<div class="single-service">
						<div class="part-1">
							<i class="fab fa-angellist"></i>
							<h3 class="title" style="color:white">Scaling Stage</h3>
						</div>
						<div class="part-2">
							<p class="description">
              <ul>
                  <li>Goal is to scale your solution to thousands of customers outside your radius</li>
                  <li>Mid-size or Large-size company</li>
                  <li>Has generated Revenue of at-least 30% of the requested funding size</li>
                  <li>Submit Audited Financial Statements</li>
                  <li>Has at-least 5 ful time employees</li>
                </ul>
              </p>
							<div class="btn-box">
                  <a href="#" class="theme-btn btn-style-one">Apply Now</a>
              </div>
						</div>
					</div>
				</div>
				<!-- / End Single Service -->
			</div>
		</div>
	</section>
    <!-- <section id="about" class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);"></div>
          <div class="col-md-7 wrap-about py-md-5 ftco-animate">
          <div class="heading-section mb-5 pt-5 pl-md-5">
          <div class="pr-md-5 mr-md-5">
            <h2 class="mb-4">About the Programme</h2>
          </div>

        <p>The Programme seeks to identfy and select from a diverse group of ambitious, entrepreneurial-minded innovators building products, services and companies that are disruptive and transformative in nature, and that can harness the power of the Digital Economy to drive Tanzanian's entry into the Forth Industrial Revolution. </p>
        <p>Through this programme, Digital Starts-Ups will be paired with an extensive network of mentors, industry experts and leaders, educated in product design, service roll-out and implementation, business modelling and mass distribution channels, will be provided access to institutional and corporate partners including an opportunity to partner with CRDB Bank's Digital Innovations services, and free working space.</p>
        <p>This will also provide an opportunity for any of the Start-Ups that qualify, to be part of the Pilot Programme for Tanzania's Regulatory Sandbox, where they will be taken through the regulatory and compliance requirements of their particular product or service, among other elements of an extensive market-enty programme designed specifically for the Tanzanian and African marketplace.</p>
        <p><a href="{{Route('applyToProgram')}}" class="btn btn-primary">Apply now</a></p>
        </div>
          </div>
        </div>
      </div>
    </section> -->
	
    <section id="criteria" class="ftco-section" style="padding-top:50px">
      <div class="container">
        <div class="ftco-schedule">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Application <span>Criterias</span></h2>
          </div>
        </div>
		<div class="ftco-schedule">
			<div class="row">
				<div class="col-md-3 nav-link-wrap text-center text-md-right">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">All Start-Ups <span>must have these attributes</span></a>

					<a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Starts-Ups with the following <span>will have added advantage</span></a>

					<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Among other things <span>Start-Ups will judged based on</span></a>

					</div>
				</div>
				<div class="col-md-9 tab-wrap">
					
					<div class="tab-content" id="v-pills-tabContent">

					<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-16.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Business must be registered and operating in Tanzania, targeting the local and/ or international market.</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">At least one Founder, owning <b>not less than 20%</b> of issued shares, must be between the ages of 18-40 years old.</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Majority women-owned businesses are highly encouraged to apply.</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Primary offices based in Dar Es Salaam, Tanzania your Start-Up must be</a></h6>
								<p>i. <b>Prototype</b>: MVP (Minimum Viable Product), Pilot or Post-Revenue Stage</p>
								<p>ii. <b>For-Profit Enterprise</b>: Sustainable revenue generating model</p>
								<p>iii. <b>Innovative</b>: Launching a completely new product or service, or a new way of providing an existing product or service.</p>
								<p>iv. <b>Commercially and Socially Impactful</b>: Adequately solves the problem or challenge it is aimed at, and aligns with at least one of Sustainable Development Goals (SDGs)</p>
								<p>v. <b>Scaleable</b>: Can be easly and quickly remodelled/replicated to be made available in other regions of Tanzania, or possess enough scalability to become Pan-African.</p>
								<p>vi. <b>Business Case</b>: Must target a wide section of the population or be able to demonstrate a sustainable business model and viable market adoption.</p>
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Minimum Viable Product (MVP) with initial user testing/demonstrable Prototype</a></h6>
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">A committed and competent team in place with more than one Founder</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-2.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Strong business case and a clear path to market or clear strategy for market-entry</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">A clear defined and well understood business model</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">USSD-enabled, use of advanced digital technologies as an implementation tool or channel of delivery</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-3.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Innovation and disruptiveness : How are you transforming the social or economic landscape in Tanzania and Africa through your solution?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-4.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Team : Mix of team members and ability to achieve excellence in the market?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Traction : Proof of success, milestones, and traction. What have you achieved so far?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Impact and Scale : Potential social and commercial impact, scalability and likelihood of your solution working beyond your home market, and throught the rest of Africa?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Sustainability : Business model and Sustainability. How will it make money?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">Technology : Technological or digital component and tools used to solve the problem. How much of a factor is technology in the solution?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
						<div class="speaker-wrap ftco-animate d-md-flex">
							<!-- <div class="img speaker-img" style="background-image: url(images/staff-1.jpg);"></div> -->
							<div class="text">
								<h6><a href="#">USP : Unique Selling Proposition or X Factor. Why is your Start-Up unique or great? How easy is it for others to replicate your solution and enter your market?</a></h6>
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <span class="time">09:00 am - 4:30 pm</span> -->
								<!-- <p class="location"><span class="icon-map-o mr-2"></span>20 July 2019 - Hall, Building Los Angeles CA</p> -->
								<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
								<!-- <h3 class="speaker-name">&mdash; <a href="#">Ryan Thompson</a> <span class="position">Founder of Wordpress</span></h3> -->
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
      </div>
    </section>

    <footer id="contact" class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <!-- <h2 class="ftco-heading-2">SOFTCENTER.</h2> -->
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
              <!-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <!-- <li><a href="#" class="py-2 d-block">Terms And Conditions</a></li> -->
                <li><a href="https://ictc.go.tz/" class="py-2 d-block">ICT COMMISSION</a></li>
                <li><a href="https://crdbbank.co.tz/" class="py-2 d-block">CRDB</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> 14 Jamhuri St, Dar es Salaam</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+255 7368 48444</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@ictc.go.tz <br />dg@ictc.go.tz</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="www.ictc.go.tz" target="blank">ICT COMMISIION</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- <section class="container">        
        <div class="row">
             <div class="col-md-12 card"> 
                 <div class="card-body text-center">
                     <h2 class="h2">
                         <b class="text-primary">About The Programme</b>
                     </h2>
                     
                 </div>
                 <div class="card-body">
                     <div class="row d-flex justify-content-center">                             
                         <div class="col-12 ">
                       
                       {{-- ------------------------======================================== --}}
         
                           <div class="card mt-2">
                               <div class="card-body text-dark">
                                   <p>
                                    
                                     The ICT Commission’s Digital Acceleration Programme in partnership with CRDB 
                                     Foundation is pleased to invite teams of innovators to join the Digital Business Acceleration Program. 
                                     The programme, which is established by the ICT Commission and supported in partnership with CRDB Foundation,
                                      offers business acceleration facilitation to business ready startup companies with ICT or ICT enabled solutions.
                                 </p>
                                   <p>
                                     The programme will provide among other assistance, capacity building in 
                                     business set up, product development and market validation, legal counselling, pitching sessions,
                                      product exhibition and promotion, mentorship, guidance in market entry, and 
                                      the potential for a commercial partnership with investors.
                                   </p>
                                   <p> 
                                     The mission of the programme is to promote the local digital innovation industry through mentorship,
                                      coaching, value addition and linking solution providers to the market with an ultimate goal to have a 
                                      vibrant ICT industry that contributes to the industrial economy in Tanzania. <b>Women are highly encouraged to apply.</b>

                                   </p>
                                   
                                   
                               </div>
                         
                               <div class="row">
                                 <div class="col-md-12 ">
                                     <div class="row ">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button class="btn btn-success m-2" type="button" data-toggle="collapse" data-target="#MoreInfo" aria-expanded="false" aria-controls="MoreInfo">
                                                <b>Programme Details</b> 
                                                <span class="material-symbols-outlined">
                                                   arrow_downward
                                                   </span>
                                            </button>
                                            <a href="{{Route('applyToProgram')}}" type="button" class="btn btn-primary  m-3 p-2"><b>Apply Now </b><span class="material-symbols-outlined">
                                                arrow_outward
                                                </span>
                                            </a>  
       
                                        </div>
                                     </div>

                                   <div class="collapse" id="MoreInfo">
                                           <div class="card card-body m-2 text-dark">
                                             <div class="media row d-flex justify-content-center">
                                              
                                                 <div class="col-md-12">

                                                     <div class="media-body">
                                                       <h4 class="m-1 text-primary">ICT Business Acceleration Programme - Imbeju | CRDB Foundation</h4>
                                                       <p class="programmeDetails">
                                                         This programme seeks to identify and select from a diverse group of ambitious,
                                                          entrepreneurial-minded innovators building products, services and companies that are
                                                           disruptive and transformative in nature, and that can harness the power of the Digital Economy
                                                            to drive Tanzania’s entry into the Fourth Industrial Revolution. Through this programme, Digital Start-Ups will be paired with
                                                             an extensive network of mentors, industry experts and leaders, educated in product design, service roll-out and implementation,
                                                              business modelling and mass distribution channels, will be provided access to institutional and corporate partners including an
                                                               opportunity to partner with CRDB Bank’s Digital Innovations services, and free working space.
     
                                                     </p>                                                        
                                                     </div>
                                                 </div>
                                               </div>
                                             
                                             <p class="programmeDetails">
                                                 The programme is open to all local innovators who are solving social, economic and commercial 
                                                 challenges in Tanzania using ICT and that are linked to the Digital Economy. If you are committed 
                                                 to developing innovations that aim to solve a specific problem in the region using digital technology, 
                                                 and your solution is easily scalable to the rest of Africa, then you should apply. All Start-Ups, 
                                                 aspirant Entrepreneurs, and anyone involved in digital tech (hardware or software) are welcome to apply to 
                                                 the Programme with their innovative Tech Solutions, and possibly have the opportunity to take part in the
                                                  Acceleration Programme. Women are highly encouraged to apply.
                                             </p> 
                                             <p class="programmeDetails">
                                                 The first cohort will run for <b>3 months beginning 15th May 2023</b>, in Dar es Salaam 
                                                 at a location to be communicated upon selection, where business acceleration programme
                                                  facilitation will be provided for the  qualified selected startup companies. 
                                                  Each Startup company will then be required to fulfil the requirements of the programme.

                                             </p> 
                                     <div class="media-body">
                                          <h5 class="m-1 text-primary">CRITERIA FOR APPLICATIONS:</h5>

                                         <p class="programmeDetails">
                                             Applications must be from Digital Technology Hardware and Software Solutions in areas of Finance (FinTech), 
                                             Insurance (InsureTech), Tourism, Transport and Logistics, Health (HealthTech/InsureTech), Climate change, Construction,
                                              Energy, Smart Cities (Urban Mobility, Urban Planning or Urban Development), Agriculture (Agri-Tech), Education (EdTech), 
                                              using IoT (Internet of Things), Artificial Intelligence or Machine Learning to create Digital Transformation or technology
                                               to aid in Manufacturing or Agriculture products and solutions that have social impact are highly encouraged to apply.


                                       </p>  
                                    <p class="programmeDetails">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <b>
                                                    <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span>Business must be registered and operating in Tanzania, targeting the local and/or international market;

                                                </b>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>
                                                       <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> Founders, owning not <i>less than 25% of issued shares</i>, must be between the <i>ages of 18-35 years old</i>;
                                                    </b>
                                            </li>

                                            <li class="list-group-item">
                                                <b>
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> Majority women-owned businesses are highly encouraged to apply
                                                </b>
                                            </li>

                                            <li class="list-group-item">
                                              <b> <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> Primary offices based in Dar es Salaam, Tanzania</b>
                                            </li>

                                            <li class="list-group-item">
                                                <b>  
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> <i>Prototype</i>: MVP (Minimum Viable Product), Pilot or Post-Revenue Stage
                                                </b>
                                              </li>

                                              <li class="list-group-item">
                                                <b>  
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> <i>For-Profit Enterprise</i>: Sustainable revenue generating model

                                                </b>
                                              </li>

                                              <li class="list-group-item">
                                                <b>  
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> <i>Innovative: </i>Launching a completely new product or service, or a new way of providing an existing product or service;

                                                </b>
                                              </li>

                                              <li class="list-group-item">
                                                <b>  
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span> <i>Commercially and Socially Impactful:</i> Adequately solves the problem or challenge it is aimed at, and aligns with at least one of the Sustainable Development Goals (SDGs)

                                                </b>
                                              </li>

                                              <li class="list-group-item">
                                                <b>  
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span>  <i>Scaleable:</i> Can be easily and quickly remodelled/replicated to be made available in other regions of Tanzania, or possess enough scalability to become Pan-African

                                                </b>
                                              </li>

                                              <li class="list-group-item">
                                                <b>  
                                                   <span class="material-symbols-outlined">
                                                        check_circle
                                                        </span>  <i>Business Case: </i>Must target a wide section of the population or be able to demonstrate a sustainable business model and viable market adoption

                                                </b>
                                              </li>

                                        </ul>
                                        </p>                                                      
                                       </div>


                                       <p class="programmeDetails">
                                        <h5 class="m-1 text-primary">ADDED ADVANTAGES:</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <b>  
                                                    <span class="material-symbols-outlined">
                                                        subdirectory_arrow_right
                                                        </span>  
                                                         Minimum Viable Product (MVP) with initial user testing/demonstrable Prototype

                                                 </b>
                                            </li>

                                            <li class="list-group-item">
                                                <b>  
                                                    <span class="material-symbols-outlined">
                                                        subdirectory_arrow_right
                                                        </span>  
                                                         A committed and competent team in place with more than one Founder

                                                 </b>
                                            </li>

                                            <li class="list-group-item">
                                                <b>  
                                                    <span class="material-symbols-outlined">
                                                        subdirectory_arrow_right
                                                        </span>  
                                                         Strong business case and a clear path to market or clear strategy for market-entry


                                                 </b>
                                            </li>

                                            <li class="list-group-item">
                                                <b>  
                                                    <span class="material-symbols-outlined">
                                                        subdirectory_arrow_right
                                                        </span>  
                                                         A clearly defined and well understood business model


                                                 </b>
                                            </li>
                                           
                                            <li class="list-group-item">
                                                <b>  
                                                    <span class="material-symbols-outlined">
                                                        subdirectory_arrow_right
                                                        </span>  
                                                         USSD-enabled, use of advanced digital technologies as an implementation tool or channel of delivery


                                                 </b>
                                            </li>

                                          </ul>
                                      </p>
                                    </div>

                                   </div>
                                   {{-- END OF COLLAPSE OF MORE DETAILS --}}

                                  
                                 </div>
                             </div>
                             </div>
                       </div>
         
                       
                     </div>
                  
                 </div>

             </div>
         </div>
        </section> -->

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ url('acceleration/js/jquery.min.js') }}"></script>
  <script src="{{ url('acceleration/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('acceleration/js/popper.min.js') }}"></script>
  <script src="{{ url('acceleration/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('acceleration/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('acceleration/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('acceleration/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('acceleration/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('acceleration/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('acceleration/js/aos.js') }}"></script>
  <script src="{{ url('acceleration/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('acceleration/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('acceleration/js/google-map.js') }}"></script>
  <script src="{{ url('acceleration/js/main.js') }}"></script>
    
  </body>
</html>

