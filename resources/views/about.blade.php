@extends('layouts.user')
@section('title', 'Uma Glass')
@push('css')
@endpush
@section('content')

 <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                About Us        
              </h1> 
              <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
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

      <!-- Start info Area -->
      <section class="info-area pt-100 pb-120">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6 no-padding info-area-left">
              <img class="img-fluid" src="{{asset('assets/img/about-img.jpg') }}" alt="">
            </div>
            <div class="col-lg-6 info-area-right">
              <h1>Who we are</h1>
              <p>University sahi hai Education understands the value of your dream to be a doctor. We are the leading educational recruiters of the country, and happy to share that 2000+ students have traveled the journey to be medical professionals.We understand the importance of high-quality medical education for the student, as they will save someone’s life with it tomorrow.

MBBS Abroad is the new trend in town and getting popular among Indian medical aspirants for the last few decades. Affordable Fees, experienced faculties, and international working opportunities are key features of choosing MBBS abroad in top medical universities of the world. Drop the Idea of Dropping a year, and push yourself out of the comfort box and grab the opportunity, knocking at the door.

Right decisions at the right time and the combo of our value-added services and your dedication to your dream will take you towards your bright and settled future as a medical professional.
              </p>
            </div>
          </div>
        </div>  
      </section>
      <!-- End info Area -->  

      <!-- Start course-mission Area -->
      <section class="course-mission-area pb-120">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">Goals to Achieve for the leadership</h1>
                <p>Who are in extremely love with eco friendly system.</p>
              </div>
            </div>
          </div>              
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">Success</a>
                                </dt>
                                <dd>
                                    Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
                                </dd>
                                <dt>
                                    <a href="">Info</a>
                                </dt>
                                <dd>
                                    Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget diam.
                                </dd>
                                <dt>
                                    <a href="">Danger</a>
                                </dt>
                                <dd>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
                                </dd>
                                <dt>
                                    <a href="">Warning</a>
                                </dt>
                                <dd>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
                                </dd>                                    
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                          <div class="overlay overlay-bg"></div>
              <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
                        </div>
                    </div>
        </div>  
      </section>
      <!-- End course-mission Area -->
          

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
              <div class="row details-content">
                <div class="col single-detials">
                  <span class="lnr lnr-graduation-hat"></span>
                  <a href="#"><h4>Expert Instructors</h4></a>   
                  <p class="white">
                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                  </p>            
                </div>
                <div class="col single-detials">
                  <span class="lnr lnr-license"></span>
                  <a href="#"><h4>Certification</h4></a>    
                  <p class="white">
                    Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                  </p>            
                </div>                
              </div>
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
