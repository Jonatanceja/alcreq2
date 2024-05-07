<section class="md:px-0 bg-gray-100">
    <div class="container mx-auto py-10 md:py-20 px-5">
        <x-headings.titler>{{ $page->title() }}</x-headings.titler>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-10">
            <div class="space-y-3">
                <x-headings.h3 class="wow fadeInUp">{{ $page->headline() }}</x-headings.h3>
                <x-text.base class="wow fadeInDown">{{ $page->text() }}</x-text.base>
            </div>
            <div>
            </div>
        </div>
        <div class="block md:flex items-end">
            <div class="flex items-end space-x-10 w-full md:w-2/3">
                @foreach ($page->counters()->toStructure() as $item)
                <div class="text-center wow fadeInUp" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                   <x-headings.h3>{{ $item->number() }}</x-headings.h3>
                   <x-text.base>{{ $item->headline() }}</x-text.base> 
                </div>
            @endforeach
                
            </div>
            <div class="w-full md:w-1/3  md:absolute right-0 mx:auto md:mr-0 wow fadeIn">
                @if ($image = $page->logo()->toFile())
                    <picture>
                        <source srcset="{{ $image->thumb(['format' => 'webp',])->url() }}" type="image/webp">
                        <img class="mx-auto mt-10 md:mt-0" src="{{ $image->url() }}" alt="Logo experiencia">
                    </picture>
                @endif
            </div>
        </div>
            
    </div>
</section>