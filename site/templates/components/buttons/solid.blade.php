<button {!! $attributes->merge(['class' => 'bg-flag hover:bg-flag-light px-5 py-2 uppercase text-white text-sm transition duration-300 transform hover:scale-105']) !!}>
    {{ $slot }}
</button>
