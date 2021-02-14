<div class="flex-initial scrollbar-thin scrollbar-thumb-theme-contrast scrollbar-track-theme-secondary overflow-y-auto text-white flex-col bg-theme-primary h-screen sm:w-32 lg:w-64">
  <div class="flex flex-col mb-5">
    <div class="h-40 flex flex-wrap content-center justify-center">
      <p> LOGO </p>
    </div>
    <div class="flex justify-between pr-2 pl-3">
      <div class="flex">
        <p> Nome </p>
      </div>
      <div class="flex-none text-bottom">
        <p>
          <i class="fas fa-sign-out-alt fa-fw"></i>
        </p>
      </div>
    </div>
  </div>
  <div>
    @foreach ($activities as $phase => $tasks)
      <div class="sidebarActivityExpand flex items-center h-12 w-full cursor-pointer transition duration-200 ease-in-out hover:bg-theme-hover">
        <div class="flex-none w-16">
          <p class="text-right mr-4">
            <i class="fas fa-{{$icons[$phase]}}"></i>
          </p>
        </div>
        <div class="sm:hidden lg:flex flex-auto">
          <p class="text-left">{{ __('phases.'.$phase) }}</p>
        </div>
        <div class="flex-none w-10">
          <p class="text-center">
            <i class="fas fa-chevron-right fa-xs"></i>
          </p>
        </div>
      </div>
      <div class="hidden">
        @foreach ($tasks as $key => $val)
          <a href="/{{$phase}}/{{ strtolower(str_replace('.', '-', $key))}}">
            <button class="flex items-center h-12 w-full text-sm bg-theme-secondary focus:outline-none transition duration-200 ease-in-out hover:bg-theme-hover focus:bg-theme-contrast">
              <div class="flex-none w-16">
                <p class="text-right mr-4">{{$key}}</p>
              </div>
              <div class="flex-auto">
                <p class="text-left">{{__('phases.'.$key)}}</p>
              </div>
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
      $("div:last-child > p > i.fa-chevron-right", this).switchClass('fa-chevron-right', 'fa-chevron-down', 10);
      $("div:last-child > p > i.fa-chevron-down", this).switchClass('fa-chevron-down', 'fa-chevron-right', 0);
      $(this).next('div').toggle('blind', {}, 300);
    });
  });
</script>
