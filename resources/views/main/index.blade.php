<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Металлопластиковые Окна Одесса</title>
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
                            <li class="cursor"><a href="tg://resolve?domain="><img src="{{asset('img/hed-telegramm.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
    
                <div class="col-md-3 col-sm-12 heder-end-right offset-1 text-center mt-4">
                    <div class="email cursor">drevoplastua@gmail.com</div>
                    <button class="btn cursor" data-toggle="modal" data-target="#requestCall"> Заказать звонок</button>
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
                            <li class="nav-item active">
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

<div class="home-previe d-none d-sm-block">
    <div class="home-previe-left">
        <style>
            .home-previe-left {
    display: block;
    background-image: url(../img/home-bg.png), url(../img/bg-fonone.jpg);
    background-size: 53% 100%, 63% 100%;
    background-position:left top, top right;
    background-repeat:no-repeat, no-repeat;
    padding-left: 30px;
            }
            </style>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <h1>Металлопластиковые<br>окна в Одессе</h1>
                    <div class="description-h1">
                        Запишитесь на <span>бесплатный замер</span> сегодня<br>
                        и получите гарантированную <span>скидку 10%!</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <form action="{{route('main.store')}}"  method="POST" class="pevie-home">
                        @csrf
                        <div class="input-name">
                            <input type="text" name="name" placeholder="Ваше имя">
                        </div>

                        <div class="input-tel">
                            <input type="number" name="number" placeholder="Ваш телефон" >
                        </div>
                        <button class="btn-form cursor"></i> Записаться на замер</button>
                    </form>
                    <div class="col-lg-12 previe-blokit-cathestvo">
                            <img src="img/derevo-plast.png" class="float-left">
                            <p class="pt-4 pl-5">Надёжно. Навсегда.<br><span>гарантия качества!</span></p>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-12 offset-2 d-none d-sm-block">
                    <div class="float-right">
                        <div class="previe-right-one">пенсионерам</div>
                        <div class="previe-right-two">МАКСИМАЛЬНЫЕ <br> <span>СКИДКИ</span></div>
                        <div class="previe-right-three" >и особые условия</div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

<div class="container">
    <div class="zagolovok-block mt-sm-5">Наши модели окон</div>
    <div class="row items">
        <div class="col-4 col-sm-12">
            <h3 class="model-title">Wintech стандарт</h3>
            <img src="img/model1.png" alt="">
            <p class="model-descr">ПВХ-профиль на основе стабилизатора CaZn.</p>
            <p class="price">Соимость: от <span>4250 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">Wintech 753</h3>
            <img src="img/model2.png" alt="">
            <p class="model-descr">ПВХ-профиль на основе стабилизатора CaZn.</p>
            <p class="price">Соимость: от <span>4250 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">Wintech 860</h3>
            <img src="img/model3.png" alt="">
            <p class="model-descr">ПВХ-профиль на основе стабилизатора CaZn.</p>
            <p class="price">Соимость: от <span>4250 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">WDS стандарт</h3>
            <img src="img/model4.png" alt="">
            <p class="model-descr">Качественный ПВХ профиль устойчив к воздействию внешней среды и сохраняет изначальную белизну и гладкость долгие годы</p>
            <p class="price">Соимость: от <span>4250 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">WDS Комфорт</h3>
            <img src="img/model5.png" alt="">
            <p class="model-descr">Благодаря увеличенной площади стеклопакета ваша комната станет светлее и визуально просторнее.</p>
            <p class="price">Соимость: от <span>4250 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">WDS Премиум</h3>
            <img src="img/model6.png" alt="">
            <p class="model-descr">Комбинация 6-камерного профиля и двухкамерного стеклопакета обеспечивает высокий уровень шумоизоляции.</p>
            <p class="price">Соимость: от <span>4250 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">KBE 58</h3>
            <img src="img/model7.png" alt="">
            <p class="model-descr">KBE 58 – классическая профильная система, технология производства которой «отточена» до совершенства.</p>
            <p class="price">Соимость: от <span>2954 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">KBE 70 Стандарт</h3>
            <img src="img/model8.png" alt="">
            <p class="model-descr">Окна KBE 70 доступны в широком ассортименте цветов и вариантов декора.</p>
            <p class="price">Соимость: от <span>3022 грн</span>/м<sup>2</sup></p>
        </div>
        <div class="col-4 col-sm-12">
            <h3 class="model-title">KBE 88 Премиум</h3>
            <img src="img/model9.png" alt="">
            <p class="model-descr">Технология 7-камерного центрального уплотнения с высокой изоляцией.</p>
            <p class="price">Соимость: от <span>4150 грн</span>/м<sup>2</sup></p>
        </div>

    </div>
</div>



<div class="zamerka-block">

   <div class="container">
       <div class="podtex-zamerka">Запишитесь сегодня и получите <span>10% скидку!</span></div>
       <div class="zamerka-h1">Вызвать замерщика<br>бесплатно</div>

       <form action="" class="">
           <div class="row">
               <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                   <input type="text" class="input_zamerka" placeholder="Ваше имя">
               </div>
               <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                   <input type="phone" class="input_zamerka" placeholder="Ваш телефон">
               </div>
           </div>
           <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
               <button class="btn-form cursor"><i class="fas fa-edit"></i> Записаться на замер</button>
           </div>
       </form>

   </div>

</div>

