@extends('master')

@section('title', 'Characters')

@push('style')
<style>
    body {
        font-family: 'Segoe UI', sans-serif; 
    }
</style>
@endpush

@section('content')
    @php
        $works = ['Raga', 'Radyan', 'Manah'];
        $worksString = implode(' | ', $works);
    @endphp
    <h1>{{ $worksString }}</h1>
    <a href="/triads"><<</a>
@endsection