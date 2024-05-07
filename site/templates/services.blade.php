@extends('layouts.default')
@section('content')

@include('partials.cover')

<section class="container mx-auto py-12 md:py-24 px-5 md:px-0 space-y-12 md:space-y-24">
    @foreach ($page->children() as $subpage)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 items-center">
            <div class="col-span-1 wow fadeInRight">
                <x-ui.swiper>
                    <?php $images = $subpage->slider()->toFiles();
                                    foreach($images as $image): ?>  
                        <div class="swiper-slide w-full">
                            <picture>
                                <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 800, 'height' => 600, 'crop' => 'center',])->url() }}" type="image/webp">
                                <img src="{{ $image->crop(800, 600)->url() }}" alt="{{ $subpage->title() }}">
                            </picture>
                        </div>
                    <?php endforeach ?>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </x-ui.swiper>
            </div>
            <div class="col-span-2 space-y-3 wow fadeInLeft">
                <a href="{{ $subpage->url() }}" aria-label="Ir a página {{ $subpage->title() }}"><x-headings.h2 class="transition hover:text-flag-light duration-300">{{ $subpage->title() }}</x-headings.h2></a>
                <x-text.base>{{ $subpage->description() }}</x-text.base>
                <div class="py-3">
                    <a href="/contacto" aria-label="Ir a página de contacto"><x-buttons.solid>Contrata</x-buttons.solid></a>
                </div>
            </div>

        </div>
    @endforeach
</section>


@endsection

