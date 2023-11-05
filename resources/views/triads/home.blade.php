@extends('master')

@section('title', '@rdn_rzq')

@push('style')
<style>
    body {
        font-family: 'Segoe UI', sans-serif; 
    }
    /* .text-center {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    } */

    /* .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 50vh;
    } */

    .flex-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding-left: 100px;
        padding-right: 100px;
    }

    .big {
        font-size: 50px;
    }

    .medium {
        font-size: 25px;
    }

    @media (max-width: 600px) {
        .big {
            font-size: 35px;
        }

        .medium {
            font-size: 15px;
        }

        .flex-container {
            /* margin-top: 25px; */
            padding-left: 25px;
            padding-right: 25px;
            height: 25vh;
        }
    }

    a {
        color: #03a9f4;
    }
</style>
@endpush

@section('content')
<div class="flex-container">
    @php
        $res_en = '<p class="medium" align="justify"><i>"Thinking begets thought, thought begets further thinking. The same applied to overthinking and overthought. Yet, my thoughts are scattered, it\'s time to compile them." -Triads. </i><a href="/triads">>></a></p>';
        $res_id = '<p class="medium" align="justify"><i>"Berpikir menghasilkan pemikiran, pemikiran mendorong \'tuk berpikir lebih dalam. Sama halnya dengan berpikir berlebihan dan pemikiran berlebihan. Namun, pemikiranku tercerai-berai, maka inilah saatnya \'tuk menyatukannya." -Triads. </i><a href="/triads">>></a></p>';
    @endphp
    <div>
        <div class="en-prologue">
            {!! $res_en !!}
        </div>
        <div class="id-prologue d-none">
            {!! $res_id !!}
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" id="id-btn">ID</button>
            <button class="btn btn-danger d-none" id="en-btn">EN</button>
        </div>
    </div>
    <p class="text-center medium">owner: <a class="text-decoration-none" href="https://instagram.com/rdn_rzq">@rdn_rzq</a></p>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '#id-btn', function () {
            $('#id-btn').addClass('d-none');
            $('#en-btn').removeClass('d-none');
            $('.en-prologue').addClass('d-none');
            $('.id-prologue').removeClass('d-none')
        });

        $(document).on('click', '#en-btn', function () {
            $('#en-btn').addClass('d-none');
            $('#id-btn').removeClass('d-none');
            $('.en-prologue').removeClass('d-none')
            $('.id-prologue').addClass('d-none');
        });
    });
</script>
@endpush
