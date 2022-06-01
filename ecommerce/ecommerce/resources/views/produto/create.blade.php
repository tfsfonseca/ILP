<x-app-layout>
    <x-slot name="header">
        Novo Produto
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('produto.store')}}" method="post">
                        @csrf
                        <div>
                            <x-label>Informe o nome:</x-label>
                            <x-input name="nome" class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Informe a descrição:</x-label>
                            <x-input name="descricao" class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Informe o preço:</x-label>
                            <x-input name="preco" class="block mt-1 w-full p-2"/>
                        </div>
                        <div>
                            <x-label>Quantidade em estoque:</x-label>
                            <x-input name="quantidade" class="block mt-1 w-full  p-2"/>
                        </div>
                        <div>
                            <x-label> Selecione a categoria: </x-label>
                            <select name="categoria_id" class="sm:rounded-lg">
                                @foreach($categorias as $c)
                                    <option value="{{$c->id}}">{{$c->descricao}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-label> Selecione o fornecedor: </x-label>
                            <select name="fornecedor_id" class="sm:rounded-lg">
                                @foreach($fornecedores as $f)
                                    <option value="{{$f->id}}">{{$f->nomeEmpresa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-5 pt-8">
                            <x-button>Salvar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

