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
                                <li><a href="/countries">Countries</a></li>
                                <li class="active">{{$country->name}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="tittle-head">
                    <h4 class="latest-text">All Movies {{$country->name}}</h4>
                </div>
                <div class="container">
                    <!-- /latest-movies1 -->

                    <div class="browse-inner-come-agile-w3">
                        @foreach ($movies as $movie)
                        <div class="col-md-2 w3l-movie-gride-agile">
                            <a href="/drakor/{{$movie->id}}" class="hvr-shutter-out-horizontal"><img src="{{$movie->poster}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>

                            <div class="mid-1">
                                <div class="w3l-movie-text">
                                    <h6><a href="/drakor/{{$movie->id}}">{{$movie->title}}</a></h6>
                                </div>
                                <div class="mid-2">

                                    <p>{{ date('Y', strtotime($movie->release_date)) }}</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            @php
                                            $full_stars = floor($movie->rating);
                                            $half_star = ($movie->rating - $full_stars) >= 0.5;
                                            $empty_stars = 5 - $full_stars - ($half_star ? 1 : 0);
                                            @endphp

                                            @for ($i = 0; $i < $full_stars; $i++) <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                @endfor

                                                @if ($half_star)
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                @endif

                                                @for ($i = 0; $i < $empty_stars; $i++) <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    @endfor
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
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