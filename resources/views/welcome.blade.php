@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="{{ asset('/img/barbershop-logo.png') }}" width="386" height="204" alt="Барбершоп Бородинский">
    </div>
    <section class="features clearfix">
        <div class="features-item">
            <b class="features-name">Быстро</b>

            <p>Мы делаем свою работу быстро! Два часа пролетят незаметно и вы - счастливый обладатель стильной стрижки - минутки!</p>
        </div>
        <div class="features-item">
            <b class="features-name">Круто</b>
            <p>Забудте, Как вы стриглись раньше. <br>Мы сделаем из вас звезду футбола или кино! <br>Во всяком случае внешне.</p>
        </div>
        <div class="features-item">
            <b class="features-name">Дорого</b>

            <p>Наши мастера-профессионалы своего дела и не могут стоить дешево .К тому же, разве цена не дает определенный статус?</p>
        </div>

    </section>
    <div class="content clearfix">
        <div class="content-left">
            <h2 class="content-title">Новости</h2>
            <ul class="news">
                <li>
                    <p>Нам наконец завезли Ягермейсер! Теперь вы можете пропустить стаканчик во время стрижки <br>
                        <time datetime="2020-01-11">11 января</time>
                    </p>
                </li>
                <li>
                    <p>В НАШЕЙ КОМАНДЕ ПОПОЛНЕНИЕ, БОРИС «БРИТВА» СТРИГУНЕЦ, ОБЛАДЕТЕЛЬ МНОЖЕСТВА ТИТУЛОВ И НАГРАД ПОПОЛНИЛ НАШИ СТРОЙНЫЕ РЯДЫ<br>
                        <time datetime="2020-24-10">24 октября</time>
                    </p>
                </li>
            </ul>
            <div class="news-btn">
                <a class="btn" href="news.html">Все новости</a>
            </div>
        </div>

        <div class="content-right">
            <h2 class="content-title">Фотогалерея</h2>
            <div class="gallery">
                <figure class="gallery-content">
                    <img src="img/ph-1.png" width="286" height="
						         164" alt="">
                </figure>
                <button type="button" class="btn btn-gallery-prev">Назад</button>
                <button type="button" class="btn btn-gallery-next">Вперед</button>
            </div>
        </div>

    </div>
    </section>
    <section>
        <div class="content clearfix">
            <div class="content-left">
                <h2 class="content-title">Контактная Информация</h2>
                <p>
                    BARBERSHOP «BORODINSKI» <br>
                    ДРЕС:  Г. САНКТ-ПЕТЕРБУРГ  УЛ. БЕЛИНСКОГО 6<br>
                    ТЕЛЕФОН:+7 (812) 666-02-004 </p>
                <p>
                    ВРЕМЯ РАБОТЫ: <br>
                    ПН — ПТ: С 10:00 ДО 22:00<br>
                    СБ — ВС: С 10:00 ДО 19:00</p>

                <a class="btn map" href="#">Как проехать</a>
                <a class="btn feedback" href="#">Обратная Связь</a>
            </div>
            <div class="content-right">
                <h2 class="content-title">Записаться</h2>
                <p> Укажите желаемую дату и время и мы свяжемся с вами для
                    подтверждения брони</p>
                <form class="form" action="https://echo.htmlacademy.ru" method="post">
                    <input type="text" name="date" value="" placeholder="Дата">
                    <input type="text" name="time" value="" placeholder="Время">
                    <input type="text" name="name" value="" placeholder="Ваше имя">
                    <input type="text" name="phone" value="" placeholder="Телефон">
                    <button class="btn" type="submit">Отправить</button>
                </form>

            </div>

        </div>
    </section>
@endsection
