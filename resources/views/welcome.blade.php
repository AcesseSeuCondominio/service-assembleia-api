@extends('layouts.app')
@section('content')
<div>
    <div class="bg-gray-50 dark:bg-gray-950">
        <div class="relative overflow-hidden">
            <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
                <div class="relative h-full">
                    <svg width="404" height="784" fill="none" viewBox="0 0 404 784" class="absolute right-full translate-y-1/3 translate-x-1/4 transform sm:translate-x-1/2 md:translate-y-1/2 lg:translate-x-full">
                        <defs>
                            <pattern id="hero-pattern-01" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-gray-800" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#hero-pattern-01)"></rect>
                    </svg>
                    <svg width="404" height="784" fill="none" viewBox="0 0 404 784" class="absolute left-full -translate-y-3/4 -translate-x-1/4 transform sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4">
                        <defs>
                            <pattern id="hero-pattern-02" x="0" y="0"
                                width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4"
                                    class="text-gray-200 dark:text-gray-800" fill="currentColor">
                                </rect>
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#hero-pattern-02)"></rect>
                    </svg>
                </div>
            </div>
            <div class="relative pt-6 pb-16 sm:pb-24">
                <div class="mx-auto mt-10 max-w-7xl px-4 sm:mt-18 sm:px-6">
                    <div class="text-center max-w-3xl mx-auto">
                        <h1 class="text-1xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-3xl md:text-3xl">
                            <span class="block">{{ $assembleia->ass_nome}}</span>
                            {{-- <span class="block heading-highlight">Assunto da assembleia</span> --}}
                        </h1>
                        <p class="mx-auto mt-3 max-w-md text-base text-white dark:text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl line-clamp-3">
                            {{ $assembleia->ass_pauta}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-page m-30 text-white">
        @livewire('itens-votacao', ['items' => $votacoes], key(1))
    </div>
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

