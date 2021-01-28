<div class="flex-initial bg-theme-secondary w-full h-12 flex-col">
  <div class="flex text-white items-center pb-1 h-full">
    @foreach ($activities[explode('/', Request::path())[0]] as $key => $val)
      <div class="timelineTask flex-auto text-center h-full">
        <button class="h-full w-full cursor-pointer focus:outline-none focus:bg-theme-contrast transition ease-in-out duration-200 hover:bg-theme-hover"><p>{{$key}}</p></button>
      </div>
    @endforeach
  </div>
  <div class="-mt-1 shadow w-full bg-gray-400">
    <div class="progressBar flex-auto h-1 bg-theme-contrast"style="width: 10%" ></div>
  </div>
  <script>
    $(function() {})
  </script>
</div>
