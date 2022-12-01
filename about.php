<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>О нас</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>О нас</h3>
    <p> <a href="home.php">Домой</a> / О нас </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>Почему нужно выбрать нас?</h3>
            <p>Самые лучшие цветы</p>
            <a href="shop.php" class="btn">Купить сейчас</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>Что мы предоставляем?</h3>
            <p>Мы предоставляем лучшие цветы</p>
            <a href="contact.php" class="btn">Наши контакты</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Кто мы?</h3>
            <p>Лучшая компания</p>
            <a href="#reviews" class="btn">Отзывы клиентов</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Отзывы клиентов</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Благодарю за оперативную работу, широкий ассортимент цветов свежих, красивые букеты на любую сумму! Удобное время доставки! Спасибо вам что создаете красоту и процветания вам</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Алексей</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Оперативность и качество работы коллектива Цветочного ряда не перестает удивлять, заказами неимоверно довольны. Впечатления незабываемые, спасибо!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Томирис</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Очень выручили на 1 сентября! Спасибо за быструю доставку и за прекрасный букет</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Димаш</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Просто потрясающий магазин, шикарный выбор цветов, удивил выбор экзотических цветов, очень вежливый персонал, ребята творят просто чудесные букеты, такого цветочного магазина у нас в городе ещё не было, это единственный магазин где я смог купить букет в два часа ночи. Я просто в восторге.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Александр</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Спасибо за хорошую работу!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Даулет</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Все супер!) Цены адекватные, букет соответствовал картинке, цветочки свежие, доставили мгновенно) Спасибо!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Аяна</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>