<div class="block-gamma">
    <div class="container">
        <div class="gamma-title">Цветовая гамма окон</div>
        <div class="row gamma-slider">
            <div>
                <a href="img/slider-1-1.png" data-lightbox="image-1" data-title="Slider 1"><img src="img/slider-1-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-2-1.png" data-lightbox="image-1" data-title="Slider 2"><img src="img/slider-2-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-3-1.png" data-lightbox="image-1" data-title="Slider 3"><img src="img/slider-3-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-4-1.png" data-lightbox="image-1" data-title="Slider 4"><img src="img/slider-4-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-5-1.png" data-lightbox="image-1" data-title="Slider 5"><img src="img/slider-5-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-6-1.png" data-lightbox="image-1" data-title="Slider 6"><img src="img/slider-6-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-7-1.png" data-lightbox="image-1" data-title="Slider 7"><img src="img/slider-7-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-8-1.png" data-lightbox="image-1" data-title="Slider 8"><img src="img/slider-8-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-9-1.png" data-lightbox="image-1" data-title="Slider 9"><img src="img/slider-9-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-10-1.png" data-lightbox="image-1" data-title="Slider 10"><img src="img/slider-10-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-11-1.png" data-lightbox="image-1" data-title="Slider 11"><img src="img/slider-11-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-12-1.png" data-lightbox="image-1" data-title="Slider 12"><img src="img/slider-12-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-13-1.png" data-lightbox="image-1" data-title="Slider 13"><img src="img/slider-13-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-14-1.png" data-lightbox="image-1" data-title="Slider 14"><img src="img/slider-14-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-15-1.png" data-lightbox="image-1" data-title="Slider 15"><img src="img/slider-15-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-16-1.png" data-lightbox="image-1" data-title="Slider 16"><img src="img/slider-16-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-17-1.png" data-lightbox="image-1" data-title="Slider 17"><img src="img/slider-17-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-18-1.png" data-lightbox="image-1" data-title="Slider 18"><img src="img/slider-18-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-19-1.png" data-lightbox="image-1" data-title="Slider 19"><img src="img/slider-19-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-20-1.png" data-lightbox="image-1" data-title="Slider 20"><img src="img/slider-20-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-21-1.png" data-lightbox="image-1" data-title="Slider 21"><img src="img/slider-21-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-22-1.png" data-lightbox="image-1" data-title="Slider 22"><img src="img/slider-22-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-23-1.png" data-lightbox="image-1" data-title="Slider 23"><img src="img/slider-23-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-24-1.png" data-lightbox="image-1" data-title="Slider 24"><img src="img/slider-24-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-25-1.png" data-lightbox="image-1" data-title="Slider 25"><img src="img/slider-25-1.png" alt=""></a>
            </div>

            <div>
                <a href="img/slider-26-1.png" data-lightbox="image-1" data-title="Slider 26"><img src="img/slider-26-1.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div class="profil-block">
    <div class="container">
        <div class="profil-title">Профильная система</div>
        <div class="row">
            <div class="col-md-3 col-sm-12 profil-item">
                <a href="#" data-toggle="modal" data-target="#requestCall"><img src="img/profil-1.png" alt=""><p>металлопластиковые окна</p>
                </a>
            </div>

            <div class="col-md-3 col-sm-12 col-md-offset-1 profil-item">
                <a href="#" data-toggle="modal" data-target="#requestCall">
                    <img src="img/profil-2.png" alt="">
                    <p>деревянные окна</p>
                </a>
            </div>

            <div class="col-md-3 col-sm-12 col-md-offset-1 profil-item">
                <a href="#" data-toggle="modal" data-target="#requestCall">
                    <img src="img/profil-3.png" alt="">
                    <p>алюминиевые окна</p>
                </a>
            </div>

            <div class="col-md-3 col-sm-12 col-md-offset-1 profil-item">
                <a href="#" data-toggle="modal" data-target="#requestCall">
                    <img src="img/profil-4.png" alt="">
                    <p>раздвижные системы</p>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="container text-right">
        <div class="gamma-title">Бренды с которыми работаем</div>
        <div class="row brands-items">
            <div>
                <img src="img/brand/wintech.png">
            </div>
            <div>
                <img src="img/brand/wds.png">
            </div>
            <div>
                <img src="img/brand/logo-kbe-small.png" width="248" height="100">
            </div>
            <div>
                <img src="img/brand/veka.png" width="90" height="100">
            </div>
            <div>
                <img src="img/brand/rehau.png">
            </div>
        </div>
    </div>
</div>

<div class="container pb-5 mt-2">
    <div class="zagolovok-block">Мы выполняем работу под ключ</div>
    <div class="img_right d-none d-sm-block"><p>Москитная сетка в <span>подарок !</span></p></div>

        <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="circle float-left align-content-center"><img src="img/ruler_icon.png"></div>
            <p class="descr-step mt-4">Выезд мастера для замера</p>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 offset-md-2 col-sm-12">
            <div class="circle float-left"><img src="img/zoom_icon.png"></div>
            <p class="descr-step mt-4">Подбор окна и комплектующих</p>
        </div>
        </div>

    <div class="quality d-none d-sm-block"></div>
        <div class="row">
            <div class="col-md-6 offset-md-4 col-sm-12">
                <div class="circle float-left"><img src="img/delivery_icon.png"></div>
                <p class="descr-step mt-4">Доставка и установка</p>
            </div>
        </div>

    <div class="row">
        <div class="col-md-6 offset-md-6 col-sm-12">
            <div class="circle float-left"><img src="img/clear_icon.png"></div>
            <p class="descr-step mt-4">Уборка после себя</p>
        </div>
    </div>

</div>




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
                <form action="" class="pevie-home">
                    <div class="input-name">
                        <input type="text" class="modal_input" name="name" placeholder="Ваше имя">
                    </div>

                    <div class="input-tel">
                        <input type="phone" class="modal_input" name="phone" placeholder="Ваш телефон" >
                    </div>
                    <button class="send cursor">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@extends('layouts.footer')
@section('footer')

@endsection('footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/fontawesome.min.js "></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/lightbox.min.js')}}"></script>


</body>
</html>