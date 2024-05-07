@extends('layouts.default')
@section('content')

@include('partials.cover')

<section class="container mx-auto py-10 md:py-20 px-5 md:px-0 space-y-12 md:space-y-24">
    
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 py-10">
            @foreach ($page->children() as $subpage)
            <a href="{{ $subpage->url() }}" aria-label="Ir a página {{ $subpage->title() }}">
                <div class="bg-white shadow-md hover:shadow-lg wow fadeInUp transform transition hover:scale-105 group h-full" data-wow-delay="{{ $loop->iteration * 250 }}ms">
                    @if ($image = $subpage->bg()->toFile())
                    <picture>
                        <source srcset="{{ $image->thumb(['format' => 'webp', 'width' => 400, 'height' => 400, 'crop' => 'center',])->url() }}" type="image/webp">
                        <img src="{{ $image->crop(600, 400)->url() }}" alt="{{ $subpage->title() }}">
                    </picture>
                    @endif
                    <div class="p-5">
                        <x-headings.h3>{{ $subpage->title() }}</x-headings.h3>
                        <x-text.base class="mt-5 text-silver group-hover:text-silver-dark">Ver proyectos <i class="lni lni-files"></i></x-text.base>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    
</section>


@endsection