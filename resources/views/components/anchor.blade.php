@props(['href' => '#'])

<a href="{{$href}}" {{$attributes->merge(['class'=> 'text-theme-contrast font-bold'])}}>{{$slot}}</a>
