@extends('layouts.default')
@section('content')

@include('partials.cover')

<section class="container mx-auto py-12 md:py-24 px-5 md:px-0 space-y-12 md:space-y-24">
    @foreach ($page->children() as $subpage)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-20 items-center">
            <div class="col-span-1 wow fadeInRight">
                @if ($image = $subpage->cover()->toFile())
                    <a href="{{ $subpage->url() }}" aria-label="Ir a página {{ $subpage->title() }}">
                        <picture>
                            <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 600, 'height' => 400, 'crop' => 'center',])->url() }}" type="image/webp">
                            <img class="transform transition duration-300 hover:scale-105 hover:shadow-md" src="{{ $image->crop(600, 400)->url() }}" alt="{{ $subpage->title() }}">
                        </picture>
                    </a>
                @endif
            </div>
            <div class="col-span-2 space-y-3 wow fadeInLeft">
                <a href="{{ $subpage->url() }}" aria-label="Ir a página {{ $subpage->title() }}"><x-headings.h2 class="transition hover:text-flag-light duration-300">{{ $subpage->title() }}</x-headings.h2></a>
                <x-text.base>{!! $subpage->short()->kti() !!}</x-text.base>
                <div class="py-3">
                    <a href="{{ $subpage->url() }}" aria-label="Ir a página {{ $subpage->title() }}"><x-buttons.solid>Ver más</x-buttons.solid></a>
                </div>
            </div>

        </div>
    @endforeach
</section>


@endsection

