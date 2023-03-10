
@extends('app.layout.layouts')
@section('content')
    <section class="position">
        <div class="container">
            <ul class="news-path">
                <li>
                    <a href="">Главная / </a>
                </li>
                <li>
                    <a href="#" class="active">Правила пользования сайтом</a>
                </li>
            </ul>
            <div class="news-main-title">
                <h2>Правила пользования сайтом </h2>
            </div>
            <div class="mini-title">
                <h4>Правила пользования сайтом Уақыт.kz</h4>
            </div>
            <div class="rules">
                <div class="rules-title">
                    <h4>1.Общие положения</h4>
                </div>
                <div class="rules-text">
                    <p>{{$rules->content}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
