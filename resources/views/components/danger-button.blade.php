<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-kenchic-red border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-opacity-90 active:bg-kenchic-red focus:outline-none focus:ring-0 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
