<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
        
                    <form action="/cadastrar" method="post">
                    @csrf

                        <!-- Cor -->
                        <div class='mt-4'>
                            <x-input-label for="cor" :value="__('Cor')" />
                            <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" required autofocus autocomplete="cor" />
                            <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                        </div>

                        <!-- Tipo de Tinta -->
                        <div class='mt-4'>
                            <x-input-label for="tipo_de_tinta" :value="__('Tipo de Tinta')" />
                            <select id="tipo_de_tinta" class="block mt-1 w-full" name="tipo_de_tinta" required>
                                <option value="Nanquim">Nanquim</option>
                                <option value="Gel">Gel</option>
                                <option value="Hidrográfica">Hidrográfica</option>
                            </select>
                            <x-input-error :messages="$errors->get('tipo_de_tinta')" class="mt-2" />
                        </div>

                        <!-- Marca -->
                        <div class='mt-4'>
                            <x-input-label for="marca" :value="__('Marca')" />
                            <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" maxlength="50" required autocomplete="marca" />
                            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
                        </div>

                        <!-- Ponta -->
                        <div class='mt-4'>
                            <x-input-label for="ponta" :value="__('Ponta')" />
                            <x-text-input id="ponta" class="block mt-1 w-full" type="text" name="ponta" :value="old('ponta')" maxlength="50" required autocomplete="ponta" />
                            <x-input-error :messages="$errors->get('ponta')" class="mt-2" />
                        </div>

                        <!-- Material do Corpo -->
                        <div class='mt-4'>
                            <x-input-label for="material_do_corpo" :value="__('Material do Corpo')" />
                            <x-text-input id="material_do_corpo" class="block mt-1 w-full" type="text" name="material_do_corpo" :value="old('material_do_corpo')" maxlength="50" required autocomplete="material_do_corpo" />
                            <x-input-error :messages="$errors->get('material_do_corpo')" class="mt-2" />
                        </div>

                        <!-- Botão de envio -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Enviar') }}
                            </x-primary-button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
