<x-app>
  <x-slot name="title">
    {{$task}}
  </x-slot>
  <x-slot name="phase">
    {{$phase}}
  </x-slot>
<div class="flex h-full w-full flex-col text-white ">
  <div class="flex-none w-full text-white">
    <p class="text-2xl text-left mb-16">Elicitate Performance Requirements</p>
  </div>
  <form action="/app/planning/requirement/new" class="flex h-full w-full flex-col justify-start" method="POST">
    @csrf
    <div class="flex flex-none flex-col justify-start">
      <div class="flex flex-none flex-col justify-evenly">
        <div class="flex-auto m-5">
          <label for="description">{{ __('forms.description') }}</label>
          <input id="description" maxlength="250" name="description" value="{{$requirement->description}}" class="flex-auto break-words rounded-lg w-full h-full p-2 text-xl text-black focus:border-transparent {{$errors->has('description') ? 'border-red-500 border-2' : ''}}" placeholder="{{ __('forms.description.PH') }}"/>
        </div>
          <!-- @if ($errors->has('description'))
            <p class="flex-none text-red-200 ml-5 mt-2"> {{$errors->first('description')}} </p>
          @endif -->
        <div class="flex-auto flex flex-row justify-between">
          <div class=" flex justify-between flex-col m-5 h-1/2 w-1/2">
            <div class="flex-none h-full mt-5 mb-5">
              <label for="contObg">{{ __('forms.contractualObligations') }}</label>
              <input id="contObg"  maxlength="250" name="contObg" value="{{$requirement->contObrigations}}" class="flex-auto rounded-lg w-full h-full p-2 text-xl text-black {{$errors->has('contObg') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.contractualObligations.PH') }}"/>
            </div>
          </div>
          <div class=" flex justify-between flex-col m-5 h-1/2 w-1/2">
            <div class="flex-none h-full mt-5 mb-5">
              <label for="cltExpec">{{ __('forms.clientExpectations') }}</label>
              <input id="cltExpec" maxlength="250" name="cltExpec" value="{{$requirement->cltExpectations}}" class="flex-auto rounded-lg w-full h-full p-2 text-xl text-black {{$errors->has('cltExpec') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.clientExpectations.PH') }}"/>
            </div>
          </div>
        </div>
      </div>

      <div class="flex-auto flex flex-row justify-between">
        <div class=" flex justify-between flex-col m-5 h-1/2 w-1/2">
          <div class="flex-none h-full mt-5 mb-5">
            <label for="featComp">{{ __('forms.availableFeatures') }}</label>
            <input id="featComp" maxlength="250" name="featComp" value="" class="flex-auto rounded-lg w-full h-full pl-2 text-xl text-black {{$errors->has('featComp') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.availableFeatures.PH') }}"/>
          </div>
          
        </div>
        <div class="flex justify-between flex-col m-5 h-1/2 w-1/2">
          <div class="flex-none h-full mt-5 mb-5">
            <label for="usage">{{ __('forms.applicationUsageScenarios') }}</label>
            <input id="usage" maxlength="250" name="usage" value="" class="flex-auto rounded-lg w-full h-full pl-2 text-xl text-black {{$errors->has('usage') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.applicationUsageScenarios.PH') }}"/>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-none flex flex-row justify-between top-0">
      <div class=" flex flex-col m-5 w-1/2">
        <div class="flex justify-between mb-2">
          <p class="flex-none text-xl">{{ __('forms.businessRequirements') }}</p>
        </div>
        <div class="flex justify-evenly flex-col" id="business">
          <div class="flex justify-between pr-2 pl-3 mb-1">
            <div class="flex-auto">
              <input id="business1" maxlength="250" name="business" class="flex-auto rounded-lg w-full h-full p-2 text-lg text-black {{$errors->has('business') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.businessRequirement') }} 1"/>
            </div>
          </div>
        </div>
      </div>
      <div class=" flex flex-col m-5 w-1/2">
        <div class="flex justify-between mb-2">
          <p class="flex-none text-xl">{{ __('forms.risksMitigated') }}</p>
        </div>
        <div class="flex justify-evenly flex-col" id="risks">
          <div class="flex justify-between pr-2 pl-3 mb-1">
            <div class="flex-auto">
              <input id="risk1" maxlength="250" name="risk" class="flex-auto rounded-lg w-full h-full p-2 text-lg text-black {{$errors->has('risk') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.risk') }} 1"/>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="flex fixed right-4 bottom-4 justify-end w-1/5">
      <a href="/app/planning/p1-1">
        <button type="button" class="flex p-2 items-center text-sm bg-blue-400 focus:outline-none transition duration-200 ease-in-out hover:bg-blue-600 focus:bg-theme-contrast">
          <div class="flex-auto flex justify-evenly content-center">
            <p class="text-center text-xl font-semibold">{{ __('buttons.back') }}</p>
            <p class="inline-flex ml-2 items-center">
              <i class="fas fa-arrow-left fa-lg"></i>
            </p>
          </div>
        </button>
      </a>
    </div>
    

  </form>
</div>
</x-app>
