<x-app-layout>

        <div class="bg-gradient-to-r from-green-700 to-lime-500  w-full h-full">

        <a href="/" class="text-3xl pt-7 pr-7 pl-7 pb-4 hover:bg-gray-800  text-white">ElectroHouse</a>
       
        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/comprar">Comprar</a></button>

        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/reservas">Reservas</a></button>

        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/contactos">Contactos</button>


        <a class="pr-10 pl-10">
            <input type="text"
                class=" pl-3 py-2 px-1 w-1/4 rounded shadow font-thin focus:outline-none focus:shadow-lg
   focus:shadow-slate-200 duration-100 shadow-gray-100"
                placeholder="Pesquisar...">
        </a>
        @if (!Auth::User())
            <button
                class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 "><a
                    href="/login">Iniciar Sessão</a></button>
        @else
            <button
                class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 "><a
                    href="/logout">Encerrar Sessão</a></button>
        @endif
<div class="bg-white h-full w-full">
            
   <p class="text-2xl static pt-4 pl-4 pb-3 text-center text-black">Compra de Eletrodomésticos
                <p>
                <div class=" border-3 ml-2 mr-2 h-1 rounded bg-black">
                <br>
            </div>
    
<br>
        <div>

            <livewire:produto-show>

        </div>


    </div>

    </div>


</x-app-layout>
