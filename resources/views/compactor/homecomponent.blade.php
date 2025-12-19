
<x-layout-patt>

<x-conteudo-principal>
    @section('content')
        <!-- Seção Hero/Apresentação -->
    <div class="text-center py-12 mb-12 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-gray-100 mb-4">Olá, eu sou Desenvolvedor</h1>
        <p class="text-xl text-gray-400 mb-6">Desenvolvedor Full Stack | Laravel | PHP | JavaScript</p>
        <div class="flex justify-center space-x-4">
            <a href="#experiencias" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                Ver Experiências
            </a>
            <a href="#contato" class="bg-gray-700 text-gray-200 px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300">
                Entrar em Contato
            </a>
        </div>
    </div>


<!-- Testando o uso de componentes blade -->
<x-item-projeto :imagem="'/images/projeto1.jpg'" :indice=1/>


    <!-- Seção Sobre Mim -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-6 border-l-4 border-blue-600 pl-4">Sobre Mim</h2>
        <p class="text-gray-300 leading-relaxed text-lg">
            Sou um desenvolvedor apaixonado por criar soluções web eficientes e escaláveis. 
            Com experiência em desenvolvimento full stack, tenho trabalhado em diversos projetos 
            que vão desde sistemas empresariais até aplicações web modernas. Meu foco é sempre 
            entregar código limpo, performático e de fácil manutenção.
        </p>
    </section>

    <!-- Seção Experiências -->
    <section id="experiencias" class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Experiências Profissionais</h2>
        
        <div class="space-y-8">
            <!-- Experiência 1 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-100">Desenvolvedor Full Stack</h3>
                        <p class="text-blue-500 font-medium">Empresa Tech Solutions</p>
                    </div>
                    <span class="text-gray-400 text-sm mt-2 md:mt-0">Jan 2022 - Presente</span>
                </div>
                <ul class="list-disc list-inside text-gray-300 space-y-2">
                    <li>Desenvolvimento de aplicações web utilizando Laravel e Vue.js</li>
                    <li>Implementação de APIs RESTful e integração com serviços externos</li>
                    <li>Otimização de performance e refatoração de código legado</li>
                    <li>Participação em code reviews e mentoria de desenvolvedores juniores</li>
                </ul>
            </div>

            <!-- Experiência 2 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-100">Desenvolvedor PHP</h3>
                        <p class="text-blue-500 font-medium">Digital Agency</p>
                    </div>
                    <span class="text-gray-400 text-sm mt-2 md:mt-0">Mar 2020 - Dez 2021</span>
                </div>
                <ul class="list-disc list-inside text-gray-300 space-y-2">
                    <li>Desenvolvimento de sites institucionais e e-commerces</li>
                    <li>Customização de temas e plugins para WordPress</li>
                    <li>Manutenção e suporte de aplicações web</li>
                    <li>Colaboração com equipe de design para implementação de layouts</li>
                </ul>
            </div>

            <!-- Experiência 3 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-semibold text-gray-100">Desenvolvedor Junior</h3>
                        <p class="text-blue-500 font-medium">StartUp Inovadora</p>
                    </div>
                    <span class="text-gray-400 text-sm mt-2 md:mt-0">Jun 2018 - Fev 2020</span>
                </div>
                <ul class="list-disc list-inside text-gray-300 space-y-2">
                    <li>Desenvolvimento de funcionalidades para sistema interno</li>
                    <li>Correção de bugs e manutenção de código</li>
                    <li>Aprendizado de boas práticas e padrões de desenvolvimento</li>
                    <li>Participação em reuniões de planejamento e sprints</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Seção Formação -->
    <section id="formacoes" class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Formação Acadêmica</h2>
        
        <div class="space-y-6">
            <!-- Formação 1 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            BS
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-100">Bacharelado em Ciência da Computação</h3>
                        <p class="text-blue-500 font-medium">Universidade Federal</p>
                        <p class="text-gray-400 text-sm mt-1">2015 - 2019</p>
                        <p class="text-gray-300 mt-3">
                            Formação sólida em fundamentos de programação, estruturas de dados, algoritmos, 
                            banco de dados e engenharia de software.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Formação 2 -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            MB
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-semibold text-gray-100">MBA em Gestão de Projetos</h3>
                        <p class="text-blue-500 font-medium">Instituição de Ensino</p>
                        <p class="text-gray-400 text-sm mt-1">2020 - 2022</p>
                        <p class="text-gray-300 mt-3">
                            Especialização em metodologias ágeis, gestão de equipes e projetos de software.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Certificações -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Certificações</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <h4 class="text-lg font-semibold text-gray-100 mb-2">AWS Certified Developer</h4>
                <p class="text-gray-400 text-sm">Amazon Web Services - 2023</p>
            </div>
            
            <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <h4 class="text-lg font-semibold text-gray-100 mb-2">Laravel Certified</h4>
                <p class="text-gray-400 text-sm">Laravel - 2022</p>
            </div>
            
            <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <h4 class="text-lg font-semibold text-gray-100 mb-2">Professional Scrum Master I</h4>
                <p class="text-gray-400 text-sm">Scrum.org - 2021</p>
            </div>
            
            <div class="bg-gray-900 p-5 rounded-lg border border-gray-800 hover:border-blue-600 transition duration-300">
                <h4 class="text-lg font-semibold text-gray-100 mb-2">MySQL Database Administrator</h4>
                <p class="text-gray-400 text-sm">Oracle - 2021</p>
            </div>
        </div>
    </section>

    <!-- Seção Ferramentas e Tecnologias -->
    <section id="ferramentas" class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Ferramentas & Tecnologias</h2>
        
        <!-- Linguagens de Programação -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Linguagens de Programação</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🐘</div>
                    <p class="text-gray-300 font-medium">PHP</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📜</div>
                    <p class="text-gray-300 font-medium">JavaScript</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🐍</div>
                    <p class="text-gray-300 font-medium">Python</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">💾</div>
                    <p class="text-gray-300 font-medium">SQL</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🎨</div>
                    <p class="text-gray-300 font-medium">HTML/CSS</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📘</div>
                    <p class="text-gray-300 font-medium">TypeScript</p>
                </div>
            </div>
        </div>

        <!-- Frameworks e Bibliotecas -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Frameworks & Bibliotecas</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🔴</div>
                    <p class="text-gray-300 font-medium">Laravel</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">⚛️</div>
                    <p class="text-gray-300 font-medium">React</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">💚</div>
                    <p class="text-gray-300 font-medium">Vue.js</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🟢</div>
                    <p class="text-gray-300 font-medium">Node.js</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🎯</div>
                    <p class="text-gray-300 font-medium">Tailwind CSS</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🅱️</div>
                    <p class="text-gray-300 font-medium">Bootstrap</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🔷</div>
                    <p class="text-gray-300 font-medium">jQuery</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📦</div>
                    <p class="text-gray-300 font-medium">Livewire</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🚀</div>
                    <p class="text-gray-300 font-medium">Alpine.js</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">⚡</div>
                    <p class="text-gray-300 font-medium">Express.js</p>
                </div>
            </div>
        </div>

        <!-- Banco de Dados -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Banco de Dados</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🐬</div>
                    <p class="text-gray-300 font-medium">MySQL</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🐘</div>
                    <p class="text-gray-300 font-medium">PostgreSQL</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🍃</div>
                    <p class="text-gray-300 font-medium">MongoDB</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🔴</div>
                    <p class="text-gray-300 font-medium">Redis</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🔥</div>
                    <p class="text-gray-300 font-medium">Firebase</p>
                </div>
            </div>
        </div>

        <!-- Ferramentas de Desenvolvimento -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Ferramentas de Desenvolvimento</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📁</div>
                    <p class="text-gray-300 font-medium">Git</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🐙</div>
                    <p class="text-gray-300 font-medium">GitHub</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🦊</div>
                    <p class="text-gray-300 font-medium">GitLab</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🐳</div>
                    <p class="text-gray-300 font-medium">Docker</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">💻</div>
                    <p class="text-gray-300 font-medium">VS Code</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🎯</div>
                    <p class="text-gray-300 font-medium">PhpStorm</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📮</div>
                    <p class="text-gray-300 font-medium">Postman</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📊</div>
                    <p class="text-gray-300 font-medium">Jira</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">📝</div>
                    <p class="text-gray-300 font-medium">Trello</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🌐</div>
                    <p class="text-gray-300 font-medium">Nginx</p>
                </div>
            </div>
        </div>

        <!-- Cloud & DevOps -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-100 mb-6">Cloud & DevOps</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">☁️</div>
                    <p class="text-gray-300 font-medium">AWS</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🌩️</div>
                    <p class="text-gray-300 font-medium">Digital Ocean</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🔷</div>
                    <p class="text-gray-300 font-medium">Azure</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🚀</div>
                    <p class="text-gray-300 font-medium">Vercel</p>
                </div>
                <div class="bg-gray-900 p-4 rounded-lg text-center border border-gray-800 hover:border-blue-600 transition duration-300">
                    <div class="text-4xl mb-2">🔧</div>
                    <p class="text-gray-300 font-medium">Jenkins</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Call to Action -->
    <section id="contato" class="text-center py-12 bg-gray-900 rounded-lg border border-gray-800">
        <h2 class="text-3xl font-bold text-gray-100 mb-4">Vamos trabalhar juntos?</h2>
        <p class="text-gray-300 mb-6">Estou sempre aberto a novos desafios e oportunidades.</p>
        <div class="flex justify-center space-x-4">
            <a href="mailto:contato@email.com" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                Enviar Email
            </a>
            <a href="https://linkedin.com" target="_blank" class="bg-gray-700 text-gray-200 px-8 py-3 rounded-lg hover:bg-gray-600 transition duration-300">
                LinkedIn
            </a>
        </div>
    </section>
    @endsection
</x-conteudo-principal>    
    
</x-layout-patt>
