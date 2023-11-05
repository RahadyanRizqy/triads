@extends('master')

@section('title', 'Works')

@push('name')
<style>
    body {
        font-family: 'Segoe UI', sans-serif
    }
</style>
@endpush

@section('content')
    @php
        $works = ['Katastrophe', 'Mayadin', 'Cynautic'];
        $worksString = implode(' | ', $works);
    @endphp
    <h1>{{ $worksString }}</h1>
    <a href="/triads"><<</a>
@endsection