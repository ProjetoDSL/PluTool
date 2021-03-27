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
        <x-button color="green">
          <p class="text-xl">{{ __('buttons.start') }}</p>
          <i class="fas fa-play"></i>
        </x-button>
      </a>
    </div>
  </div>
</x-app>
