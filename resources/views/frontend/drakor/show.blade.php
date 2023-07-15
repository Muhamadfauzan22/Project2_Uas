@extends('frontend.layouts.main')
@section('konten')

<!-- single -->
<div class="single-page-agile-main">
    <div class="container">
        <!-- /w3l-medile-movies-grids -->
        <div class="agileits-single-top">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/drakor">Drakor</a></li>
                <li class="active">{{$drakor->title}}</li>
            </ol>
        </div>
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="show-top-grids-w3lagile">
                <div class="col-sm-8 single-left">

                    <div class="card">
                        <div class="card-body">

                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <img src="{{$drakor->poster}}" alt="" class="img-responsive img-thumbnail" style="height:400px;" />
                                </div>
                                <div class="col-md-8 single-right-grid-right mr-3">
                                    <h3>{{$drakor->title}} ({{ date('Y', strtotime($drakor->release_date)) }})</h3>
                                    <ul class="w3l-ratings">
                                        <li>{{$drakor->rating}}</li>
                                        @php
                                        $full_stars = floor($drakor->rating);
                                        $half_star = ($drakor->rating - $full_stars) >= 0.5;
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
                                    <h5>Synopsis</h5>
                                    <p>{{$drakor->synopsis}}</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="song-grid-right">
                        <div class="share">
                            <h5>Share this</h5>
                            <div class="single-agile-shar-buttons">
                                <ul>
                                    <li>
                                        <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                        <script>
                                            (function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>
                                    </li>
                                    <li>
                                        <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                            <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a>
                                        </div>
                                    </li>
                                    <li class="news-twitter">
                                        <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a>
                                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to
                                            @w3layouts</a>
                                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div class="g-plusone" data-size="medium"></div>

                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                            (function() {
                                                var po = document.createElement('script');
                                                po.type = 'text/javascript';
                                                po.async = true;
                                                po.src = 'https://apis.google.com/js/platform.js';
                                                var s = document.getElementsByTagName('script')[0];
                                                s.parentNode.insertBefore(po, s);
                                            })();
                                        </script>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                    <div class="all-comments">
                        <div class="all-comments-info">
                            <a href="#">Reviews</a>
                            <div class="agile-info-wthree-box">
                                @if(Auth::check() && Auth::user()->role == 'user')
                                <form action="/drakor" method="post">
                                    @csrf
                                    <input type="number" placeholder="Rating" class="form-control" name="rating" min="1" max="5" required>
                                    <input type="hidden" class="form-control" name="users_id" value="1" required>
                                    <input type="hidden" class="form-control" name="movies_id" value="{{$drakor->id}}" required>
                                    <input type="hidden" class="form-control" name="date" value="{{date('Y-m-d')}}" required>
                                    <textarea placeholder="Review" style="width: 100%;" class="form-control" name="description" required></textarea>
                                    <input type="submit" value="SEND">
                                    <div class="clearfix"> </div>
                                </form>
                                @endif
                            </div>

                        </div>
                        <div class="media-grids">
                            @if ($drakor->rating != NULL)
                            @foreach ($drakor->reviews as $reviews)
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="{{asset('landingpage/images/user.jpg')}}" title="One movies" alt=" " />
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>{{$reviews->users->name}}</p>
                                    <span>{{$reviews->description}}</span>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4 single-right">
                    <h3>Top Movies</h3>
                    <div class="single-grid-right">
                        @foreach($toprating as $dr)
                        <div class="single-right-grids">
                            <div class="col-md-4 single-right-grid-left">
                                <a href="/drakor/{{$dr->id}}"><img src="{{$dr->poster}}" alt="" style="height: 80px;" /></a>
                            </div>
                            <div class="col-md-8 single-right-grid-right">
                                <a href="/drakor/{{$dr->id}}" class="title"> {{$dr->title}}</a>
                                <ul class="w3l-ratings">
                                    @php
                                    $full_stars = floor($dr->rating);
                                    $half_star = ($dr->rating - $full_stars) >= 0.5;
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
                                <p class="views">{{$dr->rating}} rating</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach
                    </div>
                </div>



                <div class="clearfix"> </div>
            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->
            <div class="w3_agile_banner_bottom_grid">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    @foreach($toprating as $dr)
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="/drakor/{{$dr->id}}" class="hvr-shutter-out-horizontal"><img src="{{$dr->poster}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/drakor/{{$dr->id}}">{{$dr->title}}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            @php
                                            $full_stars = floor($dr->rating);
                                            $half_star = ($dr->rating - $full_stars) >= 0.5;
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
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--body wrapper end-->


        </div>
        <!-- //w3l-latest-movies-grids -->
    </div>
</div>
<!-- //w3l-medile-movies-grids -->

@endsection