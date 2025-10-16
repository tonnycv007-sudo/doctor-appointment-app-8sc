@php
    //icons array
    $links = [
        [
            'name' => 'Dashboard',
            'icon' => 'fa-solid fa-gauge',
            'href' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
        ],
        [
            'header' => 'Manage Page',
        ],
        [
            'name' => 'Dashboard2',
            'icon' => 'fa-solid fa-gauge',
            'href' => route('admin.dashboard'),
            'active' => false,
            'submenu' => [
                [
                    'name' => 'Products',
                    'href' => '#',
                    'active' => false,
                ],
                [
                    'name' => 'Billing',
                    'href' => '#',
                    'active' => false,
                ],
                [
                    'name' => 'Invoice',
                    'href' => '#',
                    'active' => false,
                ],
            ],
        ],
    ];
@endphp


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform 
-translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                <li>
                    {{-- revisa si hay un header definido --}}
                    @isset($link['header'])
                        <div class='px-2 py-2 text-xs font-semibold text-gray-500 uppercase'>
                            {{ $link['header'] }}
                        </div>
                    @else
                        {{-- si existe submenu --}}
                        @isset($link['submenu'])
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group 
                                hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                aria-controls="dropdown-{{ Str::slug($link['name']) }}"
                                data-collapse-toggle="dropdown-{{ Str::slug($link['name']) }}">
                                <span class="w-6 h-6 inline-flex justify-center items-center text-gray-500">
                                    <i class="{{ $link['icon'] }}"></i>
                                </span>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $link['name'] }}</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <ul id="dropdown-{{ Str::slug($link['name']) }}" class="hidden py-2 space-y-2">
                                @foreach ($link['submenu'] as $item)
                                    <li>
                                        <a href="{{ $item['href'] }}"
                                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 
                                            group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                            {{ $item['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            {{-- si noexiste usa una etiqueta antigua --}}
                            <a href="{{ $link['href'] }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white 
                                hover:bg-gray-100 dark:hover:bg-gray-700 group 
                                {{ $link['active'] ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
                                <span class="w-6 h-6 inline-flex justify-center items-center text-gray-500">
                                    <i class="{{ $link['icon'] }}"></i>
                                </span>
                                <span class="ms-3">{{ $link['name'] }}</span>
                            </a>
                        @endisset
                    @endisset
                </li>
            @endforeach

            <li>
                {{-- Elemento vacío opcional --}}
            </li>
        </ul>
    </div>
</aside>