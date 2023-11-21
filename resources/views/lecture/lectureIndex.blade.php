@extends('layout')
@section('content')
    @unless (count($lectures) == 0)
        @foreach ($lectures as $lecture)
            <x-lecture-card :lecture="$lecture"/>
        @endforeach
    @endunless
 @endsection

 