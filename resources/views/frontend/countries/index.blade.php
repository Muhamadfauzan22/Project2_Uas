@extends('frontend.layouts.main')
@section('konten')

<div class="w3l-agile-horror">
    <!-- /w3l-medile-movies-grids -->
    <div class="w3l-medile-movies-grids">
        <!-- /movie-browse-agile -->
        <div class="movie-browse-agile">
            <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">

                <!--body wrapper start-->
                <div class="review-slider">

                    <div class="container">
                        <div class="agileits-single-top">
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li class="active">Countries</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="tittle-head">
                    <h4 class="latest-text">All Countries </h4>
                </div>
                <div class="container">
                    <!-- /latest-movies1 -->

                    <div class="browse-inner-come-agile-w3">
                        @foreach ($countries as $country)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="/countries/{{$country->id}}" class="hvr-shutter-out-horizontal"><img src="{{asset('landingpage/images/countries.jpg')}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="/countries/{{$country->id}}">{{$country->name}}</a></h6>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                    <!-- //latest-movies1 -->
                </div>
                <!-- //movie-browse-agile -->
            </div>
            <!-- //w3l-medile-movies-grids -->
        </div>
    </div>
</div>
@endsection