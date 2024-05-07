<section class="container mx-auto py-10 md:py-20 px-5 md:px-0">
    <x-headings.titlel>{{ $page->title() }}</x-headings.titlel>
    <div class="grid grid-cols-2 md:grid-cols-5 py-10 gap-10">
        <?php
        $related = $page->related()->toPages();
        if ($related->count() > 0):
        ?>
        @foreach($related as $service)
        <div l>
            <a href="{{ $service->url() }}" aria-label="Ver servicio">
            <div class="p-5 rounded-full w-32 h-32 mx-auto border-2 border-flag flex items-center transform transition hover:scale-105 wow fadeInUp hover:bg-green-100" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                @if ($image = $service->icon()->toFile())
                    <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                    <img class="mx-auto" src="{{ $image->url() }}" alt="{{ $site->title() }}">                    
                @endif
            </div>
            <x-text.base class="text-center wow fadeInUp mt-4 hover:text-gray-900" data-wow-delay="{{ $loop->iteration * 250 }}ms">{{ $service->title() }}</x-text.base>
            </a>
        </div>
        @endforeach
        <?php endif ?> 
    </div>
</section>