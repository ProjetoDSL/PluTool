<div id="sidebar" class="flex-initial transition scrollbar-thin scrollbar-thumb-theme-contrast scrollbar-track-theme-secondary overflow-y-auto text-white flex-col bg-theme-primary h-screen sm:w-32 lg:w-64 pr-2">
  <div class="flex flex-col mb-5">
    <div class="h-48 justify-center flex flex-col flex-wrap content-center">
      <img class="w-32 h-32" src="{{ asset('storage/images/logo.png') }}" alt="Logo">
      <p class="mt-2 text-center text-xl">Plutool</p>
    </div>
    <div class="flex justify-between pr-2 pl-3">
      <div class="flex">
        {{-- <p> {{Auth::user()->name}} </p> --}}
      </div>
      <div class="flex-none text-bottom">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit">
            <p>
              <i class="fas fa-sign-out-alt fa-fw"></i>
            </p>
          </button>
          </form>

      </div>
    </div>
  </div>
  <div>
    @foreach ($activities as $phase => $tasks)
      <div class="flex justify-around items-center">
        <a href="/app/{{$phase}}" class="w-5/6">
          <button class="{{$phase == $actualPhase ? 'text-theme-contrast font-bold' : ''}} flex items-center p-2 cursor-pointer transition duration-200 ease-in-out hover:bg-theme-hover active:bg-theme-contrast gap-4 justify-start w-full">
            <p class="w-6">
              <i class="fas fa-{{$icons[$phase]}}"></i>
            </p>
            <p>{{ __('phases.'.$phase) }}</p>
          </button>
        </a>
        <button class="sidebarActivityExpand w-1/6 p-2 text-center cursor-pointer transition duration-200 ease-in-out hover:bg-theme-hover">
          <i class="fas fa-chevron-right fa-xs"></i>
        </button>
      </div>
      <div class="hidden">
        @foreach ($tasks as $key => $val)
          <a href="/app/{{$phase}}/{{ strtolower(str_replace('.', '-', $key))}}">
            <button class="flex items-center justify-between w-full text-sm bg-theme-secondary transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
              <p class="p-2 w-12">{{$key}}</p>
              <p class="p-2 text-center w-full">{{__('phases.'.$key)}}</p>
            </button>
          </a>
        @endforeach
      </div>
    @endforeach
  </div>
  <div class="flex justify-around w-full">
    <button class="w-6">
      <p> 🇧🇷 </p>
    </button>
    <button class="w-6">
      <p> 🇺🇸 </p>
    </button>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
  $(function() {
    $(".sidebarActivityExpand").on("click", function() {
      $("i.fa-chevron-right", this).switchClass('fa-chevron-right', 'fa-chevron-down text-theme-contrast', 10);
      $("i.fa-chevron-down", this).switchClass('fa-chevron-down text-theme-contrast', 'fa-chevron-right', 0);
      $(this).parent().next('div').toggle('blind', {}, 300);
    });

    var navOpen = 1;
    $("#navSquash").on("click", function() {
      if(navOpen) {
        $("#sidebar").animate({
          width: 0,
        }, 200)
        navOpen = 0;
      } else {
        $("#sidebar").animate({
          width: "16rem",
        }, 200)
        navOpen = 1;
      }
    });
  });
</script>
