@extends('layouts.app')
@section('content')
<div>
    <div class="main-page m-30 text-white">
        @php
            $items = [
                [
                    'titulo' => 'Teste',
                    'descricao' => 'Teste',
                ],
                [
                    'titulo' => 'Teste',
                    'descricao' => 'Teste',
                ]
            ];
        @endphp

        @livewire('itens-votacao', ['items' => $items], key(1))
    </div>
</div>
@endsection
