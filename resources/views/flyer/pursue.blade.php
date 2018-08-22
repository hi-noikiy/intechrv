@extends('layouts.app')

@section('content')
<div id="pursueSlides" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#pursueSlides" data-slide-to="0" class="active"></li>
        <li data-target="#pursueSlides" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/sliders/flyer/pursue/pursue-00.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/flyer/pursue/pursue-01.jpg') }}" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#pursueSlides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#pursueSlides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1 class="flyer-title">Pursue Flyer</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Weight Range: 1000-1550 lbs
            </div>
            <div class="col-md-6 flyer-title" align="left">
                Transporting Pursue
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Tongue Weight Range: 250-350 lbs
            </div>
            <div class="col-md-6" align="left">
                <img src="{{ asset('img/transporting/pursue.png') }}" srcset="{{ asset('img/transporting/pursue.png') }} 1x, {{ asset('img/transporting/pursue@2x.png') }} 2x" alt="Transporting Pursue - Car, Small SUV, Large SUV, Truck" width="300" height="32" />
            </div>
        </div>
    </div>
</main>
@endsection
