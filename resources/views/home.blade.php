@extends('layout.layout')

@section('page_title', 'Za-Pobedy')

@section('content')
    <!-- Menu -->
    <section id="menu">

        <!-- Search -->
        <section>
            <form class="search" method="get" action="#">
                <input type="text" name="query" placeholder="Search"/>
            </form>
        </section>

        <!-- Links -->
        <section>
            <ul class="links">
                <li>
                    <a href="#">
                        <h3>Lorem ipsum</h3>
                        <p>Feugiat tempus veroeros dolor</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Dolor sit amet</h3>
                        <p>Sed vitae justo condimentum</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Feugiat veroeros</h3>
                        <p>Phasellus sed ultricies mi congue</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>Etiam sed consequat</h3>
                        <p>Porta lectus amet ultricies</p>
                    </a>
                </li>
            </ul>
        </section>

        <!-- Actions -->
        <section>
            <ul class="actions stacked">
                <li><a href="#" class="button large fit">Log In</a></li>
            </ul>
        </section>

    </section>

    <!-- Main -->
    <div id="main">
        <div class="banner">
            <div class="arrow_left">
                ‹
            </div>
            <div class="banner_img"><img src="images/banner.jpg" alt=""/></div>
            <div class="arrow_right">
                ›</div>
        </div>
        <div class="banner_info">
            Георгиевская лента производится на лентоткацком оборудовании по жаккардовой технологии, резка лент производится горячим ножом для предотвращения распускания краев. Георгиевские ленточки полностью соответствуют требованиям организаторов акции.
        </div>
        <div class="product">
            <h1 class="sectiontitle">Хиты продаж</h1>
            <div class="hitswrapper">
                @if(count($articles))
                    @foreach($articles as $article)
                        <div class="card">
                            <img src="{{ $article->image_url }}" alt="IPhone" class="cardimage">
                            <div class="cardinfo">
                                <p class="cardtitle"> <span class="card_name">Название:</span> {{ $article->name }}</p>
                                <p class="cardprice"><span class="card_name">Цена:</span> {{ $article->price }} ₽</p>
                            </div>
                            <button class="btn">Купить</button>
                        </div>
                    @endforeach
                <div class="pagitanors">
                        {{ $articles->links('components.paginate') }}
                </div>
                @else
                    <h3>Товара пока что нет</h3>
                @endif
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
@endsection
