@props(['errors'])

@if ($errors->any())
    <div class="bg-theme-primary p-1 mb-4 rounded-md" {{ $attributes }}>
        <div class="w-full">
            <p class="text-red-500 mb-2 font-bold text-center">{{ __('auth.somethingWentWrong') }}</p>
        </div>
        <ul>
          @foreach ($errors->all() as $error)
            <li class="text-red-400 font-bold text-sm" >{{$error}}</li>
          @endforeach
        </ul>
    </div>
@endif
