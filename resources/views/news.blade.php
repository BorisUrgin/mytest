@extends('layouts.app')

@section('content')
        <div class="container clearfix">
            <h2>Новости</h2>
            <div class="bread-crumbs">
                <ul>
                    <li>
                        <a href="index.html">Главная</a>
                    </li>
                    <li class="blocked">
                        <a >Новости</a>
                    </li>
                </ul>
            </div>

            <div class="news-colomn">
                @foreach($news as $item)
                    <div class="news-colomn-item">
                        <img src="{{ asset('/img/' . $item->img) }}" width="700px">
                        <h2>{{ $item->title }}</h2>
                        <time datetime="{{ $item->created_at }}">{{ $item->created_at }}</time><br>
                        <a class="btn" href="#" type="button" >Подробнее</a>
                    </div>
                @endforeach
            </div>

            <div class="news-nav">
                <ul>
                    <li>
                        <h3>КАТЕГОРИИ</h3>
                    </li>
                    <li>
                        <a>АКЦИИ</a>
                    </li>
                    <li>
                        <a>ВАМ БУДЕТ ИНТЕРЕСНО!</a>
                    </li>
                    <li>
                        <a>УХОД ЗА БОРОДОЙ</a>
                    </li>
                    <li class="blocked">
                        <a>ВСЕ КАТЕГОРИИ</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h3>АРХИВ</h3>
                    </li>
                    <li>
                        <a>ИЮЛЬ 2020</a>
                    </li>
                    <li>
                        <a> ИЮНЬ 2020</a>
                    </li>
                    <li>
                        <a>МАЙ 2020</a>
                    </li>
                    <li>
                        <a>АПРЕЛЬ 2020</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="news-pages-list">


            <a class="btn active" href="#" type="button">1</a>


            <a class="btn" href="#"type="button">2</a>


            <a class="btn" href="#"type="button">3</a>


            <a class="btn" href="#"type="button">4</a>


        </div>
@endsection
