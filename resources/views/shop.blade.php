@extends('layouts.app')
@section('content')
    <div class="container clearfix">
        <h2>Магазин</h2>
        <div class="bread-crumbs">
            <ul>
                <li>
                    <a href="index.html">Главная</a>
                </li>
                <li>
                    <a>Магазин</a>
                </li>
                <li class="blocked">
                    <a >Средства для ухода</a>
                </li>
            </ul>

        </div>
        <div class="shop-nav">
            <form action="#" method="post">
                <h3>Производитель</h3>
                <label class="shop-checkbox">
                    <input class="1" type="checkbox" checked="checked" name="Baxter-of-california">
                    <span class="checkbox-indicator"></span>
                    Baxter of california
                </label>
                <label class="shop-checkbox">
                    <input type="checkbox" checked="checked" name="Mr natty">
                    <span class="checkbox-indicator"></span>
                    Mr natty
                </label>
                <label class="shop-checkbox">
                    <input type="checkbox" checked="checked" name="Suavecito">
                    <span class="checkbox-indicator"></span>
                    Suavecito
                </label>
                <label class="shop-checkbox">
                    <input type="checkbox" checked="checked" name="Malin+Goetz">
                    <span class="checkbox-indicator"></span>
                    Malin+Goetz
                </label>
                <label class="shop-checkbox">
                    <input type="checkbox" checked="checked" name="Murray's">
                    <span class="checkbox-indicator"></span>
                    Murray's
                </label>
                <label class="shop-checkbox">
                    <input type="checkbox" checked="checked" name="American Crew">
                    <span class="checkbox-indicator"></span>
                    American Crew
                </label>


                <h3>Группы товаров</h3>
                <label class="shop-checkbox shop-groups">
                    <input type="radio" name="group">
                    <span class="checkbox-indicator"></span>
                    Бритвенные принадлежности
                </label>
                <label class="shop-checkbox shop-groups">
                    <input type="radio" checked="checked" name="group">
                    <span class="checkbox-indicator"></span>
                    Средства для ухода
                </label>
                <label class="shop-checkbox shop-groups">
                    <input type="radio" name="group">
                    <span class="checkbox-indicator"></span>
                    Аксессуары
                </label>

                <button class="btn" type="submit">Показать</button>

            </form>
        </div>
        <div class="shop-content">




            @foreach($shops as $item)
                <div class="shop-item">
                    <a href="{{route('item')}}">
                    <img src="{{ asset('/img/' . $item->img) }}" width="220px">
                    </a>
                    <div class="item-info">
                        <p>"{{ $item->type }}" <p>
                        <p class="manufacturer">"{{ $item->manufacturer }}"</p>
                        <div class="price clearfix">
                            <label>4500p</label>
                            <button class="btn">Купить</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="news-pages-list">


        <a class="btn active" href="#" type="button">1</a>


        <a class="btn" href="#"type="button">2</a>


        <a class="btn" href="#"type="button">3</a>


        <a class="btn" href="#"type="button">4</a>


    </div>
@endsection('content')
