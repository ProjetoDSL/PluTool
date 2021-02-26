<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="flex font-qsand">
      @if(explode('/', Request::path())[0] != "")
        @include('layout.sidebar')
        <div class="flex flex-col w-full">
          @include('layout.timeline')
          <div class="flex w-full h-full bg-theme-primary p-2">
            <div class="flex-auto h-full w-full rounded-lg p-4 bg-theme-secondary">
              @yield('content')
            </div>
          </div>
        </div>
      @else
        <div class="flex w-full h-screen bg-theme-primary p-2">
          <div class="flex-auto h-full w-full rounded-lg p-4 bg-theme-secondary">
            {{-- @yield('content') --}}
          </div>
        </div>
      @endif
    </div>
  </body>
</html>
