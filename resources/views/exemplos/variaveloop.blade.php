<h1>Variavel LOOP</h1>

<h2>Exemplo de Variável de Loop </h2>

@php
    $items = ['Item 1', 'Item 2', 'Item 3', 'Item 4'];
@endphp


<ul>
    @foreach ($items as $item)
        <li>
            {{ $item }}
            @if ($loop->first)
                - Este é o primeiro item.
            @endif

            @if ($loop->last)
                - Este é o último item.
            @endif

            - Índice atual: {{ $loop->index }}
            - Iteração atual: {{ $loop->iteration }}
            - Total de iterações: {{ $loop->count }}
        </li>
    @endforeach
</ul>

<h4>Dentro de um @@foreach ou @@forelse, o Laravel cria automaticamente uma variável mágica chamada $loop. Ela é um objeto que contém informações valiosas sobre o estado atual da repetição, permitindo que você tome decisões lógicas sem precisar criar contadores manuais.</h4>

<h5>Aqui estão as propriedades mais úteis e como utilizá-las:</h5>

<h3>
Principais Propriedades da Variável $loop </h3>
Propriedade 	Descrição
<ul>
    <li>$loop->index	O índice da iteração atual (começa em 0).</li>
    <li>$loop->iteration	O número da iteração atual (começa em 1).</li>
    <li>$loop->first	Retorna true se for a primeira iteração.</li>
    <li>$loop->last	Retorna true se for a última iteração.</li>
    <li>$loop->count	O número total de itens na coleção.</li>
</ul>