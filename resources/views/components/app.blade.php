<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('storage/images/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <title>{{ config('app.name').' | '. ucfirst($title) ?? config('app.name')}}</title>

  </head>
  <body>
    <div class="flex font-qsand text-lg">
      {{-- Home page --}}
      @if ($title == 'Home' || $title == 'Login' || $title == 'Welcome')
      <div class="w-full h-screen bg-theme-primary p-2">
        <div class="flex text-white justify-center h-full w-full rounded-lg p-4 bg-theme-secondary">
          {{ $slot }}
        </div>
      </div>
      @else
      <x-sidebar>
        <x-slot name="actualPhase">{{$phase}}</x-slot>
      </x-sidebar>
      <div class="flex flex-col w-full">
        <x-timeline>
          <x-slot name="phase">{{$phase}}</x-slot>
        </x-timeline>
        <div class="w-full h-full bg-theme-primary p-2">
          <div class="flex justify-center h-full w-full rounded-lg p-4 bg-theme-secondary">
            {{ $slot }}
          </div>
        </div>
      </div>
      @endif
    </div>
  </body>
</html>
