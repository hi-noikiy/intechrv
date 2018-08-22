@extends('layouts.app')

@section('content')
<div id="lunaRoverSlides" class="carousel" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/sliders/luna/luna-rover/luna-rover-00.jpg') }}" alt="First slide">
        </div>
    </div>
</div>
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1 class="luna-title">Luna Rover</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Weight Range: 1643-1770 lbs
            </div>
            <div class="col-md-6 luna-title" align="left">
                Transporting Luna Rover
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Tongue Weight Range: 180-200 lbs
            </div>
            <div class="col-md-6" align="left">
                <img src="{{ asset('img/transporting/luna-rover.png') }}" srcset="{{ asset('img/transporting/luna-rover.png') }} 1x, {{ asset('img/transporting/luna-rover@2x.png') }} 2x" alt="Transporting Luna Rover - Car, Small SUV, Large SUV, Truck" width="300" height="32" />
            </div>
        </div>
    </div>
</main>
@endsection
