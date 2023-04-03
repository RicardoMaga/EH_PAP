<div>
    <section class="mb-32 text-center text-gray-800">
        <div class="max-w-[900px] mx-auto px-2 lg:px-2">
            <h2 class="text-3xl font-bold mb-2">Contacte-nos </h2>
            <form>
                <div class="form-group mb-6">
                    <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInput7" placeholder="Nome" for="nome" wire:model='nome'>
                </div>
                <div class="form-group mb-6">
                    <input type="text"
                        class="form-control block w-full focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" placeholder="Nº de Telemóvel" for="nº de telemovel" wire:model='nº_de_telemovel'>
                </div>
                <input type="email"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300 rounded  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput8" placeholder="Endereço de E-mail" for="email" wire:model='email'>
        </div>
        <br>
        <div class="form-group mb-6">
            <textarea
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="exampleFormControlTextarea13" rows="3" placeholder="Mensagem" for="mensagem"wire:model='mensagem'></textarea>
        </div>

        <button type="submit"
            class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Enviar</button>
        </form>
</div>
</section>
</div>
