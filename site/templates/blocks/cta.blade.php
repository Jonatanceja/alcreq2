<section class="wow fadeInUp">
    @if ($image = $page->bg()->tofile())
        <div class="bg-cover bg-center flex items-center relative bg-fixed py-48 bg-flag" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }})">
    @endif
        <div class="absolute bg-black bg-opacity-40 w-full flex items-center h-full">
            <div class="container mx-auto space-y-3 px-5 md:px-0">
                <h2 class="text-2xl md:text-4xl text-white">
                    {{ $page->headline() }}
                </h2>
                <p class="text-white">
                    {!! $page->text() !!}
                </p>
                <div>
                    <a href="/contacto" aria-label="Contactar a Alcreq">
                        <x-buttons.line>{{ $page->button() }}</x-buttons.line>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>
