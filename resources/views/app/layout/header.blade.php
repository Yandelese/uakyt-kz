<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/media.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<header>
    <div class="container">
        <div class="header-up">
            <div class="header-data">
                <p>Пн, 16 февряля, 2023</p>
            </div>
            <a href="index.html" class="header-logo">
                <img src="./img/logo.png" alt="">
            </a>
            <div class="header-search">
                <button type="button"><img src="/img/icon/search.svg" alt=""></button>
                <div class="header-lang">
                    <p>Рус</p>
                </div>
            </div>
        </div>
        <div class="header-down">
            <div class="header__swiper">
                <div class="swiper headerSwiper">
                    <a href="{{route('mainpage')}}">Главные новости</a>
                    <div class="swiper-wrapper">
                        @foreach($allcategories as $cat)
                        <div class="swiper-slide">
                            <ul class="header-nav">
                                <li>
                                    <a href="{{route('categories_all',$cat->id)}}" >{{$cat->name}}</a>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="headerSwiper-control">
                    <div class="swiper-button-next-2">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 1L2 7L8 13" stroke="#B2AEAB" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev-2">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="#222222" stroke-width="1.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
