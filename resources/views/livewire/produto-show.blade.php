<div>

<form>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg%22%3E">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search" wire:model="search"
                        class="block w-full p-4 pl-10  text-smbg-white border-b dark:bg-gray-200
                        dark:border-gray-700 text-black"
                        placeholder="Procurar Produtos" required>
                </div>
            </form>
            <br>

    <div class="grid grid-cols-3 gap-2">

    @foreach ($data as $item)
    @foreach ($item->produtos as $p)
    
      <livewire:p-show :item="$item" :p="$p" key="{{$item->id}}"/>


    @endforeach 
    @endforeach 
    </div>
</div>
