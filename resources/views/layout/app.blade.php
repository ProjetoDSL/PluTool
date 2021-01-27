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
    @include('layout.sidebar')
    <div class="flex-auto bg-theme-secondary h-16 flex-col">
      <div class="flex grid grid-cols-10 text-white items-center h-full">
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P1.1</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P1.2</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P1.3</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P3.1</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P3.2</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P3.3</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P2.1</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P4.1</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P6.1</p></button>
        </div>
        <div class="text-center h-full">
          <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>P6.2</p></button>
        </div>
      </div>
      <div class="shadow w-full bg-gray-400">
        <div class="flex-auto h-1 bg-theme-contrast" style="width:10%"></div>
      </div>
    </div>
  </div>
</body>
</html>
