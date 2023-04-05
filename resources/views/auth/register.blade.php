<x-guest-layout>
<x-app-layout>

<div class="bg-gradient-to-r from-green-700 to-lime-500  w-full h-19">

    <a href="/" class="text-3xl pt-7 pr-7 pl-7 pb-4 hover:bg-gray-800  text-white">ElectroHouse</a>
  @if(Auth::User())
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg text-white rounded-none hover:bg-gray-800 "><a href="/produtos">Produtos</a></button>
    @endif
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/comprar">Comprar</a></button>
 
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/reservas">Reservas</a></button>

    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/contacto">Contacto</button>

    
<a class="pr-10 pl-10">
  <input  type="text" class=" pl-3 py-2 px-1 w-1/3 rounded shadow font-thin focus:outline-none focus:shadow-lg
   focus:shadow-slate-200 duration-100 shadow-gray-100" placeholder="Pesquisar...">
</a>
@if(!Auth::User())
  <button class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 " ><a href="/login">Iniciar Sessão</a></button>
    @else

    <button class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 " ><a href="/logout">Encerrar Sessão</a></button>

    @endif
    <br>

    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST"  action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nome') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="morara" value="{{ __('Morada') }}" />
                <x-input id="morada" class="block mt-1 w-full" type="text" name="morada" :value="old('morada')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="nif" value="{{ __('NIF') }}" />
                <x-input id="nif" class="block mt-1 w-full" type="text" name="nif" :value="old('nif')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="nº_e_telemovel" value="{{ __('Número de Telemóvel') }}" />
                <x-input id="nº_de_telemovel" class="block mt-1 w-full" type="text" name="nº_de_telemovel" :value="old('nº_de_telemovel')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Palavra-Passe') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Palavra-Passe') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Já está Registado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    </x-app-layout>
</x-guest-layout>
