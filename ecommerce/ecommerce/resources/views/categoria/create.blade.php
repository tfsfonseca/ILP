<x-app-layout>
    <x-slot name="header">
        Categorias
    </x-slot>

    <form action="{{route('categoria.store')}}" method="post">
        <div class="sm:,l-10 p-5 bg-white border-gray-300">
            @csrf
            <x-label>Informe a descricao: </x-label>
            <x-input type="text" name="descricao" class="block mt-1 w-full"/>
        </div>
        <div class="mt-5">
            <x-button>Salvar</x-button>
        </div>
    </form>
</x-app-layout>

