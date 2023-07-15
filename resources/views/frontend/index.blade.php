@extends('frontend.layouts.main')
@section('konten')
<!-- banner -->
<div id="slidey" style="display:none;">
    <ul>
        @foreach($banner as $b)
        <li><img src="{{ $b->poster }}" alt=" ">
            <p class='title'>{{ $b->title }}</p>
            <p class='description'>{{ substr($b->synopsis, 0, 150) }}...</p>
        </li>
        @endforeach
    </ul>
</div>

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="w3_agile_banner_bottom_grid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach($slider as $s)
                <div class="item">
                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                        <a href="/drakor/{{$b->id}}" class="hvr-shutter-out-horizontal"><img src="{{ $s->poster }}" title="album-name"  class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/drakor/{{$b->id}}">{{$b->title}}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>{{date('Y', strtotime($b->date))}}</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        @if ($s->rating >= 1)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 2)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 3)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 4)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 4.5)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @elseif ($s->rating >= 4)
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif
                                    </ul>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- general -->
<div class="general">
    <h4 class="latest-text w3_latest_text">Featured Drakor</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Featured</a></li>
                <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
                <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach($featured as $f)
                        <div class="col-md-2 col-sm-3 w3l-movie-gride-agile">
                            <a href="/drakor/{{$f->id}}" class="hvr-shutter-out-horizontal"><img src="{{ $f->poster }}" title="album-name"  class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/drakor/{{$b->id}}">{{$f->title}}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            @if ($s->rating >= 1)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 2)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 3)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 4)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 4.5)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @elseif ($s->rating >= 4)
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                    @foreach($toprating as $f)
                    <div class="col-md-2 col-sm-3 w3l-movie-gride-agile">
                        <a href="/drakor/{{$f->id}}" class="hvr-shutter-out-horizontal"><img src="{{ $f->poster }}" title="album-name"  class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/drakor/{{$b->id}}">{{$f->title}}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        @if ($s->rating >= 1)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 2)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 3)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 4)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 4.5)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @elseif ($s->rating >= 4)
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                    @foreach($recently as $f)
                    <div class="col-md-2 col-sm-3 w3l-movie-gride-agile">
                        <a href="/drakor/{{$f->id}}" class="hvr-shutter-out-horizontal"><img src="{{ $f->poster }}" title="album-name"  class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/drakor/{{$b->id}}">{{$f->title}}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        @if ($s->rating >= 1)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 2)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 3)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 4)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif

                                        @if ($s->rating >= 4.5)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        @elseif ($s->rating >= 4)
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        @else
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //general -->
<!-- general -->
<div class="general">
    <h4 class="latest-text w3_latest_text">Populer Drakor</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach($populer as $f)
                        <div class="col-md-2 col-sm-3 w3l-movie-gride-agile">
                            <a href="/drakor/{{$f->id}}" class="hvr-shutter-out-horizontal"><img src="{{ $f->poster }}" title="album-name"  class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/drakor/{{$b->id}}">{{$f->title}}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            @if ($s->rating >= 1)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 2)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 3)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 4)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif

                                            @if ($s->rating >= 4.5)
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            @elseif ($s->rating >= 4)
                                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            @else
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //general -->
<!--//pop-up-box -->
<div id="small-dialog" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
</div>
<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/148284736"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<!-- //Latest-tv-series -->
@endsection