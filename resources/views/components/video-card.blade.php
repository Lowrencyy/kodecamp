@props(['suggestion'])

<div class="side-list">
    <a href="/lectures/{{$lecture['id']}}" class="small-size">
        <img src="{{$lecture['image']}}" class="thumbnail" alt="lecture-image-side-list" width="20px"></a>
    <div class="video-info">
        <a href="video_playing.html" class="pt-10">{{$lecture['lectureName']}}</a>
        <p><b>KODECAMP LECTURE</b></p>
    </div>
</div>






  
