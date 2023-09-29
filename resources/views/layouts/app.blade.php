<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Assembleia Virtual - ASC</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900">

    <!-- Scripts -->
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    @livewireStyles

    @stack('css')

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body>
    <div>
        <div class="min-h-[calc(100vh-4rem)] bg-white dark:bg-black">
            <div class="grad-bar sticky top-0 z-30 w-full hidden sm:block"></div>
            <nav class="sticky top-0 z-30 w-full bg-white/80 dark:bg-black/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800" data-headlessui-state="">
                <div class="mx-auto px-4 sm:px-6">
                    <div class="relative flex items-center h-14 justify-between">
                        <div class="flex items-center h-full"><a
                                class="text-base text-gray-600 dark:text-gray-400 font-medium hover:opacity-60 transition duration-150"
                                href="/">Assembleia Virtual</a>
                            <div class="hidden lg:block h-4 w-[1px] bg-gray-300 dark:bg-gray-700 mx-4"></div>
                            <div class="hidden lg:flex items-center space-x-1 h-full">
                                <div class="space-x-1">
                                    <a class="inline-block text-sm duration-150 px-3.5 py-1.5 rounded-md capitalize text-gray-800 bg-gray-100 dark:text-gray-200 dark:bg-gray-900" href="/">
                                        Assembleias
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lg:ml-6 lg:flex lg:items-center space-x-4">

                            <div class="flex items-center">
                                @guest
                                    <a class="flex items-center gap-x-2 font-medium text-white/[.8] hover:text-white sm:my-6 sm:pl-6" href="#">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        </svg>
                                        Fazer Login
                                    </a>
                                @else
                                    <details class="menu-details relative">
                                        <summary class="group inline-flex cursor-pointer items-center justify-center gap-1.5 text-sm font-medium text-gray-100 transition-all duration-150 rounded-lg px-2 py-1.5 bg-gray-600 hover:bg-gray-600 hover:text-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                            <i class="ti ti-user-square-rounded" style="font-size: 21px;margin-right:-4px;"></i>Nome Usuario
                                        </summary>
                                        <div class="absolute z-10 whitespace-nowrap bg-white shadow-xl right-0 top-8 mt-2 rounded-xl border border-gray-200">
                                            <div class="py-1">
                                                <form method="post" action="/logout">
                                                    <button type="submit" class="flex items-center gap-3 text-sm font-medium text-gray-600 transition-all duration-200 px-4 py-2 hover:bg-gray-100 hover:text-gray-900">
                                                    <i class="ti ti-logout" style="font-size: 19px;margin-right:-4px;"></i> Logout</button>
                                                </form>
                                            </div>
                                        </div>
                                    </details>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <main>
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
                                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl md:text-6xl">
                                        <span class="block">Assembleia Virtual</span>
                                        <span class="block heading-highlight">Assunto da assembleia</span>
                                    </h1>
                                    <p class="mx-auto mt-3 max-w-md text-base text-white dark:text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl line-clamp-3">
                                        Descrição completa da assembleia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </main>
            <footer class="bg-white dark:bg-black">
                <div class="mx-auto max-w-7xl overflow-hidden py-12 px-4 sm:px-6 lg:px-8">
                    <div class="mt-8 flex justify-center space-x-6">
                        <a class="text-gray-400 hover:text-gray-500 dark:text-gray-600 dark:hover:text-gray-500" target="_blank" rel="noreferrer" href="https://www.instagram.com/acesseseucondominio/">
                            <span class="sr-only">Linkedin</span>
                            <i class="ti ti-brand-linkedin" style="font-size: 45px;"></i>
                        </a>
                        <a class="text-gray-400 hover:text-gray-500 dark:text-gray-600 dark:hover:text-gray-500" target="_blank" rel="noreferrer" href="https://linkedin.com/company/acesseseucondominio">
                            <span class="sr-only">Instagram</span>
                            <i class="ti ti-brand-instagram" style="font-size: 45px;"></i>
                        </a>
                    </div>
                    <p class="mt-8 text-center text-base text-gray-400 dark:text-gray-600">
                        © 2023 Acesse Seu Condomínio - Todos os direitos reservados.
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ config('app.url_ws') }}/socket.io/socket.io.js"></script>
    @vite('resources/js/app.js')

    @livewireScripts

    <script>
        document.addEventListener('livewire:load', function() {
            window.Echo.channel("project.1")
                .listen('.StatusVoting', (data) => {

                });
        });
    </script>

    @stack('js')
</body>

</html>

