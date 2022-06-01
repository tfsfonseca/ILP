<x-app-layout>
    <x-slot name="header">
        Adicionar Fornecedor
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.store')}}" method="post">
                        @csrf
                        <div>
                            <x-label>Informe o CNPJ:</x-label>
                            <x-input name="cnpj" class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Informe o nome do Fornecedor:</x-label>
                            <x-input name="nomeEmpresa" class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Informe o número de contato:</x-label>
                            <x-input name="contato" class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Informe o e-mail:</x-label>
                            <x-input name="email" class="block mt-1 w-full p-2"/>
                        </div>
                        <div class="mt-5 pt-2">
                            <x-button>Salvar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
