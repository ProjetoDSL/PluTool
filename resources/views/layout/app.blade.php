<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa-app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="flex-auto scrollbar-thin scrollbar-thumb-theme-contrast scrollbar-track-theme-secondary overflow-y-auto font-wsans text-white flex-col bg-theme-primary h-screen md:w-60 pt-8">
      <div id="planningBtn" class="flex items-center h-12 w-full cursor-pointer transition duration-200 ease-in-out hover:bg-theme-hover">
        <div class="flex-none w-16">
          <p class="text-right mr-4">
            <i class="fas fa-layer-group"></i>
          </p>
        </div>
        <div class="flex-auto">
          <p class="text-left">Planning</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
      <div id="planningMenu" class="hidden">
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P1.1
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Elicitate Performance Requirements</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P1.2
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Analyze Performance Requirements</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P1.3
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Specify Performance Requirements</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P3.1
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Identify User Profiles</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P3.2
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Identify Key Scenarios</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P3.3
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Determine Distribution of User Activities</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P2.1
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Plan Test Design</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P4.1
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Identify the Test Environment</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P6.1
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Choose Tool</p>
          </div>
        </button>
        <button class="flex items-center h-12 w-full text-sm cursor-pointer bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
          <div class="flex-none w-16">
            <p class="text-right mr-4">
              P6.2
            </p>
          </div>
          <div class="flex-auto">
            <p class="text-left">Choose Method</p>
          </div>
        </button>
      </div>
      <div class="flex items-center h-12 w-full">
        <div class="flex-none w-16">
        <p class="text-right mr-4">
          <i class="fas fa-cog"></i>
        </p>
        </div>
        <div class="flex-auto">
          <p class="text-left">Configuration</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
      <div class="flex items-center h-12 w-full">
        <div class="flex-none w-16">
        <p class="text-right mr-4">
          <i class="fas fa-play"></i>
        </p>
        </div>
        <div class="flex-auto">
          <p class="text-left">Execution</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
      <div class="flex items-center h-12 w-full">
        <div class="flex-none w-16">
        <p class="text-right mr-4">
          <i class="fas fa-desktop"></i>
        </p>
        </div>
        <div class="flex-auto">
          <p class="text-left font-medium">Monitoring</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
      <div class="flex items-center h-12 w-full">
        <div class="flex-none w-16">
        <p class="text-right mr-4">
          <i class="fas fa-chart-pie"></i>
        </p>
        </div>
        <div class="flex-auto">
          <p class="text-left">Analysis</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
      <div class="flex items-center h-12 w-full">
        <div class="flex-none w-16">
        <p class="text-right mr-4">
          <i class="fas fa-scroll"></i>
        </p>
        </div>
        <div class="flex-auto">
          <p class="text-left">Reporting</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $(function() {
        $("#planningBtn").on("click", function() {
          $("#planningBtn > div:last-child > p > i.fa-chevron-right").switchClass('fa-chevron-right', 'fa-chevron-down', 10);
          $("#planningBtn > div:last-child > p > i.fa-chevron-down").switchClass('fa-chevron-down', 'fa-chevron-right', 0);
          $("#planningMenu").toggle('blind', {}, 300);
        });
      } );
      </script>
  </body>
</html>
