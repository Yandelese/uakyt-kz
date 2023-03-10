
<body>
@extends('app.layout.layouts')
@section('content')
    <section class="news">
        <div class="container">
            <div class="news-main-title">
                <h2>{{$certainnews->title}}</h2>
                <div class="basic-info">
                    <span>Автор публикации</span>
                    <span><img src="./img/icon/time.svg" alt="">  в 17:53</span>
                    <span><img src="./img/icon/eye.svg" alt="">  126</span>
                </div>
                <div class="news-photo">
                    <img src="{{url('storage',$certainnews->image)}}" alt="">
                </div>
                <div class="news-photo-wrapper">
                    <div class="col-md-8 col-md-push-1 news-text">
                       {{$certainnews->content}}
                        <div class="link-social">
                            <a href="">
                                <img src="./img/icon/tt.png" alt="">
                            </a>
                            <a href="">
                                <img src="./img/icon/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="./img/icon/tg.png" alt="">
                            </a>
                            <a href="">
                                <img src="./img/icon/vk.png" alt="">
                            </a>
                            <a href="">
                                <img src="./img/icon/wa.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="title extra-title">
                <h4>Рекомендуемые</h4>
            </div>
            <div class="inner-extra-news">
                @foreach($recommendednews as $rec_news)
                <div class="extra-news-item">
                    <img src="{{url('storage',$rec_news->image)}}" alt="">
                    <div href="#" class="extra-news-info">
                        @foreach($rec_news->get_categories as $category)
                            <a href="{{route('categories_all',$category->id)}}" class="info-text-category">
                                {{ $category->name }}
                            </a>
                        @endforeach
                        <h3><a href="{{route('each_news',$rec_news->id)}}">{{$rec_news->title}}</a></h3>
                        <span><img src="./img/icon/time.svg" alt="">{{$rec_news->date_of_creation}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
</body>

