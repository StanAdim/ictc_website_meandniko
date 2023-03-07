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
        
	</style>
  </head>
  <body>
    
	
    
    <div id="hero" class="hero-wrap" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <span style="color:white">ICT Startup Acceleration Programme</span></h1>
            <p style="color:black" class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span style="color:white" class="icon-calendar mr-2"></span>7 February 2023 - Untill Application</p>
            <div id="timer" class="d-flex">
				<div style="color:black" class="time" id="days"></div>
				<div style="color:black" class="time pl-3" id="hours"></div>
				<div style="color:black" class="time pl-3" id="minutes"></div>
				<div style="color:black" class="time pl-3" id="seconds"></div>
			</div>
			<a href="https://crdbbank.co.tz/en" target="blank"><img src='{{ url("acceleration/images/sponsors/logo1.png") }}' width="30%"></a>
			<a href="https://www.ictc.go.tz/" target="blank"><img src='{{ url("acceleration/images/sponsors/logo2.png") }}' width="30%"></a>
			<a href="https://crdbbank.co.tz/en" target="blank"><img src='{{ url("acceleration/images/sponsors/logo3.png") }}' width="30%"></a>
          </div>
          
          <div class="col-lg-6 col-md-4 mt-0 mt-md-5">
          	<form action="#" class="request-form ftco-animate">
          		<h2 class="h2  text-center text-primary" style="font-size:28px;font-family: 'Verdana', Courier, monospace">ACCELERATION PROGRAMME</h2>
	    				<div class="form-group">
								<div class="checkbox">
								   <label>The <b style="color: rgb(32, 136, 240);">ICT Commission</b> is in partnership with <b style="color: rgb(40, 195, 9);">CRDB Foundation
								</b> and pleased to invite teams of innovators to join the ICT Business Acceleration Programme 
								which is aim to promote the local digital innovation industry.</label>
								</div>
							</div>
	            <div class="form-group">
	              <a href="{{Route('applyToProgram')}}" class="btn btn-primary py-3 px-4">Apply Now</a>
	            </div>
	    	</form>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-primary">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-placeholder"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">TECH START-UPS</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-world"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">CAPITALIZING</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-hotel"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">GROW YOUR BUSINESS</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-cooking"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">PRODUCT EXHIBITION AND PROMOTION</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
   	
	
	
    <section class="container">        
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
        </section>

    
  

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

