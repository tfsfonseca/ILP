<x-app-layout>
    <x-slot name="header">
        Todas as Categorias
    </x-slot>

    @if(isset($categorias))
        @foreach($categorias as $c)
            <div>
                {{$c ->descricao }}}
            </div>
        @endforeach
    @endif


</x-app-layout>
