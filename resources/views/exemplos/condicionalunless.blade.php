<h1>Condicional Unless</h1>


<p>Aqui vamos exemplificar a condicional unless</p>

<p>A condicional unless é o inverso da condicional if. 
    Ela executa o bloco de código apenas se a condição for falsa.</p>

    <p>Exemplo: </p>



@@unless ($nome == 'TreinaWeb')
    <p>O nome não é TreinaWeb</p>
@@endunless

<p>Se a variável $nome for diferente de 'TreinaWeb', a mensagem "O nome não é TreinaWeb" será exibida.</p>

<p>Se a variável $nome for igual a 'TreinaWeb', nada será exibido.</p>

@unless ($nome == 'TreinaWeb')
    <p>O nome não é TreinaWeb</p>
@endunless

<p>E uma função condicional inversa ao if. Nao achei seu uso claro, na verdade ate confuso</p>