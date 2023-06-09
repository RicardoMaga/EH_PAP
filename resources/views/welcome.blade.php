<x-app-layout>

    <div class="bg-gradient-to-r from-green-700 to-lime-500  w-full h-19">

        <a href="/" class="text-3xl pt-7 pr-7 pl-7 pb-4 hover:bg-gray-800  text-white">ElectroHouse</a>
        @if (Auth::User())
            <button class="pt-4 pr-2 pl-2 pb-4 text-lg text-white rounded-none hover:bg-gray-800 "><a
                    href="/produtos">Produtos</a></button>

            <button class="pt-4 pr-2 pl-2 pb-4 text-lg text-white rounded-none hover:bg-gray-800 "><a
                    href="/clientes">Clientes</a></button>
        @endif
        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a
                href="/comprar">Comprar</a></button>

        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a
                href="/reservas">Reservas</a></button>

        <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a
                href="/contactos">Contactos</button>



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
        <div class="bg-gray-200 h-screen w-full">
            <div>
                <p class="text-2xl static pt-4 pl-4 pb-3 text-center text-black">Bem Vindo à ElectroHouse
                <p>
            </div>
            @if (!Auth::User())
            @else
                <p class="text-xl static pt-4 pl-4 text-black">Eletrodomésticos recondicionados
                <p>
            @endif
            <div class=" border-3 ml-2 mr-2 h-1 rounded bg-black">
                <br>



                @if (!Auth::User())
                    <div>
                        <p class="text-2xl static pt-4 pl-4 pb-3 text-center text-black">É preciso fazer autenticação
                            para poder ver os produtos
                        <p>
                    </div>
                @else
                    <div>

                        <livewire:produto-show>

                    </div>
                @endif

            </div>

        </div>


</x-app-layout>
