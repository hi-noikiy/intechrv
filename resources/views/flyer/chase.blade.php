@extends('layouts.app')

@section('content')
<div id="chaseHeaderSlide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#chaseHeaderSlide" data-slide-to="0" class="active"></li>
        <li data-target="#chaseHeaderSlide" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/sliders/flyer/chase/chase-00.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/sliders/flyer/chase/chase-01.jpg') }}" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#chaseHeaderSlide" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#chaseHeaderSlide" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<main class="py-4">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1 class="flyer-title">Chase Flyer</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Weight Range: 850-1200 lbs
            </div>
            <div class="col-md-6 flyer-title" align="left">
                Transporting Chase
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" align="right">
                Tongue Weight Range: 180-200 lbs
            </div>
            <div class="col-md-6" align="left">
                <img src="{{ asset('img/transporting/chase.png') }}" srcset="{{ asset('img/transporting/chase.png') }} 1x, {{ asset('img/transporting/chase@2x.png') }} 2x" alt="Transporting Chase - Car, Small SUV, Large SUV, Truck" width="300" height="32" />
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1>The Features</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 features">
                <div class="row">
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/interior-height.svg') }}" class="svg-chase"></object>
                        <p>Interior Height</p>
                        <p class="content">3'9"</p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/interior-length.svg') }}" class="svg-chase"></object>
                        <p>Interior Length</p>
                        <p class="content">7'5"</p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/interior-width.svg') }}" class="svg-chase"></object>
                        <p>Interior Width</p>
                        <p class="content">4'11"</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/lightweight.svg') }}" class="svg-chase"></object>
                        <p>Lightweight</p>
                        <p class="content">850 - 1200 lbs</p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/tongue-weight.svg') }}" class="svg-chase"></object>
                        <p>Tongue Weight</p>
                        <p class="content">180 - 210 lbs</p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/overall-length.svg') }}" class="svg-chase"></object>
                        <p>Overall Length</p>
                        <p class="content">12'4"</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/gvwr.svg') }}" class="svg-chase"></object>
                        <p>GVWR</p>
                        <p class="content">2200 lbs</p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/power.svg') }}" class="svg-chase"></object>
                        <p>Power</p>
                        <p class="content">30 Amps</p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <object data="{{ asset('img/svg/features/solar.svg') }}" class="svg-chase"></object>
                        <p>Off Grid</p>
                        <p class="content">Solar Prep</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe id="vid_frame" src="http://www.youtube.com/embed/51cI_URR4yY?rel=0&showinfo=0&autohide=1" width="720" height="405" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1>The Colors</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 colors">
                <div class="row">
                    <div id="myTabContent" class="tab-content">
                        <!-------------------------------- ARCTIC WHITE -------------------------------->
                        <div class="tab-pane fade show active" id="white" role="tabpanel" aria-labelledby="white-tab">
                            <div id="articWhiteSlide" class="carousel slide" data-ride="carousel" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#articWhiteSlide" data-slide-to="0" class="active"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="1"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="2"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="3"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="4"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="5"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="6"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="7"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="8"></li>
                                    <li data-target="#articWhiteSlide" data-slide-to="9"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide1.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide2.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide3.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide4.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide5.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide6.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide7.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide8.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide9.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/arctic-white/slide10.jpg') }}" class="w-100">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#articWhiteSlide" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                <a class="carousel-control-next" href="#articWhiteSlide" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            </div>
                        </div>

                        <!-------------------------------- MIDNIGHT BLACK -------------------------------->
                        <div class="tab-pane fade" id="black" role="tabpanel" aria-labelledby="black-tab">
                            <div id="midnightBlackSlide" class="carousel slide" data-ride="carousel" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#midnightBlackSlide" data-slide-to="0" class="active"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="1"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="2"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="3"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="4"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="5"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="6"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="7"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="8"></li>
                                    <li data-target="#midnightBlackSlide" data-slide-to="9"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide1.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide2.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide3.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide4.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide5.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide6.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide7.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide8.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide9.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/midnight-black/slide10.jpg') }}" class="w-100">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#midnightBlackSlide" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                <a class="carousel-control-next" href="#midnightBlackSlide" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            </div>
                        </div>

                        <!-------------------------------- RED BLAZE -------------------------------->
                        <div class="tab-pane fade" id="red" role="tabpanel" aria-labelledby="red-tab">
                            <div id="redBlazeSlide" class="carousel slide" data-ride="carousel" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#redBlazeSlide" data-slide-to="0" class="active"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="1"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="2"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="3"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="4"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="5"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="6"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="7"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="8"></li>
                                    <li data-target="#redBlazeSlide" data-slide-to="9"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide1.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide2.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide3.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide4.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide5.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide6.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide7.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide8.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide9.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/red-blaze/slide10.jpg') }}" class="w-100">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#redBlazeSlide" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                <a class="carousel-control-next" href="#redBlazeSlide" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            </div>
                        </div>

                        <!-------------------------------- CHARCOAL STORM -------------------------------->
                        <div class="tab-pane fade" id="charcoal" role="tabpanel" aria-labelledby="charcoal-tab">
                            <div id="charcoalStormSlide" class="carousel slide" data-ride="carousel" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#charcoalStormSlide" data-slide-to="0" class="active"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="1"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="2"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="3"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="4"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="5"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="6"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="7"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="8"></li>
                                    <li data-target="#charcoalStormSlide" data-slide-to="9"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide1.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide2.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide3.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide4.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide5.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide6.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide7.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide8.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide9.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm/slide10.jpg') }}" class="w-100">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#charcoalStormSlide" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                <a class="carousel-control-next" href="#charcoalStormSlide" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            </div>
                        </div>

                        <!-------------------------------- SILVER MOON -------------------------------->
                        <div class="tab-pane fade" id="silver" role="tabpanel" aria-labelledby="silver-tab">
                            <div id="sliverMoonSlide" class="carousel slide" data-ride="carousel" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#sliverMoonSlide" data-slide-to="0" class="active"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="1"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="2"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="3"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="4"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="5"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="6"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="7"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="8"></li>
                                    <li data-target="#sliverMoonSlide" data-slide-to="9"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide1.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide2.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide3.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide4.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide5.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide6.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide7.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide8.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide9.jpg') }}" class="w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/models/chase/colors/exterior/silver-moon/slide10.jpg') }}" class="w-100">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#sliverMoonSlide" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                <a class="carousel-control-next" href="#sliverMoonSlide" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <h2>Interior</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" align="center">
                        <a href="{{ asset('img/models/chase/colors/interior/maple-original.jpg') }}" target="_blank">
                            <img src="{{ asset('img/models/chase/colors/interior/maple-original.jpg') }}" class="w-100" />
                            <div class="model-color-title">Maple</div>
                        </a>
                    </div>
                    <div class="col-md-4" align="center">
                        <a href="{{ asset('img/models/chase/colors/interior/cherry-original.jpg') }}" target="_blank">
                            <img src="{{ asset('img/models/chase/colors/interior/cherry-original.jpg') }}" class="w-100" />
                            <div class="model-color-title">Cherry</div>
                        </a>
                    </div>
                    <div class="col-md-4" align="center">
                        <a href="{{ asset('img/models/chase/colors/interior/gray-original.jpg') }}" target="_blank">
                            <img src="{{ asset('img/models/chase/colors/interior/gray-original.jpg') }}" class="w-100" />
                            <div class="model-color-title">Sports Gray</div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" align="center">
                        <h2>Exterior</h2>
                    </div>
                </div>
                <div class="row">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item col-md-4 px-0" align="center">
                            <a class="nav-link active" id="white-tab" data-toggle="tab" href="#white" role="tab" aria-controls="white" aria-selected="true">
                                <img src="{{ asset('img/models/chase/colors/exterior/arctic-white.png') }}" class="w-100" />
                                <div class="model-color-title">Arctic White</div>
                            </a>
                        </li>
                        <li class="nav-item col-md-4 px-0" align="center">
                            <a class="nav-link" id="black-tab" data-toggle="tab" href="#black" role="tab" aria-controls="black" aria-selected="false">
                                <img src="{{ asset('img/models/chase/colors/exterior/midnight-black.png') }}" class="w-100" />
                                <div class="model-color-title">Midnight Black</div>
                            </a>
                        </li>
                        <li class="nav-item col-md-4 px-0" align="center">
                            <a class="nav-link" id="red-tab" data-toggle="tab" href="#red" role="tab" aria-controls="red" aria-selected="false">
                                <img src="{{ asset('img/models/chase/colors/exterior/red-blaze.png') }}" class="w-100" />
                                <div class="model-color-title">Red Blaze</div>
                            </a>
                        </li>
                        <li class="nav-item col-md-4 px-0" align="center">
                            <a class="nav-link" id="charcoal-tab" data-toggle="tab" href="#charcoal" role="tab" aria-controls="charcoal" aria-selected="false">
                                <img src="{{ asset('img/models/chase/colors/exterior/charcoal-storm.png') }}" class="w-100" />
                                <div class="model-color-title">Charcoal Storm</div>
                            </a>
                        </li>
                        <li class="nav-item col-md-4 px-0" align="center">
                            <a class="nav-link" id="silver-tab" data-toggle="tab" href="#silver" role="tab" aria-controls="silver" aria-selected="false">
                                <img src="{{ asset('img/models/chase/colors/exterior/silver-moon.png') }}" class="w-100" />
                                <div class="model-color-title">Silver Moon</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
