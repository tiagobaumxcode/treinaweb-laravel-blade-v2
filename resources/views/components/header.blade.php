<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Meu Site')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">
    
    <!-- Header/Menu no Topo -->
    <header class="bg-gray-900 shadow-md">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="text-blue-600 text-2xl font-bold">
                    <a href="{{ route('compactor.home') ?? '/' }}">MeuSite</a>
                </div>
                
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('compactor.home') ?? '/' }}" class="text-blue-600 hover:text-blue-800 transition duration-300">
                        Início
                    </a>
                    <a href="{{ route('compactor.sobre') ?? '/' }}" class="text-blue-600 hover:text-blue-800 transition duration-300">
                        Sobre
                    </a>
                    <a href="{{ route('compactor.portfolio') ?? '/' }}" class="text-blue-600 hover:text-blue-800 transition duration-300">
                        Porfolio
                    </a>
                    <a href="{{ route('compactor.contato') ?? '/' }}" class="text-blue-600 hover:text-blue-800 transition duration-300">
                        Contato
                    </a>
                </div>
                
                <!-- Botão Mobile Menu -->
                <button id="mobile-menu-button" class="md:hidden text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Menu Mobile -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
                <a href="{{ route('compactor.home') ?? '/' }}" class="block text-blue-600 hover:text-blue-800 py-2">
                    Início
                </a>
                <a href="{{ route('compactor.sobre') ?? '/' }}" class="block text-blue-600 hover:text-blue-800 py-2">
                    Sobre
                </a>
                <a href="{{ route('compactor.portfolio') ?? '/' }}" class="block text-blue-600 hover:text-blue-800 py-2">
                    Serviços
                </a>
                <a href="{{ route('compactor.contato') ?? '/' }}" class="block text-blue-600 hover:text-blue-800 py-2">
                    Contato
                </a>
            </div>
        </nav>
    </header>

    
