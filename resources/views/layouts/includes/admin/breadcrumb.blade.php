<!-- verificar si hay un elemento de breadcrumb -->
 @if(count($breadcrumbs))
        <!-- margin buttom -->
      <nav class="mb-2 block">
        <ol class="flex flex-wrap text-slate-700 text-sm">
          <!-- recorrer elementos de breadcrumbs -->
           @foreach ($breadcrumbs as $item)
           <li class="flex items-center">
            <!-- itmerida/campus poniente/dsc -->
            @unless($loop->first)
            <span class="px-2 text-gray-400">/</span>

            @endunless
            <!-- revise si tiene un href -->
             @isset($item['href'])
             <a href="{{ $item['href'] }}" class="opacity-60 hover:opacity-100 transition">
              {{ $item['name'] }}
             </a>

             @else
             {{ $item['name'] }}
             @endisset

           </li>
          @endforeach
        </ol>
        <!-- ultimo elemento resaltado -->
         @if (count($breadcrumbs) > 1 )
         <h6 class="font-bold mt-2">
          {{ end($breadcrumbs)['name'] }}
         </h6>
         @endif

        




      </nav>


 @endif