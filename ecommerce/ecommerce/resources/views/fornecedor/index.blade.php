<x-app-layout>
    <x-slot name="header">
        Todos os Fornecedores
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div>
                        @if(session('resposta'))
                            {{session('resposta')}}
                        @endif
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Empresa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CNPJ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Contato
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    E-mail
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Alterar</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Excluir</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fornecedores as $f)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$f->nomeEmpresa}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$f->cnpj}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$f->contato}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$f->email}}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{route('fornecedor.edit', $f->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Alterar</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{route('fornecedor.destroy', $f->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="flex items-center mt-4 mb-10">
                        <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white
                        uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300
                        disabled:opacity-25 transition ease-in-out duration-150 ml-3" href="{{ route('fornecedor.create')}}">Novo Registro</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
