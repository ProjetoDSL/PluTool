<x-auth-card>
    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />
    <form method="POST" action="{{url('/login')}}">
        @csrf
        <!-- Name -->
        <div>
          <x-label for="name" :value="__('auth.name')" />
          <x-input
            id="name"
            class="block mt-1 w-full"
            type="text"
            name="name"
            :value="old('name')"
            required
            autofocus
          />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('auth.email')" />
            <x-input
              id="email"
              class="block mt-1 w-full"
              type="email"
              name="email"
              :value="old('email')"
              required
            />
        </div>
        <!-- Password -->
        <div class="mt-4">
          <x-label for="password" :value="__('auth.passwordField')" />
          <x-input
            id="password"
            class="block mt-1 w-full"
            type="password"
            name="password"
            required
            autocomplete="new-password"
          />
        </div>
        <!-- Confirm Password -->
        <div class="mt-4">
          <x-label for="password_confirmation" :value="__('auth.confirmpassword')"/>
          <x-input
            id="password_confirmation"
            class="block mt-1 w-full"
            type="password"
            name="password_confirmation"
            required
          />
        </div>
        <div class="flex items-center justify-end mt-4">
          <a class="underline" href="{{ route('login') }}">
              {{ __('auth.alreadyregistered') }}
          </a>
          <x-button class="ml-4">
              {{ __('auth.register') }}
          </x-button>
        </div>
    </form>
</x-auth-card>
