@extends('layouts.app')

@section('content')
<div id="lunaLunaSlides" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#lunaLunaSlides" data-slide-to="0" class="active"></li>
        <li data-target="#lunaLunaSlides" data-slide-to="1"></li>
        <li data-target="#lunaLunaSlides" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/sliders/luna/luna/luna-00.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/luna/luna/luna-01.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/luna/luna/luna-02.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#lunaLunaSlides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#lunaLunaSlides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1 class="luna-title">Luna</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Weight Range: 1700-1800 lbs
            </div>
            <div class="col-md-6 luna-title" align="left">
                Transporting Luna
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Tongue Weight Range: 180-200 lbs
            </div>
            <div class="col-md-6" align="left">
                <img src="{{ asset('img/transporting/luna-lite.png') }}" srcset="{{ asset('img/transporting/luna-lite.png') }} 1x, {{ asset('img/transporting/luna-lite@2x.png') }} 2x" alt="Transporting Luna - Car, Small SUV, Large SUV, Truck" width="300" height="32" />
            </div>
        </div>
    </div>
</main>
@endsection
