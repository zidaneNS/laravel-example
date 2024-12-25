<x-layout>
    <x-slot:title>Create Job</x-slot:title>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <p class="mt-1 text-gray-600">Fill this field to create new job.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="name" class="block font-medium text-gray-900">Name</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" 
                        placeholder="Programmer"
                        autocomplete="off"
                        required
                        autofocus
                    >
                </div>
                @error('name')
                    <p class="text-red-500 italic">{{ $message }}</p>
                @enderror
                </div>
              </div>
            </div>
        </div>
        
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="pay" class="block font-medium text-gray-900">Salary</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input 
                    type="text" 
                    name="pay" 
                    id="pay" 
                    class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" 
                    placeholder="20.000"
                    autocomplete="off"
                    required
                >
              </div>
              @error('pay')
                  <p class="text-red-500 italic">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/jobs" class="font-semibold text-gray-900">Cancel</a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
</x-layout>