<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-[180px] h-[40px] flex justify-center items-center py-2 bg-[#E8C597] border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
