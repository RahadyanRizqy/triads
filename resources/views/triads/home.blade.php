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
        height: 95vh;
        padding-left: 100px;
        padding-right: 100px;
    }

    .big {
        font-size: 50px;
    }

    .medium {
        font-size: 25px;
    }

    a {
        color: #03a9f4;
    }

    .btn-group {
        position: fixed;
        bottom: 5%;
        z-index: 9999;
        left: 50%;
        transform: translateX(-50%);
    }

    .button button {
        width: 50px;
    }

    .en-prologue, .id-prologue {
        width: 100%;
        min-height: 153px;
    }

    /* @media (max-width: 1021px) {
        .en-prologue, .id-prologue {
            width: 100%;
            height: 190px;
        }
    }

    @media (max-width: 869px) {
        .en-prologue, .id-prologue {
            width: 100%;
            height: 230px;
        }
    }

    @media (max-width: 748px) {
        .en-prologue, .id-prologue {
            width: 100%;
            height: 270px;
        }
    }

    @media (max-width: 681px) {
        .en-prologue, .id-prologue {
            width: 100%;
            height: 310px;
        }
    } */

    @media (max-width: 600px) {
        .big {
            font-size: 35px;
        }

        .medium {
            font-size: 15px;
        }

        .en-prologue, .id-prologue {
            width: 100%;
            min-height: 103px;
        }

        .flex-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 35vh;
            padding-left: 25px;
            padding-right: 25px;
        }
    }

    .to-the-triads a {
        height: 25px;
        width: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }
</style>
<style>
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital@0;1&family=Poppins&display=swap');

    .tty {
        font-family: 'JetBrains Mono', monospace;
        /* font-family: 'Poppins', sans-serif; */
    }

    @media (max-width: 600px) {
        .tty {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
        /* font-family: 'Poppins', sans-serif; */
        }
    }
</style>
@endpush

@section('content')
<div class="flex-container">
    @php
        $res_en = '<p class="text-center medium" align="justify"><i>"Thinking begets thought, thought begets further thinking. The same applied to overthinking and overthought. Yet, my thoughts are scattered, it\'s time to compile them." -Triads. </i></p>';
        $res_id = '<p class="text-center medium" align="justify"><i>"Berpikir menghasilkan pemikiran, pemikiran mendorong \'tuk berpikir lebih dalam. Sama halnya dengan berpikir berlebihan dan pemikiran berlebihan. Namun, pemikiranku tercerai-berai, maka inilah saatnya \'tuk menyatukannya." -Triads. </i></p>';
    @endphp
    <div class="main-container d-flex flex-column">
        <div class="en-prologue">
            {!! $res_en !!}
        </div>
        <div class="id-prologue d-none">
            {!! $res_id !!}
        </div>
        <div class="to-the-triads d-flex justify-content-center">
            <a href="/triads" class="btn btn-dark"> >> </a>
        </div>
        <div class="whoami-container">
            <p class="text-center tty">triads@ub-102-id-jv1-dc-rdnet-id~# <a class="text-decoration-none" href="https://instagram.com/rdn_rzq">whoami</a></p>
        </div>
    </div>
    <div class="btn-group d-flex justify-content-center flex-row">
        <div class="button id-button">
            <button class="btn btn-primary mx-1 id-btn opacity-50" id="id-btn">ID</button>
        </div>
        <div class="button en-button">
            <button class="btn btn-danger mx-1 en-btn" id="en-btn">EN</button>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        let activeButton = localStorage.getItem('activeButton');

        if (activeButton === 'id') {
            $('#id-btn').removeClass('opacity-50');
            $('#en-btn').addClass('opacity-50');
            $('.en-prologue').addClass('d-none');
            $('.id-prologue').removeClass('d-none');
            console.log('indonesian');
        }
        else {
            $('#en-btn').removeClass('opacity-50');
            $('#id-btn').addClass('opacity-50');
            $('.en-prologue').removeClass('d-none');
            $('.id-prologue').addClass('d-none');
            console.log('english');
        }

        $(document).on('click', '#id-btn', function () {
            $('#id-btn').removeClass('opacity-50');
            $('#en-btn').addClass('opacity-50');
            $('.en-prologue').addClass('d-none');
            $('.id-prologue').removeClass('d-none');
            localStorage.setItem('activeButton', 'id');
        });

        $(document).on('click', '#en-btn', function () {
            $('#en-btn').removeClass('opacity-50');
            $('#id-btn').addClass('opacity-50');
            $('.en-prologue').removeClass('d-none');
            $('.id-prologue').addClass('d-none');
            localStorage.setItem('activeButton', 'en');
        });
    });
</script>
@endpush
