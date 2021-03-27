<div class="flex-initial bg-theme-secondary h-12 ml-2">
  <div class="flex text-white items-center h-full">
    <div id="navSquash" class="flex-none w-12 h-full">
      <button class="h-full w-full cursor-pointer focus:outline-none active:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover">
        <p><i class="fas fa-bars fa-lg"></i></p>
      </button>
    </div>
    <div class="flex-none w-12 h-full">
      <a href="/app/{{(string)$phase}}">
        <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p><i class="fas fa-home fa-lg"></i></p></button>
      </a>
    </div>
    @foreach ($activities[(string)$phase] as $key => $val)
    <div class="timelineTask flex-auto text-center h-full">
      <button class="border-b-4 border-gray-400 h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>{{$key}}</p></button>
    </div>
    @endforeach
  </div>
</div>

<script>
  $(function() {
    var count = $('.timelineTask').length,
    choice = 1 + Math.floor(Math.random() * count);

    $('.timelineTask > button').eq(0).css('border-color', '#57c64b')
    $('.timelineTask > button').eq(1).css('border-color', '#528ad8')
  })
</script>
