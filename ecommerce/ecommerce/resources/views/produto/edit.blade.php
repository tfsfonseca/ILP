<x-app-layout>
    <x-slot name="header">
        Editar Informações de Produto
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
                    <form action="{{route('produto.update',$produto->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Nome:</x-label>
                            <x-input name="nome" value="{{$produto->nome}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Descrião:</x-label>
                            <x-input name="descricao" value="{{$produto->descricao}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>ID da categoria:</x-label>
                            <x-input name="categoria_id" value="{{$produto->categoria_id}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>ID do fornecedor:</x-label>
                            <x-input name="fornecedor_id" value="{{$produto->fornecedor_id}}"
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
