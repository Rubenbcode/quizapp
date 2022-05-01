
<button
{{ $attributes->merge(['type' => 'button', 'class' => " px-4 py-3 border border-transparent
rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900
focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 text-center disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</button>