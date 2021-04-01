@props([
  'color' => null
])

<button {{$attributes->merge(['type' => 'submit', 'class' => ($color != null ? 'bg-theme-'.$color.' hover:bg-opacity-70' : 'bg-theme-primary hover:bg-theme-secondary') . ' inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-white uppercase tracking-widest active:bg-gray-900 focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 gap-2']) }}>
    {{ $slot }}
</button>
