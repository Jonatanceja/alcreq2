<section>
    @if ($image = $page->bg()->tofile())
        <div class="min-h-screen bg-cover bg-center flex items-center relative bg-fixed bg-flag" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }})">
    @endif
        <div class="absolute bg-black bg-opacity-40 min-h-screen w-full flex items-end">
            <div class="w-full">
                <div class="flex wow fadeInUp">
                    <div class="p-5 md:p-10 space-y-1 mx-auto grid-cols-2 md:grid-cols-4 gap-5 hidden md:grid">
                        @foreach ($site->adress()->toStructure() as $item)
                            <div>
                                <a href="{{ $item->mapa() }}" target="blank" aria-label="Ver mapa">
                                    <p class="text-white"><span class="mr-2"><i class="lni lni-map-marker"></i></span><strong>{{ $item->titulo() }}</strong></p>
                                    <p class="text-white">Calle {{ $item->calle() }} {{ $item->numero() }}</p>
                                    <p class="text-white">Col. {{ $item->colonia() }}, C.P. {{ $item->codigo() }}</p>
                                    <p class="text-white">{{ $item->ciudad() }}, {{ $item->estado() }}</p>
                                    <p class="text-white">
                                        @if ($item->telefono()->isNotEmpty())
                                        Tel: {{ $item->telefono() }}
                                        @endif
                                        @if ($item->telefono2()->isNotEmpty())
                                        , {{$item->telefono2()}}
                                        @endif
                                    </p>
                                </a>
                            </div>   
                        @endforeach                    
                    </div>            
                </div>
            </div>
        </div>
        <div class="w-full md:w-2/3 mx-auto space-y-5 z-10 px-5 md:px-0 mt-20 md:mt-0">
            <div>
                <h1 class="text-2xl md:text-7xl text-white text-center wow fadeInUp">{{ $page->headline() }}</h1>
                <p class="text-white text-base md:text-lg text-center wow fadeInDown">{!! $page->text()->kti() !!}</p>
            </div>
            <div class="p-5 md:p-10 space-y-1 mx-auto grid grid-cols-2 md:grid-cols-4 gap-5 md:hidden">
                @foreach ($site->adress()->toStructure() as $item)
                    <div class="text-xs">
                        <a href="{{ $item->mapa() }}" target="blank" aria-label="Ver mapa">
                            <p class="text-white"><span class="mr-2"><i class="lni lni-map-marker"></i></span><strong>{{ $item->titulo() }}</strong></p>
                            <p class="text-white">Calle {{ $item->calle() }} {{ $item->numero() }}</p>
                            <p class="text-white">Col. {{ $item->colonia() }}, C.P. {{ $item->codigo() }}</p>
                            <p class="text-white">{{ $item->ciudad() }}, {{ $item->estado() }}</p>
                            <p class="text-white">
                                @if ($item->telefono()->isNotEmpty())
                                Tel: {{ $item->telefono() }}
                                @endif
                                @if ($item->telefono2()->isNotEmpty())
                                , {{$item->telefono2()}}
                                @endif
                            </p>
                        </a>
                    </div>   
                @endforeach                    
            </div>
        </div>
        
    </div>
</section>