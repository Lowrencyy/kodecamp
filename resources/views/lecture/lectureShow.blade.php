 {{-- @extends('layout') --}}
 {{-- @section('content') --}}
 @include('partials._header')
 @include('partials._navbar')
 <a href="/lectures/{{$lecture['id']}}">
     <!---navigation start-->
     
    <!--video start-->
    <div class="play-contain pt-5">
        <div class="row">
            <div class="play-vid">
                
                
                <div class="ml-15">
                    <iframe width="1280" height="715" src="{{$lecture['video']}}" rel="1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
               
                <h3 class="text-center">KODECAMP86 - <b style="color: rgb(30, 102, 102)">"{{$lecture['lectureName']}}"</b></h3>
                <div class="play-info">
                    <div>
                        <a href=""><img src="/assets/student-image/like.png" alt="">2k</a> 
                        <a href=""><img src="/assets/student-image/dislike.png" alt="">159</a> 
                        <a href=""><img src="/assets/student-image/share.png" alt="">Share</a> 
                        <a href=""><img src="/assets/student-image/save.png" alt="">Save</a> 
                    </div>
                </div>
                <hr>
                <div class="owner">
                    <img src="/assets/images/img-1.png" alt="">
                    <div>
                        <p>KODECAMP 86</p>
                        
                    </div>
                    <p>5k views &bull; 1 days ago</p>
                </div>
                <hr>
                <div class="description">
                    <h2 class="text-center"><b>LECTURE DESCRIPTION</b></h2>
                    <h5 class="text-center pt-3">
                        <b>{{$lecture['description']}}</b>
                    </h5>
                    
                </div>
            </div>
            <div class="right-sidebar">
            

                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        
                    </div>
                </div>
              
           
            </div>
        </div>
    </div>
 

@include('partials._footer')
{{-- @endsection --}}


{{-- 27:13 mins  --}}