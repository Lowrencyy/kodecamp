@if(session()->has('message'))
<div x-data="{show:true}" x-init="setTimeout(() => show = false , 3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2  px-48 py-3 z-20 rounded-tl-lg rounded-tr-md rounded-bl-sm rounded-br-xl" >
<p>{{session('message')}}</p>
</div>

@endif 