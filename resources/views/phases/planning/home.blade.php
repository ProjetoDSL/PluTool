@extends('layout.app')
@section('content')
<div class="flex h-full flex-col">
  <div class="flex-none w-full text-white">
    <p class="text-2xl">Planning</p>
  </div>
  <div class="flex flex-col justify-evenly w-full h-full">
    <div class="flex justify-center w-full">
      <div class="flex flex-wrap h-full w-3/5 2xl:w-7/12 content-center" >
        <img class="border-theme-secondary rounded-lg" src="{{ asset('images/planning.png') }}" alt="Planning" >
      </div>
    </div>
    <div class="flex w-full text-white">
      <p class="2xl:text-xl w-full">
        The planning phase is the first performance testing phase. <br/>
        In this phase, some factors are mapped, such as the allocation of resources, be it infrastructure, data and also human resources involved in the test.<br/><br/>

        The general scope of the performance test should be defined during the planning phase.<br/>
        In addition, the identification and analysis of risks as well as information relevant to the test should also be mapped.<br/>
        In summary, the definition of the test occurs in the planning phase.<br/>
      </p>
    </div>
  </div>
  <div class="flex flex-wrap justify-end w-full">
    <a href="/{{Request::path()}}/{{ strtolower(str_replace('.', '-', array_key_first($activities[Request::path()])))}}">
      <button class="flex items-center h-12 w-36 text-sm bg-green-300 focus:outline-none transition duration-200 ease-in-out hover:bg-green-200 focus:bg-theme-contrast">
        <div class="flex-auto">
          <p class="text-center text-xl">Start</p>
        </div>
      </button>
    </a>
  </div>
</div>
@endsection
