 <!-- Footer -->
    <footer class="bg-gray-900 mt-auto">
        <div class="container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Coluna 1 -->

                {{-- *** Nas colunas 1, 2 e 3, insira os componentes de seção de rodapé conforme necessário.
                Cada componente vai usar slots nomeados para definir o título e o conteúdo.*** --}}

                
                <x-secao-rodape>
                    <x-slot name="titulo">
                        <h3 class="text-blue-600 font-bold text-lg mb-3">Sobre Nós</h3>
                    </x-slot>
                    <x-slot name="conteudo">
                        <p class="text-blue-600 text-sm">
                            Uma breve descrição sobre sua empresa ou projeto.
                        </p>
                    </x-slot>
                </x-secao-rodape>
                
                
                
              
                
                <!-- Coluna 2 -->
                
                <x-secao-rodape>
                    <x-slot name="titulo">
                        <h3 class="text-blue-600 font-bold text-lg mb-3">Links Rápidos</h3>
                    </x-slot>
                    <x-slot name="conteudo">
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="text-blue-600 hover:text-blue-800">Política de Privacidade</a></li>
                            <li><a href="#" class="text-blue-600 hover:text-blue-800">Termos de Uso</a></li>
                            <li><a href="#" class="text-blue-600 hover:text-blue-800">FAQ</a></li>
                        </ul>
                    </x-slot>
                </x-secao-rodape>
                
                
                
                               
                <!-- Coluna 3 -->
                
                
                <x-secao-rodape>
                    <x-slot name="titulo">
                        <h3 class="text-blue-600 font-bold text-lg mb-3">Contato</h3>
                    </x-slot>
                    <x-slot name="conteudo">
                        <ul class="space-y-2 text-sm text-blue-600">
                            <li>Email: contato@meusite.com</li>
                            <li>Telefone: (21) 1234-5678</li>
                            <li>Endereço: Rio de Janeiro, RJ</li>
                        </ul>
                    </x-slot>
                </x-secao-rodape>

            </div>

            <!-- Copyright -->
            <div class="border-t border-blue-600 mt-6 pt-4 text-center">
                <p class="text-blue-600 text-sm">
                        <li>Email: contato@meusite.com</li>
                        <li>Telefone: (21) 1234-5678</li>
                        <li>Endereço: Rio de Janeiro, RJ</li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-blue-600 mt-6 pt-4 text-center">
                <p class="text-blue-600 text-sm">
                    &copy; {{ date('Y') }} MeuSite. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>

    <!-- Script para Menu Mobile -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>