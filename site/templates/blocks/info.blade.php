<section class="container mx-auto py-12 md:py-24 space-y-3">
    <x-headings.titler>{{ $page->title() }}</x-headings.titler>
    <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-20 px-5 md:px-0">
        <div class="md:col-span-1 relative wow fadeInRight">
            <div>
                @if ($image = $page->photo()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                    <img src="{{ $image->url() }}" alt="{{ $page->title() }}">
                </picture>
                @endif
            </div>
            <div class="absolute bottom-0 right-0">
                <img src="/images/imagen-30.jpg" alt="">
            </div>
        </div>
        <div class="md:col-span-2 wow fadeInLeft">
            <div class="space-y-5">
                @if ($image = $page->logo()->toFile())
                <picture>
                    <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                    <img src="{{ $image->url() }}" alt="{{ $page->title() }}">
                </picture>
                @endif
                <x-text.base>{!! $page->text()->kti() !!}</x-text.base>
            </div>
        </div>
    </div>
</section>