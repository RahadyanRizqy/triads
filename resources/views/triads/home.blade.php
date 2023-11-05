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

    .language-switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.language-switch input {
    display: none;
}

.language-switch label {
    background-color: #ccc;
    border-radius: 34px;
    display: block;
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    transition: 0.4s;
    width: 60px;
    height: 34px;
}

.language-switch label:after {
    content: "";
    border-radius: 50%;
    background-color: #fff;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    transition: 0.4s;
    width: 26px;
    height: 26px;
}

.language-switch input:checked + label {
    background-color: #2196F3;
}

.language-switch input:checked + label:after {
    left: calc(100% - 26px);
    transform: translate(-50%, -50%);
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
        <div class="d-flex justify-content-center flex-row">
            <div class="button">
                <button class="btn btn-primary mx-1 opacity-50" id="id-btn">ID</button>
            </div>
            <div class="button">
                <button class="btn btn-danger mx-1" id="en-btn">EN</button>
            </div>
        </div>
    </div>
    <p class="text-center medium">owner: <a class="text-decoration-none" href="https://instagram.com/rdn_rzq">@rdn_rzq</a></p>
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
