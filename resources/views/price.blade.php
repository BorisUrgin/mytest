@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Прайс-лист</h2>
        <div class="bread-crumbs">
            <ul>
                <li>
                    <a href="index.html">Главная</a>
                </li>
                <li class="blocked">
                    <a >Прайс-лист</a>
                </li>
            </ul>
        </div>
        <div class="price-heading">
            <h1>истино мужская классика</h1>
        </div>

        <div class="inner-content clearfix">
            <div class="inner-content-left">
                <h2> Мы используем только<br> лучшие средства:</h2>
                <ul class="custom-list-1">
                    <li>Baxter of California</li>
                    <li>Mr Natty</li>
                    <li>Suavecito</li>
                    <li>Malin+Goetz</li>
                </ul>
            </div>
            <div class="inner-content-right">
                <h2>ЦЕНЫ НА УСЛУГИ<br> НАШИХ МАСТЕРОВ:</h2>
                <table class="prices-table">
                    <tr>
                        <td>Стрижка</td>
                        <td>1500 р.</td>
                    </tr>
                    <tr>
                        <td>Стрижка бороды</td>
                        <td>500 р.</td>
                    </tr>
                    <tr>
                        <td>Накрутка усов</td>
                        <td>350 р.</td>
                    </tr>
                </table>


            </div>
        </div>


        <div class="inner-content clearfix">

            <h2>Несколько слов о нас:</h2>
            <div class="inner-content-left">
                <div class="short-text">
                    <p>
                        Наша парикмахерская занимается исключительно мужскими стрижками. Стрижка каждого клиента для нас - это уникальная и продуманная до мелочей работа. Мы не работаем на количество, мы делаем качество.
                    </p>
                </div>
            </div>

            <div class="inner-content-right">
                <div class="short-text">
                    <p>Наша мастерская расположена в центре города, поэтому сделать стильную стрижку можно в любое время, даже в обеденный перерыв. Здесь вы можете погрузиться в удобную для вас атмосферу, чувствовать себя комфортно и  свободно!</p>
                </div>
            </div>

        </div>
@endsection('content')
