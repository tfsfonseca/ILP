<x-app-layout>
    <x-slot name="header">
        Carrinho de Compras
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex intens-center mt-4 mb-10">
                             <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nome
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Descrição
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Preço
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Quantidade em Estoque
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Categoria
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Fornecedor
                                        </th>
                                        <th scope="col" class="px-6 py-3">

                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     @if($produtos != null)
                                        @foreach($produtos as $p)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{$p->nome}}
                                             </th>
                                           <td class="px-6 py-4">
                                                {{$p->descricao}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$p->preco}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$p->quantidade}}
                                            </td>
                                            <td class="px-6 py-4">
                                                 {{$p->categoria->descricao}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$p->fornecedor->nomeEmpresa}}
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <a href="{{route("remover", $p->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Remover</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                         <div class="py-12">
                                             <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                                 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                                     <div class="p-6 bg-white border-b border-gray-200">
                                                         <p>Carrinho de Compras vazio!</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                    @endif
                                    </tbody>
                               </table>
                             </div>
                        </div>
                    @if($produtos != null)
                        <div class="max-w-7xl mx-auto">
                            <a class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800" href="{{ route('finalizar')}}">Finalizar Compra</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
