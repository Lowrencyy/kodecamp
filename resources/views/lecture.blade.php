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
                
                
                <div>
                    <iframe width="1180" height="615" src="{{$lecture['video']}}" rel="1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="tags text-center" rel=>
                    <a href="">#HTML</a>
                    <a href="">#CSS</a>
                    <a href="">#Javascript</a>
                </div>
                <h3 class="text-center">KODECAMP86 - {{$lecture['lectureName']}}</h3>
                <div class="play-info">
                    <!-- <p>5k views &bull; 1 days ago</p> -->
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
                   
                </div>
                <div class="description">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, tempora!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora suscipit nemo dolorum voluptatibus, rerum ad ducimus laborum. Illo, cumque assumenda.</p>
                    <hr>
               
                    
                 
                    <div class="prev-comnet">
                        <img src="img/2.png" alt="">
                        <div>
                            <h3 class="text-center"> LECTURE DESCRIPTION</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae quasi quod impedit, velit architecto similique ccusantium commodi, veritatis cumque id, velit doloremque ducimus eaque eos dignissimos animi perspiciatis ullam rerum eligendi. Autem.</p>
                        </div>
                        <div>
                            <h3 class="text-center">INSTALLER</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae quasi quod impedit, velit architecto similique ccusantium commodi, veritatis cumque id, velit doloremque ducimus eaque eos dignissimos animi perspiciatis ullam rerum eligendi. Autem.</p>
                        </div>
                        <div>
                            <h3 class="text-center">ADDITIONAL INFO</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae quasi quod impedit, velit architecto similique ccusantium commodi, veritatis cumque id, velit doloremque ducimus eaque eos dignissimos animi perspiciatis ullam rerum eligendi. Autem.</p>
                        </div>
                    </div>
                  
                    
                </div>
            </div>
            <div class="right-sidebar">
            

                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        {{-- <p>5k views &bull; 1 days</p> --}}
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/html.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        {{-- <p>5k views &bull; 1 days</p> --}}
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        {{-- <p>5k views &bull; 1 days</p> --}}
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/react.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        {{-- <p>5k views &bull; 1 days</p> --}}
                    </div>
                </div>
                <div class="side-list">
                    <a href="/lectures/{{$lecture['id']}}" class="small-size">
                        <img src="/assets/images/tech-stack/css3.png" class="thumbnail" alt="" width="20px"></a>
                    <div class="video-info">
                        <a href="video_playing.html" class="pt-10">ALL CSS LECTURE</a>
                        <p>KODECAMP86</p>
                        {{-- <p>5k views &bull; 1 days</p> --}}
                    </div>
                </div>
           
            </div>
        </div>
    </div>
    <!--video end-->
    {{-- <p>{{$lecture['description']}}</p>
    <iframe width="560" height="315" src={{$lecture['video']}}  title="YouTube video player" rel='0' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  --}}

@include('partials._footer')
{{-- @endsection --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KODECAMP LECTURE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <!--video start-->
    <div class="container play-contain">
        <div class="row">
            <div class="play-vid">
                <iframe width="1130" height="615" src="https://www.youtube.com/embed/STy4_YktXjg?si=9cie_SdLeVMhAXwt&amp;start=1800" rel="1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="tags">
                    <a href="">#web-programming</a>
                    <a href="">#web-designing</a>
                    <a href="">#web-development</a>
                </div>
                <h3>KODECAMP LECTURE-How Developers Work</h3>
                <div class="play-info">
                    <p>5k views &bull; 1 days ago</p>
                    <div>
                        <a href=""><img src="img/like.png" alt="">2k</a>
                        <a href=""><img src="img/dislike.png" alt="">159</a>
                        <a href=""><img src="img/share.png" alt="">Share</a>
                        <a href=""><img src="img/save.png" alt="">Save</a>
                    </div>
                </div>
                <hr>
                <div class="owner">
                    <img src="img/1.png" alt="">
                    <div>
                        <p>KODECAMP86</p>
                        
                    </div>
                    
                </div>
                <div class="description">
                    <p>A Complete Solution For Business</p>
                    <p>Subscribe To Our Channel For Free Projects</p>
                    <hr>
                    
                </div>
            </div>
            <div class="right-sidebar">
               
                    
              
            
                <div class="side-list">
                    <a href="switch.html" class="small-size"> <img src="img/html.png" class="thumbnail" alt=""></a>
                    <div class="video-info">
                        <br>
                        <br>
                        <br>
                        <a href="switch.html">KODECAMP LECTURE</a>
                        <p>kodecamp86 official</p>
                        <p>5k views &bull; 1 days</p>
                    </div>
                </div>
                <div class="side-list">
                    <a href="switch.html" class="small-size"> <img src="img/html.png" class="thumbnail" alt=""></a>
                    <div class="video-info">
                        <br>
                        <br>
                        <br>
                        <a href="switch.html">KODECAMP LECTURE</a>
                        <p>kodecamp86 official</p>
                        <p>5k views &bull; 1 days</p>
                    </div>
                </div>
                <div class="side-list">
                    <a href="switch.html" class="small-size"> <img src="img/html.png" class="thumbnail" alt=""></a>
                    <div class="video-info">
                        <br>
                        <br>
                        <br>
                        <a href="switch.html">KODECAMP LECTURE</a>
                        <p>kodecamp86 official</p>
                        <p>5k views &bull; 1 days</p>
                    </div>
                </div>
                <div class="side-list">
                    <a href="switch.html" class="small-size"> <img src="img/html.png" class="thumbnail" alt=""></a>
                    <div class="video-info">
                        <br>
                        <br>
                        <br>
                        <a href="switch.html">KODECAMP LECTURE</a>
                        <p>kodecamp86 official</p>
                        <p>5k views &bull; 1 days</p>
                    </div>
                </div>
                <div class="side-list">
                    <a href="switch.html" class="small-size"> <img src="img/html.png" class="thumbnail" alt=""></a>
                    <div class="video-info">
                        <br>
                        <br>
                        <br>
                        <a href="switch.html">KODECAMP LECTURE</a>
                        <p>kodecamp86 official</p>
                        <p>5k views &bull; 1 days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--video end-->
</body>
</html> --}}

{{-- 27:13 mins  --}}