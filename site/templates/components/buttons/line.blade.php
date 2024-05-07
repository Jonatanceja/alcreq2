<button {!! $attributes->merge(['class' => 'bg-transparent hover:bg-white border border-white px-5 py-2 uppercase text-white hover:text-gray-900 text-sm transition duration-300']) !!}>
    {{ $slot }}
</button>

