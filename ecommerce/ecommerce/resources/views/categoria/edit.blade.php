<x-app-layout>
    <x-slot name="header">
        Editar Categoria
    </x-slot>

    <form action="{{route('categoria.update', $categoria->id)}}" method="post">
        @csrf
        @method("PATCH")
        <div class="sm:,l-10 p-5 bg-white border-gray-300">
            <x-label>Informe a descricao: </x-label>
            <x-input name="descricao" value="{{$categoria->descricao}}" class="block mt-1 w-full"/>
        </div>
        <div class="mt-5">
            <x-button>Alterar</x-button>
        </div>
    </form>
</x-app-layout>
