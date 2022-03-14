<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Гарантии</title>
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
            <li>Гарантии</li>
        </ul>
        <div class="row">
            <div class="col-lg-12">
                <div class="left-block">
                    <img src="./img/garantia.png" width="220" alt="IMG" class="img-fluid pt-5">
                </div>
                <h1><strong>Гарантии</strong></h1>
                <div class="text-content">
                    <p>
                        После нашей установки. Вы получите идеально функционирующие окна, с гарантией на <strong>1 год</strong> <i>на все ремонтные работы.</i>
                        До старта монтажных работ, мы повторно проверяем все на неисправность - по этому вы можете нам доверять.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 pt-5">
            <h1 class="text-center"><strong>Есть вопрос ?</strong></h1>
            <div class="description-h1 text-center">Оставьте заявку, и мы с вами свяжемся!</div>

            <form action="{{route('main.store')}}"  method="POST" class="pevie-home pb-2">
                @csrf
                <div class="form-row">
                    <div class="input-name">
                        <input type="text" name="name" placeholder="Ваше имя">
                    </div>

                    <div class="input-tel">
                        <input type="phone" name="number" placeholder="Ваш телефон" >
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
                <form action="{{route('main.store')}}"  method="POST" class="pevie-home pb-2">
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
        <script src="{{asset('assets/js/lightbox.min.js')}}"></script>
</body>
</html>