
<body>
@extends('app.layout.layouts')
@section('content')
    <section class="news">
        <div class="container">
            @foreach($allnewsofeachcategory as $news)
            <div class="news-main-title">
                <h2>{{$news->title}}</h2>
                <div class="basic-info">
                    <span>Автор публикации</span>
                    <span><img src="./img/icon/time.svg" alt="">  в 17:53</span>
                    <span><img src="./img/icon/eye.svg" alt="">  126</span>
                </div>
                <div class="news-photo">
                    <img src="{{url('storage',$news->image)}}" alt="">
                </div>
                <div class="news-photo-wrapper">
                    <div class="col-md-8 col-md-push-1 news-text">
                       {{$news->content}}
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
            @endforeach
        </div>
    </section>
@endsection
</body>

