<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer-logo">
                <img src="public/img/logo.png" alt="">
                <a href="#">Уақыт.kz</a>
            </div>
            <ul class="footer-nav">
                <li>
                    <a href="#"><img src="public/img/icon/Group.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="public/img/icon/Group-1.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="public/img/icon/Group-2.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="public/img/icon/Group-3.svg" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="footer-down">
            <ul class="footer-menu">
                @foreach($allcategories as $cat)
                <li>
                    <a href="{{route('categories_all',$cat->id)}}" >{{$cat->name}}</a>
                </li>
                @endforeach
                <li>
                    <a href="{{route('contacts')}}">Контакты</a>
                </li>
            </ul>
            <div class="privacy">
                <a href="{{route('rules')}}">Правила пользования сайтом </a>
            </div>
        </div>
    </div>
</footer>

