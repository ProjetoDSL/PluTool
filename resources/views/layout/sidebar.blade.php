<div class="flex-initial scrollbar-thin scrollbar-thumb-theme-contrast scrollbar-track-theme-secondary overflow-y-auto text-white flex-col bg-theme-primary h-screen sm:w-32 lg:w-64 pt-12">
  @foreach ($activities as $phase => $tasks)
    <div class="sidebarActivityExpand flex items-center h-12 w-full cursor-pointer transition duration-200 ease-in-out hover:bg-theme-hover">
      <div class="flex-none w-16">
        <p class="text-right mr-4">
          <i class="fas fa-{{$sidebarIcons[$phase]}}"></i>
        </p>
      </div>
      <div class="sm:hidden lg:flex flex-auto">
        <p class="text-left">{{ ucfirst($phase) }}</p>
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
              <p class="text-right mr-4">
                {{$key}}
              </p>
            </div>
            <div class="flex-auto">
              <p class="text-left">{{$val}}</p>
            </div>
          </button>
        </a>
      @endforeach
    </div>
  @endforeach
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
