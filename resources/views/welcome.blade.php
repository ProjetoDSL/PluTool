<x-app>
  <x-slot name="title">
    Welcome
  </x-slot>

  <div class="flex gap-16 items-center">
    <section class="max-w-2xl">
      <h2 class="text-7xl mb-8">PluTool</h2>
      <main>
        <p class="text-justify mb-8">{{__('welcome.par1.1')}}<x-anchor href="http://lesse.com.br/ptbok">{{__('welcome.ptbok')}}</x-anchor>{{__('welcome.par1.2')}}</p>
        <h4 class="font-bold text-2xl">{{__('welcome.whoshould')}}</h4>
        <p class="text-justify">{{__('welcome.par2.1')}}<x-anchor href="http://lesse.com.br/ptbok/PTBOK/roles/performance_analyst_4BADFF8D.html?nodeId=ea6f77c7">{{__('welcome.r1')}}</x-anchor> <x-anchor href="http://lesse.com.br/ptbok/PTBOK/roles/performance_architecht_D1C5DE42.html?nodeId=41ea0ba8">{{__('welcome.r2')}}</x-anchor>{{__('welcome.and')}}<x-anchor href="http://lesse.com.br/ptbok/PTBOK/roles/performance_tester_A383DE8D.html?nodeId=4a4a967e">{{__('welcome.r3')}}</x-anchor>{{__('welcome.par2.2')}}</p>
      </main>
    </section>
    <section class="max-w-md">
      <h2 class="text-4xl mb-4">{{__('auth.signup')}}</h2>
      <p class="mb-6">{{__('auth.signupMsg')}}</p>
      <main class="pr-4 overflow-y-scroll scrollbar-thin scrollbar-thumb-gray-400 scrollbar-thumb-rounded scrollbar-track-theme-secondary max-h-112">
        <x-register></x-register>
      </main>
    </section>
  </div>

</x-app>
