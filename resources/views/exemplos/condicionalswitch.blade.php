<h1>Condicional Switch</h1>

<p>Aqui vamos exemplificar a condicional switch</p>

<p>A condicional switch é usada para executar diferentes blocos de código com base no valor de uma variável ou expressão. 
    Ela é útil quando você tem várias condições para verificar e deseja evitar o uso excessivo de if-else.</p>

    <p>Exemplo: </p>    

@@switch ($nivelAcesso)
    @@case(1)
        <p>Usuário com acesso de Administrador</p>
        @@break                 
    @@case(2)
        <p>Usuário com acesso de Editor</p>
        @@break
    @@case(3)
        <p>Usuário com acesso de Autor</p>
        @@break
    @@default

        <p>Usuário com acesso de Leitor</p>
@@endswitch

<p>Executando ...</p>
<p>Exemplo, recebendo {{ $nivelAcesso }} e retornando o tipo de acesso</p>

@switch ($nivelAcesso)
    @case(1)
        <p>Usuário com acesso de Administrador</p>
        @break                 
    @case(2)
        <p>Usuário com acesso de Editor</p>
        @break
    @case(3)
        <p>Usuário com acesso de Autor</p>
        @break
    @default

        <p>Usuário com acesso de Leitor</p>
@endswitch