@extends('layouts.default')
@section('content')

@include('partials.cover2')

<section class="container mx-auto py-10 md:py-20 space-y-20">
    <h2 class="text-2xl uppercase text-flag font-bold">Alcreq esta disponible para tu siguiente proyecto</h2>
    @foreach ($site->adress()->toStructure() as $item)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="space-y-6 wow fadeInRight">
            <div>
                {!! $page->map()->value() !!}
            </div>
        </div>
        <div class="text-right space-y-6 wow fadeInLeft">
            <h2 class="text-2xl uppercase text-flag font-bold">Contáctanos</h2>
            <div class="space-y-3">
                <p class="text-flag"><i class="lni lni-map-marker"></i></p>
                <x-text.base>Calle {{ $item->calle() }} {{ $item->numero() }}</x-text.base>
                <x-text.base>Col.{{ $item->colonia() }}, C.P. {{ $item->codigo() }}</x-text.base>
                <x-text.base>{{ $item->ciudad() }}, {{ $item->estado() }}</x-text.base>
            </div>
            <div class="space-y-3">
                @if ($item->telefono()->isNotEmpty())
                <p class="text-flag"><i class="lni lni-phone"></i></p>
                <x-text.base>Tel: {{ $site->telefono() }}</x-text.base>
                @endif
                @if ($item->telefono2()->isNotEmpty())
                <x-text.base>Tel: {{ $site->telefono2() }}</x-text.base>
                @endif
                <x-text.base class="hover:text-flag-light transition"><a href="mailto:{{ $site->mail() }}" aria-label="Enviar correo">{{ $site->mail() }}</a></x-text.base>
            </div>
        </div>
    </div>        
    @endforeach
</section>

@endsection
