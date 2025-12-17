<h1>Estruturas Loop and For</h1>

<div>
<h2>Estrutura foreach</h2>
<p>Descricao da estrutura foreach, usado quando vc tem definido o inicio e fim</p>
<h3>Exemplo:</h3>

@php
    $testes = ['Teste 1', 'Teste 2', 'Teste 3', 'Teste 4', 'Teste 5'];
@endphp
@foreach ($testes as $teste )
    <p>{{ $teste }}</p>   
@endforeach 
<hr>
<p>OU</p>

@foreach (range(1, $numero) as $num )
    <p>{{ $num }}</p>   
@endforeach
<hr>
<p>OU</p>
@foreach (['A', 'B', 'C', 'D', 'E'] as $letra )
    <p>{{ $letra }}</p>   
@endforeach
<hr>
<p>OU</p>
@php
    $array = ['X', 'Y', 'Z'];
@endphp
@foreach ($array as $item )
    <p>{{ $item }}</p>   
@endforeach
<hr>
<h3>Execucao....</h3>
@php
    $array = ['X', 'Y', 'Z'];
@endphp
<hr>
@foreach ($array as $item )
    <p>{{ $item }}</p>   
@endforeach
</div>
<hr>



<div>
<h2>Estrutura forelse</h2>
<p>Descricao da estrutura forelse, usado quando vc nao tem certeza
se o array ou coleção possui elementos</p>
<h3>Exemplo:</h3>
@php
    $itens = [1, 2, 3, 4, 5];
@endphp


@forelse ($itens as $item)
    <p> Item: {{ $item }}</p>
@empty
    <p>Nenhum item encontrado.</p>
@endforelse
<h3>Execucao....</h3>
@php
    $itens = [];
@endphp
@forelse ($itens as $item)
    <p> Item: {{ $item }}</p>
@empty
    <p>Nenhum item encontrado.</p>
@endforelse

    
</div>
<hr>



<div>
<h2>Estrutura while</h2>
<p>Descricao da estrutura while, usado quando vc quer executar um
bloco de código enquanto uma condição for verdadeira</p>
<h3>Exemplo:</h3>
@php
    $contador = 1;
@endphp
@while ($contador <= 5)
    <p> Contador: {{ $contador }}</p>
    @php
        $contador++;
    @endphp
@endwhile

<h3>Execucao....</h3>
@php
    $counter = 10;
@endphp
@while ($counter <= 20)
    <p> Counter: {{ $counter }}</p>
@php
        $counter++;
@endphp
@endwhile
</div>
<hr>

<div>
<h3>Modificadores break e continue</h3>
<p>Descricao dos modificadores break e continue, usados para controlar
o fluxo de loops</p>
<p>Break interrompe a execução do loop, enquanto continue pula para a próxima iteração.</p>
<p>Continue pula para a próxima iteração do loop.</p>
<h3>Exemplo:</h3>
@php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
@endphp
<h4>Usando break:</h4>
@foreach ($numbers as $number)
    @if ($number == 6)
        @break
    @endif
    <p> Número: {{ $number }}</p>
@endforeach 
<h4>Usando continue:</h4>
@foreach ($numbers as $number)
    @if ($number % 2 == 0)
        @continue
    @endif
    <p> Número ímpar: {{ $number }}</p>
@endforeach


