<a {{ $attributes }} class="{{ !$active ? "text-gray-300 hover:bg-gray-700 hover:text-white" : "bg-gray-900 text-white" }} rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
    {{ $slot }}
</a>