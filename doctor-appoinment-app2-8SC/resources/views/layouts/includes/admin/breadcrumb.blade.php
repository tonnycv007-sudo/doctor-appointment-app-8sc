{{-- Verificar si hay elementos en breadcrumbs --}}
@if (!empty($breadcrumbs) && count($breadcrumbs) > 0)
    <nav class="mb-2 block">
        <ol class="flex flex-wrap text-slate-700 text-sm">
            {{-- Recorrer los elementos del breadcrumb --}}
            @foreach ($breadcrumbs as $item)
                <li class="flex items-center">
                    {{-- Si no es el primer elemento, ponle separador antes --}}
                    @unless ($loop->first)
                        <span class="px-2 text-gray-400">/</span>
                    @endunless

                    {{-- Revisar si tiene un href --}}
                    @if (!empty($item['href']))
                        <a href="{{ $item['href'] }}" class="opacity-60 hover:opacity-100 transition">
                            {{ $item['name'] }}
                        </a>
                    @else
                        {{ $item['name'] }}
                    @endif
                </li>
            @endforeach
        </ol>

        {{-- Validar el último elemento y mostrarlo en negritas --}}
        @if (count($breadcrumbs) > 1)
            <h6 class="font-bold mt-2">
                {{ $breadcrumbs[count($breadcrumbs) - 1]['name'] ?? '' }}
            </h6>
        @endif
    </nav>
@endif
