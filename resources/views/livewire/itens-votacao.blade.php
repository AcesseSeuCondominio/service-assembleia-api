<div class="space-y-6 justify-center justify-items-center contents-center">

    @foreach ($items as $item)
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-auto">
            <div class="px-5 pb-5 pt-5">
                <a href="#">
                    <h5 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white">Pauta</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{ $item->votacaoRespostas()->count() > 1 ? $item->votacaoRespostas()->count() . ' votos' : $item->votacaoRespostas()->count() . ' voto' }}</span>
                </div>
                <div class="fex items-start mt-2.5 mb-5">
                    {{ $item->vot_pergunta }}
                </div>
                <div class="flex items-end justify-end">
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <i class="ti ti-flag-3-filled mr-1"></i>
                        Votar agora
                    </button>
                    <button disabled type="button" class="ml-2 px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="ti ti-circle-check-filled mr-1"></i>
                        Você votou
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
