<section>
    @if ($image = $page->bg()->tofile())
        <div class="h-56 md:h-72 bg-cover bg-center flex items-center relative bg-flag" style="background-image: url({{ $image->thumb(['format' => 'webp',])->url() }})">
    @endif
        <div class="absolute bg-black bg-opacity-40 h-full w-full flex items-end">
            <div class="w-full">
                <div class="flex wow fadeInUp">
                    <div class="p-5 md:p-10 space-y-1 justify-start text-left w-1/2 flex">
                        <div>
                            <h2 class="text-2xl md:text-4xl text-white">
                                {{ $page->title() }}
                            </h2>
                            <div class="text-white">
                                <?php foreach($site->breadcrumb() as $crumb): ?>
                                <a class="text-white hover:opacity-80 transition duration-300" href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
                                    <?= html($crumb->title()) ?> 
                                </a>
                                /
                                <?php endforeach ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>