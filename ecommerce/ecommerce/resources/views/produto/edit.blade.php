<x-app-layout>
    <x-slot name="header">
        Editar Informações de Produto
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('produto.update',$produto->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Nome:</x-label>
                            <x-input name="nome" value="{{$produto->nome}}"
                                     class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Descrição:</x-label>
                            <x-input name="descricao" value="{{$produto->descricao}}"
                                     class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Preço:</x-label>
                            <x-input name="preco" value="{{$produto->preco}}"
                                     class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Quantidade disponível em estoque:</x-label>
                            <x-input name="quantidade" value="{{$produto->quantidade}}"
                                     class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>ID da categoria:</x-label>
                            <select name="categoria_id" class="block mt-1 w-full sm:rounded-lg">
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
                            <select name="fornecedor_id" class="block mt-1 w-full sm:rounded-lg">
                                @foreach($fornecedores as $f)
                                    <option value="{{$f->id}}"
                                            @if($f->id == $produto->fornecedor->id)
                                            selected
                                        @endif
                                    >{{$f->id}} - {{$f->nomeEmpresa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-5 pt-5">
                            <x-button>Alterar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
