
<body>
@extends('app.layout.layouts')
@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row main-wrapper">
                <div class="col-md-8 main-wrapper-one">
                    <div class="first-row row">
                        <div class="col-md-12 one-wrapper">
                            <div class="main__swiper">
                                <div class="swiper mainSwiper">

                                    <div class="swiper-wrapper">
                                        @foreach($slidernews as $sl_news)
                                        <div class="swiper-slide">
                                            <div class="carousel">
                                                <div class="inner-carousel">
                                                    <img src="{{url('storage',$sl_news->image)}}" alt="">

                                                    <div  class="news-info">
                                                        <p> @foreach($sl_news->get_categories as $category)
                                                                {{ $category->name }}
                                                            @endforeach
                                                        </p>
                                                        <h4>{{$sl_news->title}}</h4>
                                                        <span>{{$sl_news->date_of_creation}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="mainSwiper-control">
                                        <div class="swiper-button-next-1">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="30" height="30" rx="6" fill="white"/>
                                                <path d="M18 9L12 15L18 21" stroke="#555555" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-prev-1">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="30" height="30" rx="6" fill="white"/>
                                                <path d="M12 9L18 15L12 21" stroke="#555555" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="second-row row">
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 col-xs-12 sidebar-inner">
                            <div class="aqparat">
                                <h4 class="aqparat-title">
                                    Главные новости
                                </h4>
                                <div class="aqparat-info">
                                    @foreach($mainnews as $mn_news)
                                    <div class="aqparat-info-block">
                                        @foreach($mn_news->get_categories as $category)
                                        <div  class="aqparat-info-text">
                                            <a href="{{route('categories_all',$category->id)}}" class="info-text-category">
                                                    {{ $category->name }}
                                            </a>
                                              <h3><a href="{{route('each_news',$mn_news->id)}}">{{$mn_news->title}}</a></h3>
                                            <span><img src="./img/icon/time.svg" alt="">{{$mn_news->date_of_creation}}</span>
                                        </div>
                                        @endforeach
                                        <div class="aqparat-info-img">
                                            <img style="width: 200px" src="{{url('storage',$mn_news->image)}}" alt="">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-banner">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrapper-banner">
                                <a href="#" class="inner-banner">
                                    <img src="./img/рек баннер.png" alt="banner">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="secondary-content">
        <div class="container">
            <div class="secondary-content-title">
                <p>Все новости</p>
            </div>
            <div class="secondary-wrapper">
                <div class="secondary-block">
                    <div class="first-row row">
                        <div class="col-md-12 secondary-wrapper">
                            <div class="all-news">
                                @foreach($main as $news)
                                    @if($news->first())
                                    <div class="all-big-news">
                                        <img src="{{url('storage',$news->first()->image)}}" alt="">

                                        <div  class="big-news-info">
                                            @foreach($news->first()->get_categories as $category)
                                            <a href="{{route('categories_all',$category->id)}}">
                                                    {{$category->name }}
                                            </a>
                                            @endforeach
                                            <h4><a href="{{route('each_news',$news->first()->id)}}">{{$news->first()->title}}</a></h4>
                                            <span>{{$news->first()->date_of_creation}}</span>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="all-extra-news">
                                        @foreach($news->skip(1) as $extra)
                                            <div class="extra-news-item">
                                                <img src="{{url('storage', $extra->image)}}" alt="">
                                                <div  class="extra-news-info">
                                                    @foreach($extra->get_categories as $category)
                                                    <a href="{{route('categories_all',$category->id)}}" class="info-text-category" href="#">
                                                            {{$category->name }}
                                                     </a>
                                                    @endforeach
                                                    <h3><a href="{{route('each_news',$extra->id)}}">{{$extra->title}}</a></h3>
                                                    <span><img src="./img/icon/time.svg" alt="">{{$extra->date_of_creation}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="secondary-block">
                    <div class="right-news">
                        @foreach($allnews as $news)
                        <div class="right-news-item">
                            <img src="{{url('storage',$news->image)}}" alt="">
                            <div class="right-news-info">
                                @foreach($news->get_categories as $category)
                                <a href="{{route('categories_all',$category->id)}}" class="info-text-category">
                                        {{ $category->name }}
                                </a>
                                @endforeach
                                <h3><a href="{{route('each_news',$news->id)}}">{{$news->title}}</a></h3>
                                <span><img src="./img/icon/time.svg" alt="">{{$news->date_of_creation}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
{{--<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>--}}
{{--<script src="/assets/js/main.js"></script>--}}
</body>

