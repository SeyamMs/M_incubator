@extends('_layouts.main')

@section('body')
    @include('_partials.index.header')
    @include('_partials.index.main')
    @include('_partials.index.moe')
    @include('_partials.index.about')
    @include('_partials.index.goals')
    @include('_partials.index.offerings')
    @include('_partials.index.targets')
    @include('_partials.index.timeline')
    @include('_partials.index.paths')
    @include('_partials.index.faqs')
@endsection
