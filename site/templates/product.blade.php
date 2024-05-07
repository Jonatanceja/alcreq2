@extends('layouts.default')
@section('content')

@include('partials.cover2')

@foreach($page->children()->listed() as $part)
@include('blocks.' . $part->intendedTemplate(), ['page' => $part])
@endforeach


@endsection