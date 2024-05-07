<section class="container mx-auto py-12 md:py-24 px-5 md:px-0 space-y-12 md:space-y-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 items-center">
        <div class="col-span-1 wow fadeInRight">
            <div>
                @if ($image = $page->photo()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 600, 'height' => 400,])->url() }}" type="image/webp">
                    <img class="mx-auto mt-10 md:mt-0" src="{{ $image->crop(600, 400)->url() }}" alt="{{ $page->title() }}">
                </picture>
                @endif
            </div>
        </div>
        <div class="col-span-1 md:col-span-2 space-y-3 wow fadeInLeft">
            <x-headings.h2>{{ $page->title() }}</x-headings.h2>
            <x-text.base>{!! $page->text()->kti() !!}</x-text.base>
            <div class="py-3">
                <a href="{{ $page->pdf() }}" download="" aria-label="Descargar CV en PDF"><x-buttons.solid>Mas información</x-buttons.solid></a>
            </div>
        </div>

    </div>
</section>   