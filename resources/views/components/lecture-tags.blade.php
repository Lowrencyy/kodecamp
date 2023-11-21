@props(['tagsCsv'])
@php
$tags = explode(',' , $tagsCsv)
@endphp


<ul class="flex">
    @foreach($tags as $tag)
    <li
      class="flex items-center justify-center  text-white rounded-xl py-1  mr-2 text-xs"
    >
     ><a href="/?tag={{$tag}}"><b>{{$tag}}</b></a>
    </li>
      
    @endforeach
  </ul>