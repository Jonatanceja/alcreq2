@extends('layouts.default')
@section('content')

@include('partials.cover')

<section class="container mx-auto py-10 md:py-20 px-5 md:px-0 space-y-3 md:space-y-12 relative">
    @foreach ($page->children()->flip() as $index => $subpage)
        <div class="wow fadeInLeft transition">
            <div class="border-b border-silver-light py-3">
                <x-headings.h3>{{ $subpage->title() }}  <span class="ml-2 text-flag-light"><i class="lni lni-files"></i></span> </x-headings.h3>
                <p class="text-flag text-lg font-bold">{{ $subpage->place() }}</p>
                <x-text.base>{{ $subpage->client() }}</x-text.base>
                
                @if ($subpage->gallery()->isNotEmpty())
                <a data-fancybox-trigger="gallery-{{ $index }}" aria-label="Abrir imagen en caja de luz">
                    <p class="cursor-pointer mt-5 text-flag hover:text-flag-light font-semibold">Ver proyecto <i class="lni lni-arrow-top-right"></i></p>
                </a>
                    <div class="flex">
                    <?php $images = $subpage->gallery()->toFiles(); foreach($images as $image): ?>  
                        <a data-fancybox="gallery-{{ $index }}" href="{{ $image->url() }}" aria-label="Abir imagen en caja de luz" data-caption="<p style='text-transform: uppercase; font-size: 1.25rem; text-align: center;'>{{ $image->alt() }}</p><p style='text-align: center;'>{{ $image->caption() }}</p>"></a>
                        <?php endforeach ?>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</section>
@endsection

@once
@push('styles')  
<link rel="stylesheet" type="text/css" href="/css/fancybox.css">
@endpush
@push('scripts')
<script src="/js/fancybox.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    $("[data-fancybox]").fancybox({

      thumbs          : false,

      hash            : false,

      loop            : false,

      keyboard        : true,

      toolbar         : true,

      buttons: [
      //"zoom",
      //"share",
      //"slideShow",
      //"fullScreen",
      //"download",
      //"thumbs",
      "close"
      ],
      
      

      animationEffect : "zoom",

      arrows          : true,

      infobar         : false,

      animationDuration: 500,

      zoomOpacity: false,

      transitionEffect: "fade",

      transitionDuration: 1000,

      protect: true,

      idleTime: false,

      })
      

});
</script>
@endpush
@endonce

