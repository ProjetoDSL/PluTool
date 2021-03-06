<x-app>
  <x-slot name="title">
    Forgot Password
  </x-slot>

  <div class="flex items-center">
    <section class="max-w-md">
      <h2 class="text-4xl mb-4">{{__('auth.forgotPassword')}}</h2>
      <p class="mb-6">{{__('auth.forgotMsg')}}</p>
      <main class="pr-4 overflow-y-scroll scrollbar-thin scrollbar-thumb-gray-400 scrollbar-thumb-rounded scrollbar-track-theme-secondary max-h-112">
        <x-forgotForm></x-forgotForm>
      </main>
    </section>
  </div>

</x-app>