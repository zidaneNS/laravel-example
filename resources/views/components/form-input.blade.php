@props(['name'])
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="{{ $name }}" class="block font-medium text-gray-900">{{ $slot }}</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input  
                    name="{{ $name }}" 
                    id="{{ $name }}" 
                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" 
                    autocomplete="off"
                    required
                    autofocus
                    {{ $attributes->merge(['class' => 'block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6']) }}
                >
            </div>
            @error($name)
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
          </div>
        </div>
    </div>
</div>