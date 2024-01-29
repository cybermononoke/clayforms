<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-transparent transition ease-in-out duration-150', 'style' => 'color: #F8C8DC;']) }}>
    {{ $slot }}
</button>
