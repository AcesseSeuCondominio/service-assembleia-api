@extends('layouts.app')
@section('content')
<div class="main-page m-30 text-white">
    @livewire('info-votacao', ['votacao' => $votacao], key($votacao->vot_codigo))
</div>
@endsection
@push('js')
<script>
    document.addEventListener('livewire:load', function() {
        window.Echo.channel("assembleia.1")
            .listen('.VotoEvent', (data) => {
                window.Livewire.emit('atualizaVoto');
            });
    });
</script>
@endpush
