@extends('layouts.app')
@section('content')
<div class="main-page m-30 text-white">
    @livewire('info-votacao', ['votacao' => $votacao], key($votacao->vot_codigo))
</div>
@endsection
