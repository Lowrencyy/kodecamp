<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- THIS IS MY GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Gloria+Hallelujah&family=Handlee&family=Indie+Flower&family=M+PLUS+Rounded+1c:wght@900&family=Mooli&family=Roboto:wght@100&family=Shadows+Into+Light&family=Short+Stack&family=Staatliches&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  {{-- <link rel="stylesheet" href="{{asset ('assets/css/landing.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset ('assets/css/responsive.css')}}"> --}}
  <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <!-- SWIPER JS -->

    {{-- <link rel="stylesheet" href="{{asset ('assets/css/swiper.css')}}" /> --}}


    <!-- THIS IS MY FAV ICON -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <!-- THIS IS MY TITLE     -->
    <title>KODECAMP</title>

    <!-- flowbite cdn  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.css">

    <!-- JS AOS  -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body data-bs-spy="scroll" data-bs-target="#main_menu">

    <!-- style.css  -->

    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
   <!-- navbar -->
   <header>
    <nav id="main_menu" class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600" >
        <div id="header-bg" class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
            <img src="{{asset ('assets/images/kodego.png')}}" class="h-12 mr-3" alt="KODECAMP-LOGO">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <div class="flex md:order-2">
            <a href="/register"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                  </svg>
              </button></a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
              <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Review</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
   </header>

   <!-- hero section  -->
   <section id="hero-section" class="header">
    <section class="bg-white dark:bg-gray-900 pt-20">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden" src="{{asset ('assets/images/img-1.png')}}" alt="dashboard image"  data-aos="fade-up"
            data-aos-duration="3000">
            
            <div class=" md:mt-0">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"data-aos="fade-left">KODECAMP 86 <br>
                </h1>
                <span class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">"Explore a platform designed for students offering a range of resources such, as video lectures, study materials and valuable insights from experts. It aims to support your journey and equip you with the tools to succeed not only in your studies but also, in various aspects of life."</span>
                <!-- <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, a!</p> -->
                
            </div>
        </div>
    </section>
</section>

<!-- about us section  -->

<section>
    <section>
        <section id="about_us" class="bg-white dark:bg-gray-900">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white text-center"data-aos="fade-right">About our Website</h2>
                    <p class="mb-4"data-aos="fade-right">Welcome to KodeCamp! Discover practical strategies, tips, and resources to create a positive and engaging learning environment. Elevate your learning experience with effective tools for organization, behavior management, and student engagement. Let's make every classroom a place where both educators and students thrive!</p>
                    <p data-aos="fade-right">Let's make every classroom a place where both educators and students thrive!</p>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8" data-aos="fade-left">
                    <img class="w-full rounded-lg" src="{{asset ('assets/images/about-us1.png')}}" alt="office content 1" >
                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset ('assets/images/about-us2.jpg')}}" alt="office content 2">
                </div>
            </div>
        </section>
    </section>
</section>

