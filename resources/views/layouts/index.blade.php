<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Include _head.blade.php -->
    @include('partials._head')

</head>

<body>


    <header class="main-header">
        
        
        <nav class="navbar navbar-static-top">

            <!-- Include _topnav.blade.php -->
            @include('partials._topnav')
            <!-- Include _navmain.blade.php -->
            @include('partials._navmain')
            


        </nav> 

    </header> <!-- /. main-header -->




    <!--   ****    Carousel  ***  ================================================== -->
    

    <!--         Include _carousel.blade.php -->
    @yield('carousel')

    <!-- /.carousel -->

    @yield('about')
    @yield('contact')

    <!-- Include _feature.blade.php -->
    @yield('features') 


    <!-- /.about-us -->


    <!-- Include _extra.blade.php -->
    @yield('extras')
    <!-- /.home-reasons -->




    <!-- Include _causes.blade.php -->
    @yield('causes')
    <!-- /.our-causes -->

    



    <!-- Include _supporter.blade.php -->
    @yield('supporters')
    <!-- /.our-sponsors -->


    


    <footer class="main-footer">

      <!-- Include _topfooter.blade.php  -->  
      @include('partials._topfooter')     

      <!-- Include _mainfooter.blade.php -->
      @include('partials._mainfooter')

      <!-- Include _bottomfooter.blade.php -->
      @include('partials._bottomfooter')

      

      
      
  </footer> <!-- main-footer -->



  <!-- Include Donate Modal _donate.blade.php -->
  @include('partials._donate')
  





    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <!-- Include _scripts.blade.php -->
    @include('partials._scripts')

</body>
</html>
