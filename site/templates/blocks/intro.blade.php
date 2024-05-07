<section class="container mx-auto py-10 md:py-20 px-5 md:px-0">
    <x-headings.titler>{{ $page->title() }}</x-headings.titler>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-10 py-10">
        <div class="relative py-20 wow fadeInUp">
            <div class="absolute opacity-5 transform -translate-y-20 -translate-x-10">
                <svg width="134px" height="201px" viewBox="0 0 134 201" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Home" transform="translate(-46.000000, -1068.000000)" fill-rule="nonzero">
                            <g id="Group-3" transform="translate(46.000000, 1068.280738)">
                                <polygon id="Path" fill="#54565A" points="58.2833133 17.6470588 58.2833133 200 111.37455 200 111.37455 49.84994"></polygon>
                                <polygon id="Path" fill="#8C9091" points="116.656663 96.9987995 116.656663 200 133.883553 200 133.883553 105.672269"></polygon>
                                <polygon id="Path" fill="#76777A" points="53.0912365 -2.1324812e-14 53.0912365 115.726291 -5.331203e-15 149.369748 -5.331203e-15 32.0828331"></polygon>
                                <polygon id="Path" fill="#8C9091" points="-5.331203e-15 155.432173 -5.331203e-15 174.009604 52.7611044 141.206483 53.0912365 122.058824"></polygon>
                                <polygon id="Path" fill="#76777A" points="-5.331203e-15 180.222089 -5.331203e-15 200 53.0912365 200 53.0912365 147.208884"></polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="space-y-4">
                <x-headings.h3>{{ $site->nombre() }}</x-headings.h3>
                <x-text.base>{!! $page->intro()->kti() !!}</x-text.base>
                <p class="mt-10 text-silver hover:text-silver-dark"><a href="/nosotros" aria-label="Ver más información de Alcreq">Ver más</a> <i class="lni lni-arrow-right"></i></p>
            </div>
        </div>
        <?php
        $related = $page->related()->toPages();
        if ($related->count() > 0):
        ?>
        @foreach($related as $product)
        <div class="bg-white shadow-md hover:shadow-lg wow fadeInUp transform transition hover:scale-105" data-wow-delay="{{ $loop->iteration * 250 }}ms">
            <a href="{{ $product->url() }}" aria-label="Ver producto">
            @if ($image = $product->bg()->toFile())
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400, 'height' => 400, 'crop' => 'center',])->url() }}" type="image/webp">
                <img class="mx-auto mt-10 md:mt-0" src="{{ $image->crop(400, 400)->url() }}" alt="{{ $page->title() }}">
            </picture>
            @endif
            <div class="p-5">
                <p class="text-sm text-silver">Proyectos</p>
                <x-headings.h3>{{ $product->title() }}</x-headings.h3>
                    <x-text.base class="mt-10 text-silver hover:text-silver-dark"><a href="{{ $product->url() }}" aria-label="Ver más informació del producto">Ver más</a> <i class="lni lni-arrow-right"></i></x-text.base>
            </div>
            </a>
        </div>
        @endforeach
        <?php endif ?> 
    </div>
    
</section>