<x-app-layout>
    <x-slot name="header">
        Todas as Categorias
    </x-slot>
    <a href="{{route("categoria.create")}}">
        Criar novo registro
    </a>
    @foreach($categorias as $c)
        <div>
            {{$c ->descricao }}
            <a href="{{route("categoria.edit", $c->id)}}">
                Alterar
            </a>
            <form action="{{route('categoria.destroy', $c->id)}}" method="post">
                @csrf
                @method("DELETE")
                <x-button>Excluir</x-button>
            </form>
        </div>
    @endforeach
    
</x-app-layout>
