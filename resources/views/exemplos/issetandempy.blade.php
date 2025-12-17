
<h1>isset and empty</h1>
<p>isset and empty são duas funções muito úteis em PHP para verificar o estado de variáveis.</p>
<hr>
<p>A função isset() verifica se uma variável está definida e não é nula. Ela retorna true se a variável existe e tem um valor diferente de null, caso contrário, retorna false.</p>
<hr>
<p>A função empty() verifica se uma variável está vazia. Ela retorna true se a variável não existe, é nula, uma string vazia, o número 0, um array vazio ou false. Caso contrário, retorna false.</p>



<hr>
<p>Exemplo isset: </p>  

@@if (isset($variavel))
    <p>A variável está definida e não é nula.</p>
@@else
    <p>A variável não está definida ou é nula.</p>
@@endif 

<hr>
<p>Exemplo empty: </p>
@@if (empty($variavel))
    <p>A variável está vazia.</p>
@@else
    <p>A variável não está vazia.</p>
@@endif
<hr>

<p>Executando isset... Onde variavel recebida foi {{ $variavel }}</p>
@if (isset($variavel))
    <p>->A variável está definida e não é nula.</p>
@else   
    <p>->A variável não está definida ou é nula.</p>                  
@endif

<p>Executando empty...Onde variavel recebida foi {{ $variavel }}</p>
@if (empty($variavel))
    <p>->A variável está vazia.</p>
@else
    <p>->A variável não está vazia.</p>
@endif  


