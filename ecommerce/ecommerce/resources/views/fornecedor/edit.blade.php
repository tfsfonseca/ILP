<x-app-layout>
    <x-slot name="header">
        Editar Informações de Fornecedor
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b>Atenção!</b> Não é possível alterar CNJP e Nome. Caso necessário, exclua o cadastro errôneo e faça um novo cadastro.
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.update',$fornecedor->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>CNPJ:</x-label>
                            <x-input name="cnpj" value="{{$fornecedor->cnpj}}"
                                     class="block mt-1 w-full" disabled/>
                        </div>
                        <div>
                            <x-label>Nome do Fornecedor:</x-label>
                            <x-input name="nomeEmpresa" value="{{$fornecedor->nomeEmpresa}}"
                                     class="block mt-1 w-full" disabled/>
                        </div>
                        <div>
                            <x-label>Informe o número de contato:</x-label>
                            <x-input name="contato" value="{{$fornecedor->contato}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Informe o e-mail de contato:</x-label>
                            <x-input name="email" value="{{$fornecedor->email}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div class="mt-5 pt-2">
                            <x-button>Alterar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
