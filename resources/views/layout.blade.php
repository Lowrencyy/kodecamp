@include('partials._header')
@include('partials._navbar')
    <!---sidebar start-->
    <div class="sidebar">
        <div class="shortcut">
            <h2 class="text-center uppercase font-bold text-lg">{{auth()->user()->firstName}}</h2>
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
            <a href="/lectures?tag=HTML"><img src="/assets/images/tech-stack/html.png" alt=""><p><b>HTML</b></p></a>
            <a href="/lectures?tag=CSS"><img src="/assets/images/tech-stack/css3.png" alt=""><p><b>CSS</b></p></a>
            <a href="/lectures?tag=BOOTSTRAP"><img src="/assets/images/tech-stack/bootstrap.png" alt=""><p><b>BOOTSTRAP</b></p></a>
            <a href="/lectures?tag=TAILWIND"><img src="/assets/images/tech-stack/tailwind.png" alt=""><p><b>TAILWIND</b></p></a>
            <a href="/lectures?tag=JAVASCRIPT"><img src="/assets/images/tech-stack/js.png" alt=""><p><b>JAVASCRIPT</b></p></a>
            <a href="/lectures?tag=REACTJS"><img src="/assets/images/tech-stack/react.png" alt=""><p><b>REACT JS</b></p></a>
            <a href="/lectures?tag=PHP"><img src="/assets/images/tech-stack/php-logo.png" alt=""><p><b>PHP</b></p></a>
            <a href="/lectures?tag=LARAVEL"><img src="/assets/images/tech-stack/laravel.png" alt=""><p><b>LARAVEL</b></p></a>
            <a href="/lectures?tag=PRESENTATION"><img src="/assets/images/kodego.png" alt=""><p><b>PRESENTATION</b></p></a>
            <a href="/lectures?tag=ACTIVITIES"><img src="/assets/images/kodego.png" alt=""><p><b>ACTIVITIES</b></p></a>
            <a href="/lectures?tag=installation"><img src="/assets/images/tech-stack/installation.png" alt=""><p><b>INSTALLATION</b></p></a>
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
   
        <div>
            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                {{$lectures->links()}}
            </div>
        </div>
       
    <x-flash-message/>
  
    <!----main end-->

    @include('partials._footer')
