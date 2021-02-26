@extends('layout.app')

@section('content')
<div class="flex h-full flex-col text-white overflow-visible">
  <div class="flex-none w-full text-white">
    <p class="text-2xl text-left mb-16">{{ __('phases.P1.1') }}</p>
  </div>
  <!-- @if ($errors->any())
  <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
    <p class="font-bold">Form error!</p>
    <div class="ml-5 alert alert-danger">
      @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
      @endforeach
    </div>
  </div>

  @endif -->
  <form action="/planning/elicitateAdd" class="flex h-full w-full flex-col justify-start" method="POST">
    @csrf
    <div class="flex flex-none flex-col justify-start">
      <div class="flex flex-none flex-col justify-evenly">
        <div class="flex-auto m-5">
          <label for="description">{{ __('forms.description') }}</label>
          <label for="description" class="text-red-200">{{$errors->first('description')}}</label>
          <input id="description" maxlength="250" name="description" value="{{old('description')}}" class="flex-auto break-words rounded-lg w-full h-full p-2 text-xl text-black focus:border-transparent {{$errors->has('description') ? 'border-red-500 border-2' : ''}}" placeholder="{{ __('forms.description.PH') }}"/>
        </div>
          <!-- @if ($errors->has('description'))
            <p class="flex-none text-red-200 ml-5 mt-2"> {{$errors->first('description')}} </p>
          @endif -->
        <div class="flex-auto flex flex-row justify-between">
          <div class=" flex justify-between flex-col m-5 h-1/2 w-1/2">
            <div class="flex-none h-full mt-5 mb-5">
              <label for="contObg">{{ __('forms.contractualObligations') }}</label>
              <label for="contObg" class="text-red-200">{{$errors->first('contObg')}}</label>
              <input id="contObg"  maxlength="250" name="contObg" value="{{old('contObg')}}" class="flex-auto rounded-lg w-full h-full p-2 text-xl text-black {{$errors->has('contObg') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.contractualObligations.PH') }}"/>
            </div>
          </div>
          <div class=" flex justify-between flex-col m-5 h-1/2 w-1/2">
            <div class="flex-none h-full mt-5 mb-5">
              <label for="cltExpec">{{ __('forms.clientExpectations') }}</label>
              <label for="cltExpec" class="text-red-200">{{$errors->first('cltExpec')}}</label>
              <input id="cltExpec" maxlength="250" name="cltExpec" value="{{old('cltExpec')}}" class="flex-auto rounded-lg w-full h-full p-2 text-xl text-black {{$errors->has('cltExpec') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.clientExpectations.PH') }}"/>
            </div>
          </div>
        </div>
        <!-- @if ($errors->has('cltExpec'))
          <div class="flex-auto flex flex-row justify-evenly text-left">
            @if ($errors->has('contObg'))
              <p class="flex-auto text-red-200 ml-5 mt-2"> {{$errors->first('contObg')}} </p>
            @endif
            @if ($errors->has('cltExpec'))
              <p class="flex-auto text-red-200 ml-5 mt-2 "> {{$errors->first('cltExpec')}} </p>
            @endif
          </div>
        @endif -->
      </div>

      <div class="flex-auto flex flex-row justify-between">
        <div class=" flex justify-between flex-col m-5 h-1/2 w-1/2">
          <div class="flex-none h-full mt-5 mb-5">
            <label for="featComp">{{ __('forms.availableFeatures') }}</label>
            <label for="featComp" class="text-red-200">{{$errors->first('featComp')}}</label>
            <input id="featComp" maxlength="250" name="featComp" value="{{old('featComp')}}" class="flex-auto rounded-lg w-full h-full pl-2 text-xl text-black {{$errors->has('featComp') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.availableFeatures.PH') }}"/>
          </div>
          
        </div>
        <div class="flex justify-between flex-col m-5 h-1/2 w-1/2">
          <div class="flex-none h-full mt-5 mb-5">
            <label for="usage">{{ __('forms.applicationUsageScenarios') }}</label>
            <label for="usage" class="text-red-200">{{$errors->first('usage')}}</label>
            <input id="usage" maxlength="250" name="usage" value="{{old('usage')}}" class="flex-auto rounded-lg w-full h-full pl-2 text-xl text-black {{$errors->has('usage') ? 'border-red-400 border-2' : ''}}" placeholder="{{ __('forms.applicationUsageScenarios.PH') }}"/>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-none flex flex-row justify-between top-0">
      <div class=" flex flex-col m-5 w-1/2">
        <div class="flex justify-between mb-2">
          <p class="flex-none text-xl">{{ __('forms.businessRequirements') }}</p>
          <div class="flex-none text-bottom h-full ml-1 w-1/12 p-1">
            <button class="w-full h-full text-sm bg-green-300" onclick="addBussFields()" type="button">
              <p class="text-center inline-flex items-center">
                <i class="fas fa-plus fa-xs"></i>
              </p>
            </button>
          </div>
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
          <div class="flex-none text-bottom h-full ml-1 w-1/12 p-1">
            <button class="w-full h-full text-sm bg-green-300" onclick="addRiskFields()" type="button">
              <p class="text-center inline-flex items-center">
                <i class="fas fa-plus fa-xs"></i>
              </p>
            </button>
          </div>
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
      <a href="/planning/elicitate">
        <button type="submit" class="flex p-2 items-center text-sm bg-blue-400 focus:outline-none transition duration-200 ease-in-out hover:bg-blue-600 focus:bg-theme-contrast">
          <div class="flex-auto flex justify-evenly content-center">
            <p class="text-center text-xl font-semibold">{{ __('buttons.add') }}</p>
            <p class="inline-flex ml-2 items-center">
              <i class="fas fa-plus fa-lg"></i>
            </p>
          </div>
        </button>
      </a>
    </div>
    

  </form>
