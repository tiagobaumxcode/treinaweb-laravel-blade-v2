<!-- Header da Página -->
    <div class="text-center py-12 mb-12 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-gray-100 mb-4">Entre em Contato</h1>
        <p class="text-xl text-gray-400">Adoraria ouvir sobre seu projeto ou ideia</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
        <!-- Formulário de Contato -->
        <div class="lg:col-span-2">
            <div class="bg-gray-900 p-8 rounded-lg border border-gray-800">
                <h2 class="text-3xl font-bold text-gray-100 mb-6 border-l-4 border-blue-600 pl-4">
                    Envie uma Mensagem
                </h2>

                @if(session('success'))
                    <div class="bg-green-900 border border-green-700 text-green-100 px-4 py-3 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-900 border border-red-700 text-red-100 px-4 py-3 rounded-lg mb-6">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="#" method="POST" class="space-y-6">
                    @csrf

                    <!-- Nome -->
                    <div>
                        <label for="name" class="block text-gray-300 font-medium mb-2">
                            Nome Completo <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            required
                            class="w-full bg-black border border-gray-700 text-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-600 transition duration-300"
                            placeholder="Seu nome completo"
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-300 font-medium mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required
                            class="w-full bg-black border border-gray-700 text-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-600 transition duration-300"
                            placeholder="seu@email.com"
                        >
                    </div>

                    <!-- Telefone -->
                    <div>
                        <label for="phone" class="block text-gray-300 font-medium mb-2">
                            Telefone
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="{{ old('phone') }}"
                            class="w-full bg-black border border-gray-700 text-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-600 transition duration-300"
                            placeholder="(21) 99999-9999"
                        >
                    </div>

                    <!-- Assunto -->
                    <div>
                        <label for="subject" class="block text-gray-300 font-medium mb-2">
                            Assunto <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="subject" 
                            name="subject" 
                            required
                            class="w-full bg-black border border-gray-700 text-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-600 transition duration-300"
                        >
                            <option value="">Selecione um assunto</option>
                            <option value="projeto" {{ old('subject') == 'projeto' ? 'selected' : '' }}>Novo Projeto</option>
                            <option value="orcamento" {{ old('subject') == 'orcamento' ? 'selected' : '' }}>Orçamento</option>
                            <option value="consultoria" {{ old('subject') == 'consultoria' ? 'selected' : '' }}>Consultoria</option>
                            <option value="mentoria" {{ old('subject') == 'mentoria' ? 'selected' : '' }}>Mentoria</option>
                            <option value="parceria" {{ old('subject') == 'parceria' ? 'selected' : '' }}>Parceria</option>
                            <option value="outro" {{ old('subject') == 'outro' ? 'selected' : '' }}>Outro</option>
                        </select>
                    </div>

                    <!-- Orçamento -->
                    <div>
                        <label for="budget" class="block text-gray-300 font-medium mb-2">
                            Orçamento Estimado
                        </label>
                        <select 
                            id="budget" 
                            name="budget" 
                            class="w-full bg-black border border-gray-700 text-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-600 transition duration-300"
                        >
                            <option value="">Selecione uma faixa</option>
                            <option value="ate-5k" {{ old('budget') == 'ate-5k' ? 'selected' : '' }}>Até R$ 5.000</option>
                            <option value="5k-10k" {{ old('budget') == '5k-10k' ? 'selected' : '' }}>R$ 5.000 - R$ 10.000</option>
                            <option value="10k-20k" {{ old('budget') == '10k-20k' ? 'selected' : '' }}>R$ 10.000 - R$ 20.000</option>
                            <option value="20k-50k" {{ old('budget') == '20k-50k' ? 'selected' : '' }}>R$ 20.000 - R$ 50.000</option>
                            <option value="acima-50k" {{ old('budget') == 'acima-50k' ? 'selected' : '' }}>Acima de R$ 50.000</option>
                        </select>
                    </div>

                    <!-- Mensagem -->
                    <div>
                        <label for="message" class="block text-gray-300 font-medium mb-2">
                            Mensagem <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="6" 
                            required
                            class="w-full bg-black border border-gray-700 text-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:border-blue-600 transition duration-300 resize-none"
                            placeholder="Conte-me sobre seu projeto ou como posso ajudá-lo..."
                        >{{ old('message') }}</textarea>
                    </div>

                    <!-- Checkbox -->
                    <div class="flex items-start">
                        <input 
                            type="checkbox" 
                            id="agree" 
                            name="agree" 
                            required
                            class="mt-1 w-4 h-4 text-blue-600 bg-black border-gray-700 rounded focus:ring-blue-600"
                        >
                        <label for="agree" class="ml-3 text-sm text-gray-300">
                            Concordo em receber comunicações e aceito a 
                            <a href="#" class="text-blue-500 hover:text-blue-400">política de privacidade</a>
                        </label>
                    </div>

                    <!-- Botão de Envio -->
                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full bg-blue-600 text-white font-semibold px-8 py-4 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center justify-center space-x-2"
                        >
                            <span>Enviar Mensagem</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Informações de Contato -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Card de Informações -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h3 class="text-2xl font-bold text-gray-100 mb-6">Informações de Contato</h3>
                
                <div class="space-y-4">
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Email</p>
                            <a href="mailto:contato@email.com" class="text-gray-100 hover:text-blue-500 transition">
                                contato@email.com
                            </a>
                        </div>
                    </div>

                    <!-- Telefone -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Telefone</p>
                            <a href="tel:+5521999999999" class="text-gray-100 hover:text-blue-500 transition">
                                (21) 99999-9999
                            </a>
                        </div>
                    </div>

                    <!-- Localização -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Localização</p>
                            <p class="text-gray-100">
                                São Gonçalo, Rio de Janeiro<br>
                                Brasil
                            </p>
                        </div>
                    </div>

                    <!-- Horário -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">Horário de Atendimento</p>
                            <p class="text-gray-100">
                                Seg - Sex: 9h às 18h<br>
                                Sábado: 9h às 13h
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Redes Sociais -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h3 class="text-2xl font-bold text-gray-100 mb-6">Redes Sociais</h3>
                
                <div class="space-y-3">
                    <x-item-social link="https://www.linkedin.com" nomeLink="LinkedIn">
                         <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                    </x-item-social>

                    <a href="https://github.com" target="_blank" class="flex items-center space-x-3 text-gray-300 hover:text-blue-500 transition duration-300">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </div>
                        <span class="font-medium">GitHub</span>
                    </a>

                    <a href="https://twitter.com" target="_blank" class="flex items-center space-x-3 text-gray-300 hover:text-blue-500 transition duration-300">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                            </svg>
                        </div>
                        <span class="font-medium">Twitter</span>
                    </a>

                    <a href="https://instagram.com" target="_blank" class="flex items-center space-x-3 text-gray-300 hover:text-blue-500 transition duration-300">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <span class="font-medium">Instagram</span>
                    </a>
                </div>
            </div>

            <!-- FAQ Rápido -->
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h3 class="text-2xl font-bold text-gray-100 mb-4">Respostas Rápidas</h3>
                <div class="space-y-3 text-sm">
                    <div>
                        <p class="text-blue-500 font-medium">⏱️ Tempo de resposta:</p>
                        <p class="text-gray-300">Geralmente em até 24 horas</p>
                    </div>
                    <div>
                        <p class="text-blue-500 font-medium">💰 Orçamento:</p>
                        <p class="text-gray-300">Fornecido após análise do projeto</p>
                    </div>
                    <div>
                        <p class="text-blue-500 font-medium">🤝 Reunião:</p>
                        <p class="text-gray-300">Disponível online via Google Meet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção FAQ -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-gray-100 mb-8 border-l-4 border-blue-600 pl-4">Perguntas Frequentes</h2>
        
        <div class="space-y-4">
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h4 class="text-xl font-semibold text-gray-100 mb-2">Quanto tempo leva para receber uma resposta?</h4>
                <p class="text-gray-300">Geralmente respondo todas as mensagens em até 24 horas úteis. Mensagens urgentes podem ser respondidas mais rapidamente.</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h4 class="text-xl font-semibold text-gray-100 mb-2">Você trabalha com projetos de qualquer tamanho?</h4>
                <p class="text-gray-300">Sim! Trabalho desde pequenos projetos até sistemas complexos. O importante é que possamos criar algo de valor juntos.</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h4 class="text-xl font-semibold text-gray-100 mb-2">Como funciona o processo de orçamento?</h4>
                <p class="text-gray-300">Após receber sua mensagem, agendamos uma conversa para entender melhor o projeto. Em seguida, preparo uma proposta detalhada com escopo, prazos e valores.</p>
            </div>

            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800">
                <h4 class="text-xl font-semibold text-gray-100 mb-2">Você oferece suporte após a entrega?</h4>
                <p class="text-gray-300">Sim! Todos os projetos incluem um período de garantia e suporte. Também ofereço planos de manutenção contínua.</p>
            </div>
        </div>
    </section>