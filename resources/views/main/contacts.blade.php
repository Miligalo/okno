<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Контакты</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


</head>
<body>

<header>
    <div class="container">
        <div class="row">

            <div class="col-md-2 col-sm-6 text-center mt-1">
                <div class="logo-hd"><a href="index.html" class="text-center"> <img src="img/logo.png" alt=""></a></div>
                <div class="logo-text"><span>ОКНА ПВХ</span><br>В ОДЕССЕ</div>
            </div>

            <div class="col-md-2 col-sm-6 offset-1 text-center">
                <div class="hed-block-tr mt-4">
                    <div class="hed-title-block">мы находимся:</div>
                    <div class="adress-header cursor">Ак. Глушко 14/4</div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 offset-1 text-center">
                <div class="hed-block-tr mt-4">
                    <div class="hed-title-block">наши контакты:</div>
                    <div class="head-phone cursor">+38-095-796-48-99</div>
                    <ul class="list-social text-center">
                        <li class="cursor"><a href="viber://chat?number=%2B+380957964899"><img src="img/head-viber.png" alt=""></a></li>
                        <li class="cursor"><a href="tg://resolve?domain="><img src="img/hed-telegramm.png" alt=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 heder-end-right offset-1 text-center mt-4">
                <div class="email cursor">drevoplastua@gmail.com</div>
                <button class="btn cursor" data-toggle="modal" data-target="#requestCall"></i> Заказать звонок</button>
            </div>

        </div>
    </div>

    <div class="head-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-green">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main.index')}}">Главная <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('main.pickup')}}">Подобрать окно</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main.services')}}">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('main.about')}}">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main.guarantee')}}">Гарантии</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('main.delivery')}}">Доставка и оплата</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('main.contacts')}}">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
</header>

<div class="home-previe">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Главная</a></li>
            <li>Контакты</li>
        </ul>
        <div class="row">
            <div class="col-lg-12 contact-section">
                <h1 class="text-center">Наши контакты</h1>
                <div class="grid">
                    <p class="title">Адрес</p>
                    <p>г.Одесса, Ак. Глушко 14/4</p>
                </div>
                <div class="grid">
                    <p class="title">Телефон</p>
                    <p>+380957964899<br>+380957964899</p>
                </div>
                <div class="grid">
                    <p class="title">Email</p>
                    <p>drevoplastua@gmail.com</p>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2751.460472817074!2d30.722453315588997!3d46.399924979123064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6335f3007d62b%3A0x2f28ad9926373402!2z0L_RgNC-0YHQvy4g0JDQutCw0LTQtdC80LjQutCwINCT0LvRg9GI0LrQviwgMTQsINCe0LTQtdGB0YHQsCwg0J7QtNC10YHRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjUwMDA!5e0!3m2!1sru!2sua!4v1635536508616!5m2!1sru!2sua" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12">
            <h1 class="text-center"><strong>Есть вопрос ?</strong></h1>
            <div class="description-h1 text-center">Оставьте заявку, и мы с вами свяжемся!</div>

            <form action="" class="pevie-home pb-2">
                <div class="form-row">
                    <div class="input-name">
                        <input type="text" placeholder="Ваше имя">
                    </div>

                    <div class="input-tel">
                        <input type="phone" placeholder="Ваш телефон" >
                    </div>

                    <button class="btn-form">Отправить</button>
                </div>

            </form>
        </div>


    </div>
</div>



@extends('layouts.footer')
@section('footer')

@endsection('footer')

<!-- Modal -->
<div class="modal fade" id="requestCall" tabindex="-1" role="dialog" aria-labelledby="exampleRequestCall" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleRequestCall">Заказать звонок</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('main.store')}}"  method="POST" class="pevie-home">
                    @csrf
                    <div class="input-name">
                        <input type="text" class="modal_input" name="name" placeholder="Ваше имя">
                    </div>

                    <div class="input-tel">
                        <input type="phone" class="modal_input" name="number" placeholder="Ваш телефон" >
                    </div>
                    <button class="send cursor">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>