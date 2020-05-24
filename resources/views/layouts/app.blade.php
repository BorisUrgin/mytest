<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Бородинский</title>

</head>
@if(\Illuminate\Support\Facades\Route::currentRouteName()== 'home')
<body class="index-body">
@else
<body class="content-body">
@endif






<header class="main-header">
    <div class="container clearfix">
        <nav class="main-nav ">
            @if(\Illuminate\Support\Facades\Route::currentRouteName() != 'home')
                <a class="small-logo" href="{{ route('home')  }}">
                    <img src="{{ asset('/img/small-logo.png') }}" width="111" height="24" alt="Бородинский">
                </a>
            @endif
            <ul>
                <li>
                    @if(\Illuminate\Support\Facades\Route::currentRouteName()== 'information')
                        <a class="active" href="{{ route('information')  }}">Информация</a>
                    @else
                        <a  href="{{ route('information')  }}">Информация</a>
                    @endif


                </li>
                <li>
                    @if(\Illuminate\Support\Facades\Route::currentRouteName()== 'news')
                        <a class="active" href="{{ route('news')  }}">Новости</a>
                    @else
                        <a  href="{{ route('news')  }}">Новости</a>
                    @endif

                </li>	<li>


                    @if(\Illuminate\Support\Facades\Route::currentRouteName()== 'price')
                        <a class="active" href="{{ route('price')  }}">Прайс-лист</a>
                    @else
                        <a  href="{{ route('price')  }}">Прайс-лист</a>
                    @endif
                </li>	<li>

                    @if(\Illuminate\Support\Facades\Route::currentRouteName()== 'shop')
                        <a class="active" href="{{ route('shop')  }}">Магазин</a>
                    @else
                        <a  href="{{ route('shop')  }}">Магазин</a>
                    @endif

                </li>	<li>

                    @if(\Illuminate\Support\Facades\Route::currentRouteName()== 'contacts')
                        <a class="active" href="{{ route('contacts')  }}">Контакты</a>
                    @else
                        <a  href="{{ route('contacts')  }}">Контакты</a>
                    @endif
                </li>
            </ul>
        </nav>
        <div class="entrance">



            @guest
                @if (Route::has('register'))
                    <a href="{{ route('login') }}">Вход</a>
                @endif
            @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

            @endguest










        </div>


    </div>


</header>
<main class="container">
    @yield('content')
</main>
<footer class="main-footer clearfix">
    <div class="container">
        <section class="footer-contacts">
            <p>
                BARBERSHOP «BORODINSKI»<br>
                АДРЕС:  Г. САНКТ-ПЕТЕРБУРГ  УЛ. БЕЛИНСКОГО 6<br>
                <a href="#">КАК НАС НАЙТИ?</a><br>
                ТЕЛЕФОН:  +7 (812) 666-02-004</p>

        </section>
        <section class="footer-social">
            <p>давайте дружить</p>
            <a href="https://vk.com/id184713758" class="social-btn social-btn-vk">Вконтакте</a>
            <a href="#" class="social-btn social-btn-fb">Фейсбук</a>
            <a href="#" class="social-btn social-btn-inst">Инстаграм</a>

        </section>
        <section class="footer-copyright">
            <p>Разработано:</p>
            <a class="btn" href="https://vk.com/id184713758">Юргин Борис</a>
        </section>
    </div>
</footer>
<div class="modal-content">
    <button class="modal-content-close" type="button" title="закрыть">
        Закрыть</button>
<!-- <h2>Личный кабинет</h2>
    <p>введите свой логин и пароль</p>
    <form class="login-form" method="post" action="{{ route('login') }}">
        <input class="user-name-input"type="text" name="username" value="" placeholder="Логин">
        <input id="email" type="email" class="form-control user-name-input @error('email') is-invalid @enderror"
        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <input class="password-input"type="password" name="password" value="" placeholder="Пароль">
        <input id="password" type="password" class="form-control password-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label class="login-checkbox">

            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="checkbox-indicator"></span>
            Запомните меня
        </label>
        <a class="restore" href="#">Я забыл пароль!</a>
        <a class="restore" href="{{route('register')}}" >Регистрация</a>
        <button class="btn" type="submit">Войти</button>




    </form> -->

    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf


            <label for="email">{{ __('E-Mail ') }}</label>


                <input id="email" type="email" class="user-name-input @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>






            <label for="password" >{{ __(' Пароль') }}</label>


                <input id="password" type="password" class="password-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


        <label class="login-checkbox">

            <input class="form-check-input" type="checkbox" name="remember"
                   id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="checkbox-indicator"></span>
            Запомните меня
        </label>

        @if (Route::has('password.request'))
            <a class="restore" href="{{ route('password.request') }}">
                {{ __('Забыли пароль?') }}
            </a>
        @endif

        @guest
            @if (Route::has('register'))
                <button class="btn" type="submit">Войти</button>
                <a class="btn btn-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
            @endif
            @else

            <a id="navbarDropdown" class="btn btn-link" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Личный кабинет
                    </a>
            <a class="btn btn-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Выход') }}
            </a>


            @endguest

    </form>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>











</div>
<div class="modal-content-map">
    <button class="modal-content-close map-close" type="button" title="закрыть"></button>
    <div id="yandex map"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.6334522568445!2d30.343792815677208!3d59.93822426909457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469631a098e64709%3A0x137edcc92c51d021!2z0YPQuy4g0JHQtdC70LjQvdGB0LrQvtCz0L4sINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCz!5e0!3m2!1sru!2sru!4v1587814482626!5m2!1sru!2sru" width="766" height="561" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</body>
<script type="text/javascript">
    var entrance=document.querySelector(".entrance");
    var popup=document.querySelector(".modal-content");
    var close=document.querySelector(".modal-content-close");
    var form=popup.querySelector("form");
    var username=popup.querySelector("[name=username]");
    var password=popup.querySelector("[name=password]");
    var storage=localStorage.getItem("username");

    var map=document.querySelector(".map");
    var popupmap=document.querySelector(".modal-content-map");
    var mapclose=document.querySelector(".map-close");


    entrance.addEventListener("click",function(event) {
        event.preventDefault();
        popup.classList.add("modal-content-show");
        username.focus();

        if(storage) {
            username.value=storage;
            password.focus();
        } else{username.focus();
        }
    });


    close.addEventListener("click",function(event) {
        event.preventDefault();
        popup.classList.remove("modal-content-show");
        popup.classList.remove("modal-error");
    });

    form.addEventListener("submit", function(event) {
        if (!username.value || !password.value) {
            event.preventDefault();
            popup.classList.remove("modal-error");
            popup.offsetWidth=popup.offsetWidth;
            popup.classList.add("modal-error")
        } else{
            localStorage.setItem("username", username.value);
        }
    });

    window.addEventListener("keydown",function(event){
        if(event.keyCode=== 27){
            if(popup.classList.contains("modal-content-show")){
                popup.classList.remove("modal-content-show");
            }
        }
    });
    map.addEventListener("click",function(event) {
        event.preventDefault();
        popupmap.classList.add("modal-content-map-show");
    });

    mapclose.addEventListener("click",function(event) {
        event.preventDefault();
        popupmap.classList.remove("modal-content-map-show");
    });
    window.addEventListener("keydown",function(event){
        if(event.keyCode=== 27){
            if(popupmap.classList.contains("modal-content-map-show")){
                popupmap.classList.remove("modal-content-map-show");
            }
        }
    });
</script>
</html>

