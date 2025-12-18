@extends('compactor.layout')    


@section('content')
    

<!-- Header da Página -->
    <div class="text-center py-12 mb-12 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-gray-100 mb-4">Meu Portfólio</h1>
        <p class="text-xl text-gray-400">Projetos desenvolvidos e tecnologias que domino</p>
    </div>

    <!-- Estatísticas Rápidas -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
            <div class="text-4xl font-bold text-white mb-2">50+</div>
            <p class="text-blue-100 text-sm">Projetos Concluídos</p>
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
            <div class="text-4xl font-bold text-white mb-2">30+</div>
            <p class="text-blue-100 text-sm">Clientes Satisfeitos</p>
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
            <div class="text-4xl font-bold text-white mb-2">7+</div>
            <p class="text-blue-100 text-sm">Anos de Experiência</p>
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
            <div class="text-4xl font-bold text-white mb-2">15+</div>
            <p class="text-blue-100 text-sm">Tecnologias</p>
        </div>
    </div>

    <!-- Seção Projetos Implantados -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Projetos Implantados</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Projeto 1 -->
            <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-blue-600 transition duration-300">
                <div class="h-48 bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                    <div class="text-white text-6xl">🏢</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">Sistema ERP Empresarial</h3>
                    <p class="text-gray-400 text-sm mb-4">Gestão completa com módulos de vendas, estoque e financeiro.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Vue.js</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">MySQL</span>
                    </div>

                    <div class="text-sm text-gray-400">
                        <p>Cliente: Tech Corp</p>
                        <p>Ano: 2023</p>
                    </div>
                </div>
            </div>

            <!-- Projeto 2 -->
            <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-blue-600 transition duration-300">
                <div class="h-48 bg-gradient-to-br from-purple-600 to-purple-800 flex items-center justify-center">
                    <div class="text-white text-6xl">🛒</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">E-commerce Fashion</h3>
                    <p class="text-gray-400 text-sm mb-4">Loja online completa com integração de pagamentos.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Livewire</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Stripe</span>
                    </div>

                    <div class="text-sm text-gray-400">
                        <p>Cliente: Fashion Store</p>
                        <p>Ano: 2024</p>
                    </div>
                </div>
            </div>

            <!-- Projeto 3 -->
            <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-blue-600 transition duration-300">
                <div class="h-48 bg-gradient-to-br from-green-600 to-green-800 flex items-center justify-center">
                    <div class="text-white text-6xl">🏥</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">Sistema de Clínica Médica</h3>
                    <p class="text-gray-400 text-sm mb-4">Agendamento, prontuário eletrônico e gestão completa.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">React</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">AWS</span>
                    </div>

                    <div class="text-sm text-gray-400">
                        <p>Cliente: Clínica Saúde</p>
                        <p>Ano: 2023</p>
                    </div>
                </div>
            </div>

            <!-- Projeto 4 -->
            <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-blue-600 transition duration-300">
                <div class="h-48 bg-gradient-to-br from-orange-600 to-orange-800 flex items-center justify-center">
                    <div class="text-white text-6xl">🍕</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">App Delivery</h3>
                    <p class="text-gray-400 text-sm mb-4">Delivery com rastreamento em tempo real e avaliações.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Vue.js</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">MongoDB</span>
                    </div>

                    <div class="text-sm text-gray-400">
                        <p>Cliente: Food Express</p>
                        <p>Ano: 2024</p>
                    </div>
                </div>
            </div>

            <!-- Projeto 5 -->
            <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-blue-600 transition duration-300">
                <div class="h-48 bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                    <div class="text-white text-6xl">📊</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">Dashboard Analytics</h3>
                    <p class="text-gray-400 text-sm mb-4">Análise de dados com visualizações interativas.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Chart.js</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">PostgreSQL</span>
                    </div>

                    <div class="text-sm text-gray-400">
                        <p>Cliente: Data Corp</p>
                        <p>Ano: 2023</p>
                    </div>
                </div>
            </div>

            <!-- Projeto 6 -->
            <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-blue-600 transition duration-300">
                <div class="h-48 bg-gradient-to-br from-indigo-600 to-indigo-800 flex items-center justify-center">
                    <div class="text-white text-6xl">🎓</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">Plataforma EAD</h3>
                    <p class="text-gray-400 text-sm mb-4">Ensino à distância com videoaulas e exercícios.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Laravel</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">Vue.js</span>
                        <span class="bg-blue-900 text-blue-300 text-xs px-2 py-1 rounded">MySQL</span>
                    </div>

                    <div class="text-sm text-gray-400">
                        <p>Cliente: Escola Online</p>
                        <p>Ano: 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Tecnologias -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Tecnologias que Domino</h2>
        
        <!-- Linguagens -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Linguagens de Programação</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🐘</div>
                    <p class="text-gray-300 font-medium">PHP</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">📜</div>
                    <p class="text-gray-300 font-medium">JavaScript</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🐍</div>
                    <p class="text-gray-300 font-medium">Python</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">💾</div>
                    <p class="text-gray-300 font-medium">SQL</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🎨</div>
                    <p class="text-gray-300 font-medium">HTML/CSS</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">📘</div>
                    <p class="text-gray-300 font-medium">TypeScript</p>
                </div>
            </div>
        </div>

        <!-- Frameworks -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Frameworks & Bibliotecas</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🔴</div>
                    <p class="text-gray-300 font-medium">Laravel</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">⚛️</div>
                    <p class="text-gray-300 font-medium">React</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">💚</div>
                    <p class="text-gray-300 font-medium">Vue.js</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🟢</div>
                    <p class="text-gray-300 font-medium">Node.js</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🎯</div>
                    <p class="text-gray-300 font-medium">Tailwind</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">📦</div>
                    <p class="text-gray-300 font-medium">Livewire</p>
                </div>
            </div>
        </div>

        <!-- Banco de Dados -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Banco de Dados</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🐬</div>
                    <p class="text-gray-300 font-medium">MySQL</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🐘</div>
                    <p class="text-gray-300 font-medium">PostgreSQL</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🍃</div>
                    <p class="text-gray-300 font-medium">MongoDB</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🔴</div>
                    <p class="text-gray-300 font-medium">Redis</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🔥</div>
                    <p class="text-gray-300 font-medium">Firebase</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">⚡</div>
                    <p class="text-gray-300 font-medium">SQLite</p>
                </div>
            </div>
        </div>

        <!-- Ferramentas -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Ferramentas & DevOps</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">📁</div>
                    <p class="text-gray-300 font-medium">Git</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🐙</div>
                    <p class="text-gray-300 font-medium">GitHub</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">🐳</div>
                    <p class="text-gray-300 font-medium">Docker</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">💻</div>
                    <p class="text-gray-300 font-medium">VS Code</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">☁️</div>
                    <p class="text-gray-300 font-medium">AWS</p>
                </div>
                <div class="bg-gray-900 p-5 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-5xl mb-2">📮</div>
                    <p class="text-gray-300 font-medium">Postman</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-12 bg-gray-900 rounded-lg border border-gray-800">
        <h2 class="text-3xl font-bold text-gray-100 mb-4">Gostou do que viu?</h2>
        <p class="text-gray-300 mb-6">Vamos trabalhar juntos no seu próximo projeto!</p>
        <div class="flex justify-center space-x-4">
            <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                Entre em Contato
            </a>
            <a href="#" class="bg-gray-700 text-gray-200 px-8 py-3 rounded-lg hover:bg-gray-600 transition duration-300">
                Saiba Mais
            </a>
        </div>
    </section>



@endsection