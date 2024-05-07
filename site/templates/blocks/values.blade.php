<section class="container mx-auto py-12 md:py-24 space-y-3 px-5 md:px-0">
    <x-headings.titler>{{ $page->title() }}</x-headings.titler>
    <div class="grid grid-cols-1 md:grid-cols-3 items-center">
        <div class="col-span-1 wow fadeInRight">
            @if ($image = $page->photo()->toFile())
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                <img src="{{ $image->url() }}" alt="{{ $page->title() }}">
            </picture>
            @endif
        </div>
        <div class="col-span-2 bg-gray-50 p-5 md:p-10 wow fadeInLeft">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    {!! $page->values1()->kti() !!}
                </div>
                <div>
                    {!! $page->values2()->kti() !!}
                </div>
            </div>
        </div>

    </div>
</section>