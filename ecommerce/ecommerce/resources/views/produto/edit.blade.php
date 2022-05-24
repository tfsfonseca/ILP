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
                            <x-label>Descrição:</x-label>
                            <x-input name="descricao" value="{{$produto->descricao}}"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>ID da categoria:</x-label>
                            <select name="categoria_id" class="block mt-1 w-full">
                                @foreach($categorias as $c)
                                    <option value="{{$c->id}}"
                                            @if($c->id == $produto->categoria->id)
                                            selected
                                        @endif
                                    >{{$c->id}} - {{$c->descricao}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div>
                            <x-label>ID do fornecedor:</x-label>
                            <select name="fornecedor_id" class="block mt-1 w-full">
                                @foreach($fornecedores as $f)
                                    <option value="{{$f->id}}"
                                            @if($f->id == $produto->fornecedor->id)
                                            selected
                                        @endif
                                    >{{$f->id}} - {{$f->nomeEmpresa}}</option>
                                @endforeach
                            </select>
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
