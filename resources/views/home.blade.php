@extends('layouts.app')

@section('content')
<div id="homepageSlides" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#homepageSlides" data-slide-to="0" class="active"></li>
        <li data-target="#homepageSlides" data-slide-to="1"></li>
        <li data-target="#homepageSlides" data-slide-to="2"></li>
        <li data-target="#homepageSlides" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/sliders/homepage/chase-flyer.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block orange rad-5">
                “When you see someone putting on his Big Boots, you can be pretty sure that an Adventure is going to happen.”<div class="carousel-caption-author">- A. A. Milne</div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/homepage/luna-couple-field.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block blue rad-5">
                “Life is either a daring adventure or nothing.”<div class="carousel-caption-author">- Helen Keller</div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/homepage/chase-flyer-sunrise.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block orange rad-5">
                “Twenty years from now you will be more disappointed by the things you didn’t do than by the ones you did do.”<div class="carousel-caption-author">- Mark Twain</div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/homepage/luna-friends-desert.jpg') }}" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block blue rad-5">
                “Two roads diverged in a wood, and I – I took the one less traveled by.”<div class="carousel-caption-author">- Robert Frost</div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#homepageSlides" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homepageSlides" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flyer">
                    <div align="center" class="title col-md-12">
                        <object height="100" data="{{ asset('img/logos/flyer.svg') }}"></object>
                    </div>
                    <div class="row">
                        <div class="chase col-md-4 px-0" align="center">
                            <a href="/flyer/chase">
                                <img class="w-100" src="{{ asset('img/models/chase/chase.png') }}" alt="Chase">
                                Chase
                            </a>
                        </div>
                        <div class="pursue col-md-4 px-0" align="center">
                            <a href="/flyer/pursue">
                                <img class="w-100" src="{{ asset('img/models/pursue/pursue.png') }}" alt="Pursue">
                                Pursue
                            </a>
                        </div>
                        <div class="explore col-md-4 px-0" align="center">
                            <a href="/flyer/explore">
                                <img class="w-100" src="{{ asset('img/models/explore/explore.png') }}" alt="Explore">
                                Explore
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="luna">
                    <div align="center" class="title col-md-12">
                        <object height="100" data="{{ asset('img/logos/luna.svg') }}"></object>
                    </div>
                    <div class="row">
                        <div class="lite col-md-4 px-0" align="center">
                            <a href="/luna/luna-lite">
                                <img class="w-100" src="{{ asset('img/models/luna-lite/luna-lite.png') }}" alt="Luna Lite">
                                Luna Lite
                            </a>
                        </div>
                        <div class="rover col-md-4 px-0" align="center">
                            <a href="/luna/luna-rover">
                                <img class="w-100" src="{{ asset('img/models/luna-rover/luna-rover.png') }}" alt="Luna Rover">
                                <span class="badge badge-info">New</span> Luna Rover
                            </a>
                        </div>
                        <div class="luna col-md-4 px-0" align="center">
                            <a href="/luna/luna">
                                <img class="w-100" src="{{ asset('img/models/luna/luna.png') }}" alt="Luna">
                                Luna
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <img class="d-block w-100 mb-3" src="{{ asset('img/award-winning.jpg') }}" alt="Award Winning">
                <img class="d-block w-100" src="{{ asset('img/simple-versatile.png') }}" alt="Simple & Versatile">
            </div>
            <div class="col-md-8 mt-1">
                <img class="d-block w-100" src="{{ asset('img/intech-strong.jpg') }}" alt="inTech Strong">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img class="d-block w-100" src="{{ asset('img/hof.jpg') }}" alt="Hall of Fame">
            </div>
        </div>
    </div>
</main>
@endsection
