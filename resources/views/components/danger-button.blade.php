<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center bg-red-600 border border-transparent rounded-md font-semibold text-xs text-pink-200 uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>  
    {{ $slot }}  
</button>  
