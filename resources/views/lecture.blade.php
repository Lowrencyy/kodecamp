@extends('layout')

@section('content')
<a href="/lecture/{{$lecture['id']}}">
    <p>{{$lecture['description']}}</p>
    <iframe width="560" height="315" src={{$lecture['video']}}  title="YouTube video player" rel='0' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
@endsection
    