<!-- about our team  -->
<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center pb-20"data-aos="fade-left">ABOUT OUR TEAM</h1>

 <section id="our-team" class="container pt-15">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" >
    <!-- Team Member 1 -->
    <div class="bg-white p-2 rounded-lg shadow-md" data-aos="fade-up"
    data-aos-duration="400">
      <img src="{{asset ('assets/images/about-our-team/marrion.png')}}" alt="Team Member 1" class="w-full h-32 object-cover mb-4 rounded-md" style="border-radius: 50%;">
      <h2 class="text-xl font-semibold text-center">Marrion Dean-alexis Romero</h2>
      <p class="text-gray-600 text-center pt-2">Full Stack Web Developer</p>
      <ul class="flex justify-center mt-4 space-x-4">
        <!-- facebook  -->
        <li>
            <a href="https://www.facebook.com/marrion.romero.27" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white" target="_blank">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
            </a>
        </li>
        <li>
            <a href="https://github.com/MarrionR" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300" target="_blank">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
            </a> 
        </li> 
    </ul>
    </div>

    <!-- Team Member 2 -->
    <div class="bg-white p-4 rounded-lg shadow-md" data-aos="fade-up"
    data-aos-duration="1500">
      <img src="{{asset ('assets/images/about-our-team/tomenio.jpg')}}" alt="Team Member 2" class="w-full h-32 object-cover mb-4 rounded-md" style="border-radius: 50%;">
      <h2 class="text-xl font-semibold text-center">Mark Laurence Tomenio</h2>
      <p class="text-gray-600 text-center pt-2">Full Stack Web Developer</p>
      <ul class="flex justify-center mt-4 space-x-4">
        <li>
            <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
            </a> 
        </li> 
    </ul>
    </div>

    <!-- Team Member 2 -->
    <div class="bg-white p-4 rounded-lg shadow-md" data-aos="fade-up"
    data-aos-duration="3000">
      <img src="{{asset ('assets/images/about-our-team/cristel.png')}}" class="w-full h-32 object-cover mb-4 rounded-md" style="border-radius: 50%;">
      <h2 class="text-xl font-semibold text-center">Cristel Aban</h2>
      <p class="text-gray-600 text-center pt-2">Full Stack Web Developer</p>
      <ul class="flex justify-center mt-4 space-x-4">
        <!-- facebook  -->
        <li>
            <a href="https://www.facebook.com/eshey0418" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white" target="_blank">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
            </a>
        </li>
        <!-- twitter  -->
        <li>
            <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
            </a>
        </li>
        <!-- github  -->
        <li>
            <a href="https://github.com/hershey041826" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300" target="_blank">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
            </a>
        </li>
        <li>
            <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
            </a> 
        </li> 
    </ul>
    </div>

    <!-- Repeat the structure for other team members -->

  </div>
 </section>

 <!-- web stack language  -->

 <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center pt-20"data-aos="fade-left">WEB STACK</h1>
 <!-- <section id="marquee" data-aos="fade-up"
 data-aos-anchor-placement="bottom-bottom">
  <div class="container">
      <div class="pic-container " >
          <div class="pic">
              <img src="/images/tech-stack/html.png" alt="img">
          </div>
          <div class="pic">
              <img src="/images/tech-stack/css3.png" alt="img">
          </div>
          <div class="pic">
              <img src="/images/tech-stack/nodeJS.png" alt="img">
            </div>
            <div class="pic">
                <img src="/images/tech-stack/mongodb.png" alt="img">
            </div>
            
            <div class="pic">
                <img src="/images/tech-stack/react.png" alt="img">
            </div>
            <div class="pic">
                <img src="/images/tech-stack/netlify.png" alt="img">
            </div>
            <div class="pic">
                <img src="/images/tech-stack/javascript.jpeg" alt="img">
            </div>
            <div class="pic">
                <img src="/images/tech-stack/bootstrap-logo-vector.png" alt="img">
            </div>
            <div class="pic">
                <img src="/images/tech-stack/tailwind.png" alt="img">
              </div>
            
            
      </div>
  </div>
</section> -->

<section class="navbar" data-aos="fade-up"
data-aos-anchor-placement="bottom-bottom">
    <marquee behavior="alternate" direction="10" class="d-flex" scrollamount="25">
    <ul >
        <li><img src="{{asset ('assets/images/tech-stack/html.png')}}" alt="html logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/css3.png')}}" alt="css logo"></li>  
        <li><img src="{{asset ('assets/images/tech-stack/react.png')}}" alt="react logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/laravel.png')}}" alt="react logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/nodeJS.png')}}" alt="node-js logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/bootstrap.png')}}" alt="bootstrap logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/express.png')}}" alt="express-js logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/github.png')}}" alt="github logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/js.png')}}" alt="js logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/mongodb.png')}}" alt="mongo logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/netlify.png')}}" alt="netlify"></li>
        <li><img src="{{asset ('assets/images/tech-stack/tailwind.png')}}" alt="tailwind"></li>
        <li><img src="{{asset ('assets/images/tech-stack/vscode.png')}}" alt="vscode logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/php-logo.png')}}" alt="php logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/mysql.png')}}" alt="sql logo"></li>
        <li><img src="{{asset ('assets/images/tech-stack/git.png')}}" alt="git logo"></li>
        
    </ul>
    </marquee>
</section>


