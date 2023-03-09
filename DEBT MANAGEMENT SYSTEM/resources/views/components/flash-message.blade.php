@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
class="absolute z-0 top-0 left-1/2 transform -translate-x-1/2 bg-emerald-200 text-black px-48 py-3">
  <p class="font-bold" >
    {{session('message')}}
  </p>
</div>
@endif