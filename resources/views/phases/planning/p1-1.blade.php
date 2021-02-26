@extends('layout.app')

@section('content')
<div class="flex h-full flex-col text-white ">
  <div class="flex-none w-full text-white">
    <p class="text-2xl text-left mb-20">{{ __('phases.P1.1') }}</p>
  </div>
  @if(session()->has('success'))
  <div id="success" class="fixed w-56 bg-green-100 border top-1/2 left-1/2 break-words border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline"><br/>The requirement was added.</span>
    <span onclick="closeit()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </span>
  </div>
  @endif
  <div class="flex flex-col justify-between w-full h-full">
    <div class="flex flex-wrap justify-center">
      <table class="table-fixed border-collapse w-10/12">
        <thead>
          <tr class="h-12">
            <th class="w-12 h-5 text-center">ID</th>
            <th class="w-1/2 h-5 text-left">{{ __('forms.description') }}</th>
            <th class="w-24 h-5 text-center">{{ __('forms.actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($requirements as $req)
          <tr class="h-12">
            <td class="border border-theme-contrast text-center"><p>{{$req['id']}}</p></td>
            <td class="border border-theme-contrast pl-5">{{$req['description']}}</td>
            <td class="border border-theme-contrast">
              <div class="flex flex-row">
                <a class="flex flex-auto" href="/">
                  <button class="text-center w-full">
                    <p>
                      <i class="fas fa-pencil-alt fa-lg fill-current text-yellow-300"></i>
                    </p>
                  </button>
                </a>
                <a class="flex flex-auto" href="/planning/elicitateView/{{$req['id']}}">
                  <button class="text-center w-full">
                    <p>
                      <i class="fas fa-eye fa-lg fill-current text-green-600"></i>
                    </p>
                  </button>
                </a>
                <a class="flex flex-auto" href="/">
                  <button class="text-center w-full">
                    <p>
                      <i class="fas fa-times fa-lg fill-current text-red-600"></i>
                    </p>
                  </button>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="flex justify-between w-full">
      <a href="">
        <p class="ml-6">{{ __('phases.P1.1.techniques') }}</p>
      </a>
      <div class="flex justify-between w-1/5">
        <a href="/planning/elicitateAdd">
          <button class="flex items-center p-2 text-sm bg-blue-400 focus:outline-none transition duration-200 ease-in-out hover:bg-blue-600 focus:bg-theme-contrast">
            <div class="flex-auto flex justify-evenly content-center">
              <p class="text-center text-xl font-semibold">{{ __('buttons.addNew') }}</p>
              <p class="inline-flex ml-2 items-center">
                <i class="fas fa-plus fa-lg"></i>
              </p>
            </div>
          </button>
        </a>

        <a href="">
          <button class="flex items-center p-2 text-sm bg-green-300 focus:outline-none transition duration-200 ease-in-out hover:bg-green-600 focus:bg-theme-contrast">
            <div class="flex-auto flex justify-evenly content-center">
              <p class="text-center text-xl font-semibold">{{ __('buttons.continue') }}</p>
              <p class="inline-flex ml-2 items-center">
                <i class="fas fa-arrow-right fa-lg"></i>
              </p>
            </div>
          </button>
        </a>
      </div>
    </div>
  </div>
</div>
<script> 
  function closeit(){ 
    document.getElementById('success').setAttribute("style", "display:none");
  } 
  setTimeout("closeit", 3000);
</script>

@endsection