</div>

<script type='text/javascript'>
  var iR=2;
  function showRiskButton(){
    var name = "riskButton"+(iR-1);
    var element = document.getElementById(name);
    element.style.display="block";
  }
  function addRiskFields(){
    if(iR<=3){
      var risks = document.getElementById("risks");
      var div = document.createElement("div");
      div.className = "flex justify-between pr-2 pl-3 mb-1";
      div.id="riskDiv"+iR;

      var div2= document.createElement("div");
      div2.className = "flex-auto";

      div.appendChild(div2);

      var input= document.createElement("input");
      input.id = "risk" + iR;
      input.name = "risk";
      input.className = "flex-auto w-full rounded-lg h-full p-2 text-lg text-black {{$errors->has('risk') ? 'border-red-400 border-2' : ''}}"
      input.placeholder = "Risk " + iR;

      var divButton = document.createElement("div");
      divButton.className = "flex-none text-bottom ml-1 w-1/12";
      divButton.id="riskButton"+iR;

      var button = document.createElement("button");
      button.className = "w-full h-full text-sm bg-red-300";
      button.type = "button";
      button.onclick= function() {
        this.parentNode.parentNode.remove();
        showRiskButton();
        iR--;
      };

      var p = document.createElement("p");
      p.className = "text-center";

      var i = document.createElement("i");
      i.className = "fas fa-times fa-base";

      p.appendChild(i);
      button.appendChild(p);
      divButton.appendChild(button);

      div2.appendChild(input);
      div.appendChild(divButton);

      risks.appendChild(div);

      if(iR>2){
        var name = "riskButton"+(iR-1);
        var element = document.getElementById(name);
        element.style.display="none";
      }
      if(iR<3){
        iR++;
      }

    }else{
      // TODO caso ja passou o limite de adições
    }
  }

  var iB=2;
  function showBusButton(){
    var name = "busButton"+(iB-1);
    var element = document.getElementById(name);
    element.style.display="block";
  }
  function addBussFields(){
    if(iB<=3){
      var business = document.getElementById("business");
      var div = document.createElement("div");
      div.className = "flex justify-between pr-2 pl-3 mb-1";
      div.id="busDiv"+iB;

      var div2= document.createElement("div");
      div2.className = "flex-auto";

      div.appendChild(div2);

      var input= document.createElement("input");
      input.id = "business" + iB;
      input.name = "business";
      input.className = "flex-auto rounded-lg w-full h-full p-2 text-lg text-black {{$errors->has('business') ? 'border-red-400 border-2' : ''}}"
      input.placeholder = "Business requirement " + iB;

      var divButton = document.createElement("div");
      divButton.className = "flex-none text-bottom ml-1 w-1/12";
      divButton.id="busButton"+iB;

      var button = document.createElement("button");
      button.className = "w-full h-full text-sm bg-red-300";
      button.type = "button";
      button.onclick= function() {
        this.parentNode.parentNode.remove();
        showBusButton();
        iB--;
      };

      var p = document.createElement("p");
      p.className = "text-center";

      var i = document.createElement("i");
      i.className = "fas fa-times fa-base";

      p.appendChild(i);
      button.appendChild(p);
      divButton.appendChild(button);

      div2.appendChild(input);
      div.appendChild(divButton);

      business.appendChild(div);

      if(iB>2){
        var name = "busButton"+(iB-1);
        var element = document.getElementById(name);
        element.style.display="none";
      }
      if(iB<3){
        iB++;
      }

    }else{
      // TODO caso ja passou o limite de adições
    }
  }
</script>
@endsection
