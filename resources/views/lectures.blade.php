@extends('layout')
@section('content')
@unless (count($lectures) == 0)
@foreach ($lectures as $lecture)

<div class="video-list d-flex">
    <a href="/lectures/{{$lecture['id']}}">
        <img src="{{$lecture['image']}}" class="thumbnail" alt=""></a>
    <div class="flex-div">
        <img src="{{$lecture['image']}}" alt="lecture-image">
        <div class="video-info">
            <a href="#">{{$lecture['lectureName']}}</a>
            <p class="text-center">{{$lecture['description']}}</p>
            <ul class="text-center">
                <li>{{$lecture['tags']}}</li>
            </ul>
            {{-- <p class="text-center">HTML,CSS</p> --}}
        </div>
    </div>
</div>

    @endforeach
    @endunless


 @endsection

 