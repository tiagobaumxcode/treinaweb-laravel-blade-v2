<div>
    {{-- na variavel link vira a propriedade do componente link --}}
    <a href="{{ $link }}" target="_blank" class="flex items-center space-x-3 text-gray-300 hover:text-blue-500 transition duration-300">
            <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
               {{--  No espaco abaixo, insira o ícone desejado, no formato SVG. --}}
                {{ $slot }}
            </div>
        <span class="font-medium">{{ $nomeLink }}</span> {{-- na variavel nomeLink vira a propriedade do componente nomelink --}}
    </a>
</div>