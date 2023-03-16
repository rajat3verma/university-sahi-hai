@extends('layouts.user')
@section('title', 'University sahi hai')
@push('css')
   
@endpush
@section('content')

<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Welcome to	<br>
								University Sahi Hai
							</h1>
							<p class="pt-10 pb-10 white">
								100% Admission Assurance | Affordable Fee | 99% Study Visa Success | 6 Years Complete Assistance
							</p>
							<a href="{{url('')}}" class="primary-btn text-uppercase">Apply Now</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>MBBS ABROAD</h4>
								</div>
								<div class="desc-wrap">
									<p>
										We have tied up with universities from Russia, Ukraine, Kazakhstan, Kyrgyzstan, Georgia, and the Philippines, which promise top-quality as well as affordable MBBS abroad for all students....
									</p>
									<a href="#">Read More</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>STUDY INDIA</h4>
								</div>
								<div class="desc-wrap">
									<p>
										We have collated all the important updates as well as learning resources related to the major Management, Medical, and Engineering exams in the country, which students can access anytime....
									</p>
									<a href="#">Read More</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>STUDY ABROAD</h4>
								</div>
								<div class="desc-wrap">
									<p>										
										Our highly experienced and dedicated faculty provide great training so that students get a decent Band Score. This helps students to study & work in nations like the USA, UK, Canada, etc....
									</p>
									<a href="#">Read More</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Test Preparation</h1>
								<p>Your one-stop destination for updates on every major management, medical, engineering, and proficiency exam. Also, access our vast catalog of classes, mock tests, previous year papers, and overall mentorship guidance.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('assets/img/p1.jpg') }}" alt="">
									</div>
									<!-- <div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>	 -->								
								</div>
								<div class="details">
									<a href="#">
										<h4>
											FMGE/NEXT Exam
										</h4>
									</a>
									<p>
										This is the Exam that’s compulsorily given by those medical graduates who have completed their MBBS in abroad and seek to practice medicine in India. The erstwhile FMGE Exam will soon be replaced by the NEXT Exam from 2023.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('assets/img/p2.jpg') }}" alt="">
									</div>
									<!-- <div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div> -->									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Management Entrance Exam
										</h4>
									</a>
									<p>
										
Help yourself narrow down your focus to the main management entrance exams in the country. Not just that, get all the relevant information on each exam, from the pattern to the eligibility and much more, all in one place.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('assets/img/p3.jpg') }}" alt="">
									</div>
									<!-- <div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>	 -->								
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Engineering Entrance Exam
										</h4>
									</a>
									<p>
										Everything you need to know about the most important and prestigious Engineering entrance exams in India is now collated and presented in one place, HERE. Know about everything from the eligibility, pattern, and dates, among other things regarding each and every exam.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('assets/img/p4.jpg') }}" alt="">
									</div>
									<!-- <div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>		 -->							
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Medical Exam
										</h4>
									</a>
									<p>
										The primary pan-Indian medical examination that every medical aspirant needs to pass in order to be eligible for undergraduate medical admission in India and abroad. Get a headstart on all the important factors like the eligibility, process, fees, and various other details to make your eventual journey easier.										
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('assets/img/p1.jpg') }}" alt="">
									</div>
									<!-- <div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div> -->									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Abroad
										</h4>
									</a>
									<p>
										
Students looking to study abroad need to pass these few proficiency tests before. However, the pattern and syllabus can often be confusing. This page lays down the most common such tests and explains them in a comprehensive way.
You’ll have a clearer picture of the exams and how to approach them once you’re done here!										
									</p>
								</div>
							</div>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Why Choose Us
							</h1>
							<p class="white">
								1. Our counsellors are available 24x7 with Genuine and Relevant Guidance<br>
								2. We offer Hand Holding Services right from Registration to Visa, Ticketing, and Departure<br>
								3. Students can approach us for Educational Loan Assistance as well<br>
								4. You get access to Free Online Lectures and Webinars through the Affinity app<br>
								5. With Affinity, you need not pay the fees via any middlemen. Instead, your payments are directly routed to the university as a result the receipt for the same is generated quickly and directly to you.
							</p>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>		
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<div class="form-select" id="service-select">
									<select>
										<option datd-display="">Choose Course</option>
										<option value="1">Course One</option>
										<option value="2">Course Two</option>
										<option value="3">Course Three</option>
										<option value="4">Course Four</option>
									</select>
								</div>									
								<button class="primary-btn text-uppercase">Submit</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
			
		
			<!-- Start upcoming-event Area -->
			<section class="offer-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">What We Offer</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="col-sm-4">
							<div class="details-content">
								<div class="col card single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Genuine Counselling</h4></a>		
									<p>
										Boasting of some of the most trusted and experienced counselors in India, you are promised genuine, real time, and fact-based advice.
									</p>						
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="details-content">
								<div class="col card single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Your Knowledge Bank</h4></a>		
									<p>
										Access to regular and up-to-date notes, lectures, webinars, recorded sessions, daily practice questions, and model test papers
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row details-content">
								<div class="col card single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Admission & Visa Assistance</h4></a>		
									<p>
										Hand-holding Services right from Registration to Documentation and eventual journey-related formalities
									</p>						
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
						
			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Siddhant Pandey</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									University sahi hai ensured a seat for me in the Chuvash State University after I was denied one in an Indian government medical college due to low NEET score.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Ganesh Gapat</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									University sahi hai constant guidance throughout the admission and travel formalities majorly helped me to secure a seat in the Crimea Federal University.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Ira Sharma</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									University sahi hai  helpful counselors renewed my focus on my goal and also helped with the admission process, airport pickup drop, visa, and ticketing.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Siddhant Pandey</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									University sahi hai ensured a seat for me in the Chuvash State University after I was denied one in an Indian government medical college due to low NEET score.
								</p>
							</div>																								
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->	
			
			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Interested in Taking a Course</h1>
							<p>Need guidance regarding admissions abroad?<br><br>
								Fill in the details required and you shall soon be connected to a counselor. Get all the latest admission and related information on universities (Indian or abroad).
							</p>
							<a class="primary-btn wh" href="#">Apply Now</a>								
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta-one Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News</h1>
								<p>Catch the latest and up-to-date developments regarding admissions and important exams in one glance.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('assets/img/b1.jpg') }}" alt="">								
							</div>
							<p class="meta">12 may, 2022  |  By <a href="#">University sahi hai</a></p>
							<a href="blog-single.html">
								<h5>NMAT 2022 Exam: Recent Updates;</h5>
							</a>
							<p>
								
The Graduate Management Admission Council (GMAC) has come...
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('assets/img/b2.jpg') }}" alt="">								
							</div>
							<p class="meta">12 may, 2022  |  By <a href="#">University sahi hai</a></p>
							<a href="blog-single.html">
								<h5>DCI Notice: Check Your Eligibility</h5>
							</a>
							<p>
								
The FDGST is managed through the National Board of Examinations...
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('assets/img/b3.jpg') }}" alt="">								
							</div>
							<p class="meta">12 may, 2022  |  By <a href="#">University sahi hai</a></p>
							<a href="blog-single.html">
								<h5>The NEET-UG 2021</h5>
							</a>
							<p>
								
A section of NEET-UG 2021 aspirants have been demanding the...
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{ asset('assets/img/b4.jpg') }}" alt="">								
							</div>
							<p class="meta">12 may, 2022  |  By <a href="#">University sahi hai</a></p>
							<a href="blog-single.html">
								<h5>NEET 2021 Update</h5>
							</a>
							<p>
								Amidst the weeks-long clamor for the postponement of the NEET...
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
			

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->

@endsection
@push('script')

@endpush













































