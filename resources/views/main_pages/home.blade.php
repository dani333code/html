@extends('layouts.main')


@section('content')

@include('sections.header')

@include('sections.hero')

<main id="main">

@include('sections.about')

@include('sections.services')

@include('sections.contact')

@include('sections.counts')

@include('sections.whyus')

@include('sections.footer')

</main><!-- End #main -->

@endsection