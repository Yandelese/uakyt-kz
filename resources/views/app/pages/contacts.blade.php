
@extends('app.layout.layouts')
@section('content')
    <section class="contacts">
        <div class="container">
            <ul class="news-path">
                <li>
                    <a href="">Главная / </a>
                </li>
                <li>
                    <a href="{{route('contacts')}}" class="active">Контакты</a>
                </li>
            </ul>
            <div class="news-main-title">
                <h2>Контакты</h2>
            </div>
            <div class="contacts">
                <div class="contacts-info-item-text">
                    <p>{{$contacts->content}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
