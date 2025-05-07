    @include('include.top_home')

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
    @include('include.topbar_home') 
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
    @include('include.navbar_home')
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
    @include('include.ModalSearch_home')
        <!-- Modal Search End -->

        
        <!-- Carousel Start -->
       @yield('content')
        <!-- Carousel End -->


        <!-- About Start -->
        
        <!-- About End -->


        <!-- Services Start -->
        <!-- Services End -->


        <!-- Project Start -->
        <!-- Project End -->


        <!-- Blog Start -->
        <!-- Blog End -->


        <!-- Team Start -->
        <!-- Team End -->


        <!-- Testimonial Start -->
        <!-- Testimonial End -->


        <!-- FAQ Start -->
        <!-- FAQ End -->

        <!-- Footer Start -->
    @include('include.footer_home')
        <!-- Footer End -->

        
        <!-- Copyright Start -->
    @include('include.copyright_home')
        <!-- Copyright End -->


        <!-- Back to Top -->
    @include('include.back_to_top')
        
        
     <!-- JavaScript Libraries -->

    @include('include.bottom_home')

  