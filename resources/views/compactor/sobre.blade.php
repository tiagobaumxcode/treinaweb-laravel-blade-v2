@extends('compactor.layout')

@section('content')

<!-- Header da Página -->
    <div class="text-center py-12 mb-12 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-gray-100 mb-4">Sobre Mim</h1>
        <p class="text-xl text-gray-400">Conheça minha história, valores e visão profissional</p>
    </div>

    <!-- Seção Principal - Quem Sou -->
    <section class="mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Foto/Avatar -->
            <div class="lg:col-span-1">
                <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 sticky top-8">
                    <div class="w-48 h-48 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full mx-auto mb-6 flex items-center justify-center text-white text-6xl font-bold">
                        DEV
                    </div>
                    <h3 class="text-2xl font-bold text-gray-100 text-center mb-2">Seu Nome</h3>
                    <p class="text-blue-500 text-center mb-4">Desenvolvedor Full Stack</p>
                    <div class="border-t border-gray-700 pt-4 space-y-2 text-sm">
                        <p class="text-gray-300"><span class="text-gray-400">📍 Localização:</span> São Gonçalo, RJ</p>
                        <p class="text-gray-300"><span class="text-gray-400">📧 Email:</span> dev@email.com</p>
                        <p class="text-gray-300"><span class="text-gray-400">💼 Experiência:</span> 7+ anos</p>
                    </div>
                </div>
            </div>

            <!-- Conteúdo -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Quem Sou -->
                <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                    <h2 class="text-3xl font-bold text-gray-100 mb-4 border-l-4 border-blue-600 pl-4">Quem Sou</h2>
                    <div class="text-gray-300 space-y-4 leading-relaxed">
                        <p>
                            Olá! Sou um desenvolvedor full stack apaixonado por tecnologia e inovação. 
                            Minha jornada no mundo da programação começou há mais de 7 anos, quando escrevi 
                            minha primeira linha de código e me apaixonei pela capacidade de transformar 
                            ideias em soluções reais.
                        </p>
                        <p>
                            Ao longo da minha carreira, tive a oportunidade de trabalhar em projetos 
                            desafiadores que vão desde startups inovadoras até grandes empresas consolidadas. 
                            Essa experiência diversificada me permitiu desenvolver uma visão ampla sobre 
                            desenvolvimento de software, sempre focando em qualidade, performance e 
                            experiência do usuário.
                        </p>
                        <p>
                            Acredito que a tecnologia deve servir às pessoas, e não o contrário. Por isso, 
                            busco sempre criar soluções que sejam não apenas tecnicamente sólidas, mas também 
                            intuitivas e acessíveis. Meu objetivo é fazer a diferença através do código, 
                            criando produtos que impactem positivamente a vida das pessoas.
                        </p>
                    </div>
                </div>

                <!-- Minha Filosofia -->
                <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                    <h2 class="text-3xl font-bold text-gray-100 mb-4 border-l-4 border-blue-600 pl-4">Minha Filosofia</h2>
                    <div class="text-gray-300 space-y-4 leading-relaxed">
                        <p>
                            Como desenvolvedor, sigo alguns princípios fundamentais que guiam meu trabalho:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <div class="bg-black p-4 rounded-lg border border-gray-700">
                                <h4 class="text-lg font-semibold text-blue-500 mb-2">💡 Aprendizado Contínuo</h4>
                                <p class="text-sm">A tecnologia evolui rapidamente, e eu evoluo com ela. 
                                Estou sempre estudando novas ferramentas e metodologias.</p>
                            </div>
                            <div class="bg-black p-4 rounded-lg border border-gray-700">
                                <h4 class="text-lg font-semibold text-blue-500 mb-2">🎯 Código Limpo</h4>
                                <p class="text-sm">Escrever código que outros desenvolvedores possam 
                                entender e manter é tão importante quanto fazê-lo funcionar.</p>
                            </div>
                            <div class="bg-black p-4 rounded-lg border border-gray-700">
                                <h4 class="text-lg font-semibold text-blue-500 mb-2">🤝 Colaboração</h4>
                                <p class="text-sm">Os melhores projetos nascem do trabalho em equipe. 
                                Valorizo a troca de conhecimentos e o crescimento coletivo.</p>
                            </div>
                            <div class="bg-black p-4 rounded-lg border border-gray-700">
                                <h4 class="text-lg font-semibold text-blue-500 mb-2">🚀 Entrega de Valor</h4>
                                <p class="text-sm">Foco em resolver problemas reais e entregar 
                                soluções que gerem valor tangível para os usuários e o negócio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção - O Que Faço -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">O Que Faço</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Serviço 1 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="text-4xl mb-4">💻</div>
                <h3 class="text-xl font-semibold text-gray-100 mb-3">Desenvolvimento Web</h3>
                <p class="text-gray-300 text-sm">
                    Criação de aplicações web robustas e escaláveis utilizando as tecnologias mais 
                    modernas do mercado, como Laravel, React e Vue.js.
                </p>
            </div>

            <!-- Serviço 2 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="text-4xl mb-4">📱</div>
                <h3 class="text-xl font-semibold text-gray-100 mb-3">APIs RESTful</h3>
                <p class="text-gray-300 text-sm">
                    Desenvolvimento de APIs eficientes e bem documentadas para integração entre 
                    sistemas e aplicações móveis.
                </p>
            </div>

            <!-- Serviço 3 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="text-xl font-semibold text-gray-100 mb-3">UI/UX Implementation</h3>
                <p class="text-gray-300 text-sm">
                    Implementação de interfaces modernas e responsivas com foco na experiência 
                    do usuário e acessibilidade.
                </p>
            </div>

            <!-- Serviço 4 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="text-4xl mb-4">🗄️</div>
                <h3 class="text-xl font-semibold text-gray-100 mb-3">Banco de Dados</h3>
                <p class="text-gray-300 text-sm">
                    Modelagem e otimização de bancos de dados relacionais e NoSQL para 
                    garantir performance e integridade dos dados.
                </p>
            </div>

            <!-- Serviço 5 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="text-4xl mb-4">🔧</div>
                <h3 class="text-xl font-semibold text-gray-100 mb-3">Manutenção & Suporte</h3>
                <p class="text-gray-300 text-sm">
                    Manutenção preventiva e corretiva de aplicações, incluindo correção de bugs, 
                    atualizações e melhorias de performance.
                </p>
            </div>

            <!-- Serviço 6 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="text-4xl mb-4">👨‍🏫</div>
                <h3 class="text-xl font-semibold text-gray-100 mb-3">Mentoria & Consultoria</h3>
                <p class="text-gray-300 text-sm">
                    Orientação técnica para desenvolvedores em início de carreira e consultoria 
                    em arquitetura de software.
                </p>
            </div>
        </div>
    </section>

    <!-- Seção - Minhas Habilidades -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Habilidades Técnicas</h2>
        <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
            <div class="space-y-6">
                <!-- Habilidade 1 -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-100 font-medium">Backend Development</span>
                        <span class="text-blue-500 font-semibold">95%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <!-- Habilidade 2 -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-100 font-medium">Frontend Development</span>
                        <span class="text-blue-500 font-semibold">90%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <!-- Habilidade 3 -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-100 font-medium">Database Design</span>
                        <span class="text-blue-500 font-semibold">88%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 88%"></div>
                    </div>
                </div>

                <!-- Habilidade 4 -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-100 font-medium">DevOps & Cloud</span>
                        <span class="text-blue-500 font-semibold">80%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <!-- Habilidade 5 -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-100 font-medium">UI/UX Design</span>
                        <span class="text-blue-500 font-semibold">75%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 75%"></div>
                    </div>
                </div>

                <!-- Habilidade 6 -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-100 font-medium">Project Management</span>
                        <span class="text-blue-500 font-semibold">85%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-3">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção - Interesses -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Interesses & Hobbies</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">📚</div>
                <h4 class="text-gray-100 font-medium">Leitura</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">🎮</div>
                <h4 class="text-gray-100 font-medium">Games</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">🏃</div>
                <h4 class="text-gray-100 font-medium">Corrida</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">🎵</div>
                <h4 class="text-gray-100 font-medium">Música</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">✈️</div>
                <h4 class="text-gray-100 font-medium">Viagens</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">📷</div>
                <h4 class="text-gray-100 font-medium">Fotografia</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">☕</div>
                <h4 class="text-gray-100 font-medium">Café</h4>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 text-center hover:border-blue-600 transition duration-300">
                <div class="text-5xl mb-3">🤝</div>
                <h4 class="text-gray-100 font-medium">Networking</h4>
            </div>
        </div>
    </section>

    <!-- Seção - Estatísticas -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Números que Importam</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
                <div class="text-4xl font-bold text-white mb-2">7+</div>
                <p class="text-blue-100 text-sm">Anos de Experiência</p>
            </div>
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
                <div class="text-4xl font-bold text-white mb-2">50+</div>
                <p class="text-blue-100 text-sm">Projetos Concluídos</p>
            </div>
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
                <div class="text-4xl font-bold text-white mb-2">30+</div>
                <p class="text-blue-100 text-sm">Clientes Satisfeitos</p>
            </div>
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 rounded-lg text-center">
                <div class="text-4xl font-bold text-white mb-2">15+</div>
                <p class="text-blue-100 text-sm">Tecnologias Dominadas</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center py-12 bg-gray-900 rounded-lg border border-gray-800">
        <h2 class="text-3xl font-bold text-gray-100 mb-4">Gostou do que viu?</h2>
        <p class="text-gray-300 mb-6">Vamos conversar sobre como posso ajudar seu projeto!</p>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('compactor.home') }}#contato" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                Entre em Contato
            </a>
            <a href="{{ route('compactor.home') }}" class="bg-gray-700 text-gray-200 px-8 py-3 rounded-lg hover:bg-gray-600 transition duration-300">
                Ver Portfólio
            </a>
        </div>
    </section>





@endsection