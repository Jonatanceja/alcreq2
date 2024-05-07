<section class="py-12 container mx-auto">
    <x-headings.titlel>{{ $page->title() }}</x-headings.title>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-10 items-center py-12">
        <?php $images = $page->gallery()->toFiles();
                        foreach($images as $image): ?>
        <div class="wow fadeInUp">
            <picture>
                <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                <img class="mx-auto" src="{{ $image->url() }}" alt="{{ $site->title() }}">
            </picture>
        </div>
        
        <?php endforeach ?>
    </div>
</section>