<section>
  <section class="bg-white dark:bg-gray-900 ">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
          <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
              <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"  data-aos="zoom-in">Our Student Review</h2>
              <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400"  data-aos="zoom-in">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
          </div> 
          <div class="grid gap-8 lg:grid-cols-2">
              <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                       Feedback
                    </span>
                      <span class="text-sm">1 days ago</span>
                  </div>
                  <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">This website has been really helpful, in making my experience at the boot camp much easier.</a></h2>
                  <p class="mb-5 font-light text-gray-500 dark:text-gray-400">This website has been an invaluable resource for me during my time in the boot camp. With helpful information and resources available on the website, I found my experience much smoother. Overall, the website played a key role in ensuring my success and enjoyment throughout my boot camp journey.</p>
                  <div class="flex justify-between items-center">
                      <div class="flex items-center space-x-4">
                          <img class="w-7 h-7 rounded-full" src="https://scontent.fmnl9-3.fna.fbcdn.net/v/t1.6435-9/80979425_2549341115314855_504870802894618624_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=7a1959&_nc_eui2=AeFfY_pYUyupX9aEeRjJYdF7HLYxabG_UFwctjFpsb9QXAUWhm1_E68gGzoi_kfs_nNJE2ROg7-m7fdJXPVuC_8-&_nc_ohc=apPxQb99m1gAX_ZQVmY&_nc_ht=scontent.fmnl9-3.fna&oh=00_AfD8cfx3NjMKc0E6gDkxj4FzSFHZ4Zs-oZ2ZnBU3PSBbMA&oe=6583CC77" alt="Jese Leos avatar" />
                          <span class="font-medium dark:text-white">
                              Marrion Dean-Alexis Romero
                          </span>
                      </div>
                      <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                          Read more
                          <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </a>
                  </div>
              </article> 
              <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                  <div class="flex justify-between items-center mb-5 text-gray-500">
                      <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                          <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                          Feedback
                      </span>
                      <span class="text-sm">2 days ago</span>
                  </div>
                  <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">This website is an awesome tool, for students attending the boot camp.</a></h2>
                  <p class="mb-5 font-light text-gray-500 dark:text-gray-400">This website is an excellent tool for students like me attending the boot camp. It likely provides helpful resources, such as study materials, that make the boot camp experience much easier and more enjoyable. I this website to be valuable and would definitely recommend it to others.</p>
                  <div class="flex justify-between items-center">
                      <div class="flex items-center space-x-4">
                          <img class="w-7 h-7 rounded-full" src="https://scontent.fmnl9-2.fna.fbcdn.net/v/t39.30808-6/314538392_1338304310264926_284691910470125593_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHkFjqbdsVp9_wEwUzcU5qmAuLhy6g0d-cC4uHLqDR35_0BJwfW2t8JqMO2w34Xc4oNbrdvREymnjcYW0t3F4ms&_nc_ohc=_-ooMqt6mrQAX8SOfQx&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfAS69jQf6QOY6GNexdEeMRn4wucmIN4_o_e0GFF6I_cjg&oe=65615A8F" alt="Bonnie Green avatar" />
                          <span class="font-medium dark:text-white">
                              Mark Laurence Tomenio
                          </span>
                      </div>
                      <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                          Read more
                          <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </a>
                  </div>
              </article>                  
          </div>  
      </div>
    </section>
</section>

<!-- footer  -->
<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
  <div class="mx-auto max-w-screen-xl text-center">
      <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
         <img src="/assets/images/kodego.png" alt="" width="200px">
        
      </a>
      <p class="my-6 text-gray-500 dark:text-gray-400">We teach skills that make you job-ready. At Kodecamp, our students undergo intensive training so they can build successful careers as digital professionals.</p>
      <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Features</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6 ">Campaigns</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Blog</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Affiliate Program</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
          </li>
          <li>
              <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
          </li>
      </ul>
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023-2024 <a href="#" class="hover:underline">WD86KODEGO </a>. All Rights Reserved.</span>
  </div>
</footer>



<!-- script JS  -->
<script src="//code.tidio.co/7p7n225z9h2mru6o7mhzsohwqrltp76e.js" async></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.js" integrity="sha512-MiIhpeQSr5AO2P1c/3vME/XhtuoDMIH/qtCHusokwCgsjVLzSKaNiNYEeDM1PhFpi6HLuocZmaZ21R0MS+rEyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- script .js  -->
<script src="/script.js"></script>

<script>
  AOS.init();
</script>
<!-- text animation  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </body>
</html>