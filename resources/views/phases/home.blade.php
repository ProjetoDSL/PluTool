<x-app>
  <x-slot name="title">
    {{$phase}}
  </x-slot>
  <x-slot name="phase">
    {{$phase}}
  </x-slot>
  <div class="flex h-full flex-col">
    <div class="flex-none w-full text-white">
      <p class="text-2xl">{{ __('phases.'.$phase) }}</p>
    </div>
    <div class="flex flex-col justify-evenly w-full h-full">
      <div class="flex justify-center w-full">
        <div class="flex flex-wrap h-full w-3/5 2xl:w-7/12 content-center" >
          <img class="border-theme-secondary rounded-lg" src="{{ asset('storage/images/'.$phase.'/'.$phase.'.png') }}" alt="{{ucfirst($phase)}}Logo" >
        </div>
      </div>
      <div class="flex w-full text-white justify-center">
        <p class="2xl:text-xl w-1/2 text-justify">
          {{ __($phase.'.par_1') }}
          <br><br>
          {{ __($phase.'.par_2') }}
        </p>
      </div>
    </div>
    {{-- {{dd($activities)}} --}}
    <div class="flex flex-wrap justify-end w-full">
      <a href="/{{Request::path()}}/{{ strtolower(str_replace('.', '-', array_key_first($activities[$phase])))}}">
        <button class="flex items-center h-12 w-36 text-sm bg-green-300 focus:outline-none transition duration-200 ease-in-out hover:bg-green-200 focus:bg-theme-contrast">
          <div class="flex-auto">
            <p class="text-center text-xl">{{ __('buttons.start') }}</p>
          </div>
        </button>
      </a>
    </div>
  </div>
</x-app>
