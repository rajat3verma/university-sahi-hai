 <header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>           
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
                    <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>         
                </div>
            </div>                              
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <img src="{{ asset('assets/img/logo.jpeg') }}" class="main-logo">
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ url('about') }}">About</a></li>
              <li><a href="{{ url('') }}">Courses</a></li>
              <li><a href="{{ url('') }}">Events</a></li>
              <li><a href="{{ url('') }}">Gallery</a></li>
              <li class="menu-has-children"><a href="{{ url('') }}">Blog</a>
                <ul>
                  <li><a href="{{ url('') }}">Blog Home</a></li>
                  <li><a href="{{ url('') }}">Blog Single</a></li>
                </ul>
              </li> 
              <li class="menu-has-children"><a href="{{ url('') }}">Pages</a>
                <ul>
                    <li><a href="{{ url('') }}">Course Details</a></li>       
                    <li><a href="{{ url('') }}">Event Details</a></li>     
                    <li><a href="{{ url('') }}">Elements</a></li>
                      <li class="menu-has-children"><a href="{{ url('') }}">Level 2 </a>
                        <ul>
                          <li><a href="{{ url('') }}">Item One</a></li>
                          <li><a href="{{ url('') }}">Item Two</a></li>
                        </ul>
                      </li>                                         
                </ul>
              </li>                                                                       
              <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->                    
        </div>
    </div>
</header><!-- #header -->