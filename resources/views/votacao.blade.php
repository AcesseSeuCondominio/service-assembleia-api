@extends('layouts.app')
@section('content')
<div class="main-page m-30 text-white">
    @php
        $votacao = (object) [
            'id' => 1,
            'name' => 'Teste',
        ];
    @endphp
    @livewire('info-votacao', ['votacao' => $votacao], key($votacao->id))
</div>
@endsection
