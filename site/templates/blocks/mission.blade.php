<section class="bg-gray-50 py-12 md:py-24">
    <div class="container mx-auto space-y-10 px-5 md:px-0">
        <x-headings.titlel>{{ $page->title() }}</x-headings.titlel>
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-20 gap-10">
            <div class="space-y-4 wow fadeInRight">
                <div class="flex items-center space-x-6">
                    <div class="bg-flag-light rounded-full w-20 h-20 flex items-center">
                        @if ($image = $page->icon()->toFile())
                        <img class="m-auto h-12 w-12" src="{{ $image->url() }}" alt="Icono">
                        @endif
                    </div>
                    <x-headings.h3>Misión</x-headings.h3>
                </div>
                <x-text.base>{!! $page->mission() !!}</x-text.base>
            </div>
            <div class="space-y-4 wow fadeInLeft">
                <div class="flex items-center space-x-6">
                    <div class="bg-flag-light rounded-full w-20 h-20 flex items-center">
                        @if ($image = $page->vicon()->toFile())
                        <img class="m-auto h-12 w-12" src="{{ $image->url() }}" alt="Icono">
                        @endif
                    </div>
                    <x-headings.h3>Visión</x-headings.h3>
                </div>
                <x-text.base>{!! $page->vision() !!}</x-text.base>
            </div>
        </div>
    </div>
</section>