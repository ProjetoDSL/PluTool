@extends('layout.app')

@section('content')
<div class="flex h-full flex-col text-white ">
  <div class="flex-none w-full text-white">
    <p class="text-2xl text-left mb-16">Elicitate Performance Requirements</p>
  </div>
  <div class="flex h-full w-full flex-col justify-evenly">
    <div class="flex flex-auto flex-col justify-evenly">
      <div class="flex-auto bg-blue-200 m-5">
        <input class="flex-auto w-full h-full p-2 text-xl text-black" placeholder="Description"/>
      </div>
      <div class="flex-auto flex flex-row justify-evenly">
        <div class="flex-auto m-5">
          <input class="flex-auto w-full h-full p-2 text-xl text-black" placeholder="Contractual Obrigations"/>
        </div>
        <div class="flex-auto m-5">
          <input class="flex-auto w-full h-full p-2 text-xl text-black" placeholder="Client Expectations"/>
        </div>
      </div>
    </div>

    <div class="flex-auto flex flex-row justify-evenly">
      <div class="flex-auto flex justify-between flex-col m-5">
        <p class="flex-none text-xl mb-3">Risks to be mitigated</p>
        <div class="flex justify-evenly flex-col">
          <div class="flex justify-between pr-2 pl-3 mb-1">
            <div class="flex-auto">
              <input class="flex-auto w-full h-full p-2 text-lg text-black" placeholder="Risk 1"/>
            </div>
            <div class="flex-none text-bottom ml-1 w-1/12">
              <button class="w-full h-full text-sm bg-green-300">
                <p class="text-center">
                  <i class="fas fa-plus fa-xs"></i>
                </p>
              </button>
            </div>
          </div>
          <div class="flex justify-between pr-2 pl-3">
            <div class="flex-auto">
              <input class="flex-auto w-full h-full p-2 text-lg text-black" placeholder="Risk 2"/>
            </div>
            <div class="flex-none text-bottom ml-1 w-1/12">
              <button class="w-full h-full text-sm bg-green-300">
                <p class="text-center">
                  <i class="fas fa-plus fa-xs"></i>
                </p>
              </button>
            </div>
          </div>
        </div>
        <div class="flex h-1/2 m-5">
          <input class="flex-auto w-full h-5/6 pl-2 text-xl text-black" placeholder="Available application features and components"/>
        </div>
      </div>
      <div class="flex-auto flex justify-between flex-col m-5">
        <p class="text-xl mb-3">Business requirements</p>
        <div class="flex justify-evenly flex-col">
          <div class="flex justify-between pr-2 pl-3 mb-1">
            <div class="flex-auto">
              <input class="flex-auto w-full h-full p-2 text-lg text-black" placeholder="Business requirment 1"/>
            </div>
            <div class="flex-none text-bottom ml-1 w-1/12">
              <button class="w-full h-full text-sm bg-green-300">
                <p class="text-center">
                  <i class="fas fa-plus fa-xs"></i>
                </p>
              </button>
            </div>
          </div>
          <div class="flex justify-between pr-2 pl-3">
            <div class="flex-auto">
              <input class="flex-auto w-full h-full p-2 text-lg text-black" placeholder="Business requirment 2"/>
            </div>
            <div class="flex-none text-bottom ml-1 w-1/12">
              <button class="w-full h-full text-sm bg-green-300">
                <p class="text-center">
                  <i class="fas fa-plus fa-xs"></i>
                </p>
              </button>
            </div>
          </div>
        </div>
        <div class="flex h-1/2 m-5">
          <input class="flex-auto w-full h-5/6 pl-2 text-xl text-black" placeholder="Application usage scenarios "/>
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection
