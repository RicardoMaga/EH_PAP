<div>


    <div class="bg-gradient-to-r from-green-700 to-lime-500  w-full h-19">

    <a href="/" class="text-3xl pt-7 pr-7 pl-7 pb-4 hover:bg-gray-800  text-white">ElectroHouse</a>
  @if(Auth::User())
   <button class="pt-4 pr-2 pl-2 pb-4 text-lg text-white rounded-none hover:bg-gray-800 "><a href="/produtos">Produtos</a></button>

    @endif
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/comprar">Comprar</a></button>
 
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/reservas">Reservas</a></button>

    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/contactos">Contactos</button>


    
<a class="pr-10 pl-10">
  <input  type="text" class=" pl-3 py-2 px-1 w-1/4 rounded shadow font-thin focus:outline-none focus:shadow-lg
   focus:shadow-slate-200 duration-100 shadow-gray-100" placeholder="Pesquisar...">
</a>
@if(!Auth::User())
  <button class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 " ><a href="/login">Iniciar Sessão</a></button>
    @else

    <button class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 " ><a href="/logout">Encerrar Sessão</a></button>

    @endif
<div class="bg-white h-screen w-full">


    <div class="px-6 py-4 text-2xl text-center">
        Clientes
    </div>
    <br>

            <br>
        

        
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Role</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th> 
                        <th scope="col" class="px-6 py-3">Nº de Tel</th>
                        <th scope="col" class="px-6 py-3">NIF</th>
                        <th scope="col" class="px-6 py-3">Morada</th>
                        <th scope="col" class="px-6 py-3">Ação</th>
                       
                        <div class="flex-grow ">
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
                        class="block w-full p-4 pl-10  text-smbg-white border-b dark:bg-gray-800
                        dark:border-gray-700 dark:text-white"
                        placeholder="Procurar Clientes" required>
                </div>
            </form>

        </div>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($data as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->id }}</th>
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->role }}</th>
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->name }}</th>
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->email }}</th>
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->nº_de_telemovel }}</th> 
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->nif }}</th>  
                            <th scope="row"
                                class="px-3 py-3 font-medium text-white whitespace-nowrap">
                                {{ $item->morada }}</th>  
                           
                            <th scope="row"
                                class="px-3 py-3">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                     font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 
                                     focus:outline-none" wire:click="updateShowModal({{ $item->id }})">Editar</button>
                                <button type="button"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4
                                     focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2
                                     " wire:click="deleteShowModal({{ $item->id }})">Apagar</button>
                               
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   




{{-- Modal Form --}}
    <x-dialog-modal wire:model="modalFormVisible">
     @if ($modelId)
        <x-slot name="title">
            {{ __('Editar') }}
        </x-slot>
    @else
    <x-slot name="title">
            {{ __('Criar') }}
        </x-slot>
    @endif
        <x-slot name="content">

            <div class="mt-4"> 
            <x-label for="roles" value="{{ __('Roles') }}" />
            <select wire:model.defer="role" id="" class="block appearance-none w-full bg-gray-100 border
             border-gray-200 text-gray-700 py-3 px-4 pr-8 round leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
             <option value="">Defina a role</option>
              @foreach (App\Models\User::userRoleList() as $key => $value)
               <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
                 </select>
                  @error('role')
                   <span class="error">Role invalida</span>
                    @enderror
                     </div>   

            <div class="mt-4">
                <x-label for="name" value="{{ __('Nome') }}"></x-jet-label>
                <x-input wire:model="name" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>  

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" ></x-jet-label>
                <x-input wire:model="email" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>  

             <div class="mt-4">
                <x-label for="nº_de_telemovel" value="{{ __('Nº de Telemóvel') }}" ></x-jet-label>
                <x-input wire:model="nº_de_telemovel" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('nº_de_telemovel') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <x-label for="nif" value="{{ __('NIF') }}" ></x-jet-label>
                <x-input wire:model="nif" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('nif') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <x-label for="morada" value="{{ __('Morada') }}" ></x-jet-label>
                <x-input wire:model="morada" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('morada') <span class="error">{{ $message }}</span> @enderror
            </div>       
 
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Não') }}
            </x-secondary-button>

            @if ($modelId)
                <x-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Editar') }}
                </x-danger-button>
            @else
                <x-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Criar') }}
                </x-danger-button>
            @endif            
        </x-slot>
    </x-dialog-modal>

    {{-- The Delete Modal --}}
    <x-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Eliminar') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Deseja mesmo eliminar o registo?') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Não quero') }}
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Deveras!') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>