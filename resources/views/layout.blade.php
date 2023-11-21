@include('partials._header')
@include('partials._navbar')
    <!---sidebar start-->
    <div class="sidebar">
        <div class="shortcut">
            <a href=""><img src="/assets/lecturesImage/home.png" alt="home-icon">
                <p>Home</p></a>
            <a href=""><img src="/assets/lecturesImage/explore.png" alt=""><p>Popular</p></a>
            <a href=""><img src="/assets/lecturesImage/messages.png" alt=""><p>Messages</p></a>      
            <a href=""><img src="/assets/lecturesImage/reviews.png" alt=""><p>Student Feedback</p></a>      
            <a href=""><img src="/assets/lecturesImage/installer.png" alt=""><p>Installer & Tools</p></a>
            <hr>
        </div>
        <div class="subscribed">
            <h3><b class="text-center">LECTURE LIBRARY</b></h3>
            <a href=""><img src="/assets/images/tech-stack/html.png" alt=""><p><b>HTML</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/css3.png" alt=""><p><b>HTML</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/bootstrap.png" alt=""><p><b>BOOTSTRAP</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/tailwind.png" alt=""><p><b>TAILWIND</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/js.png" alt=""><p><b>JAVASCRIPT</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/react.png" alt=""><p><b>REACT JS</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/php-logo.png" alt=""><p><b>PHP</b></p></a>
            <a href=""><img src="/assets/images/tech-stack/laravel.png" alt=""><p><b>LARAVEL</b></p></a>
            <a href=""><img src="/assets/images/kodego.png" alt=""><p><b>PRESENTATION</b></p></a>
            <a href=""><img src="/assets/images/kodego.png" alt=""><p><b>ACTIVITIES</b></p></a>
        </div>
        <hr>
        <img src="/assets/images/kodego.png" alt="">
    </div>
    <!---sidebar end-->

    <!----main start-->
    <div class="container-section">
        <div class="banner">
          <img src="/assets/lecturesImage/banner.jpg" alt="student-banner-image">
        </div>
        <div class="list-container">
            
           
            @yield('content')
        </div>
    </div>
    <!----main end-->

    @include('partials._footer')
