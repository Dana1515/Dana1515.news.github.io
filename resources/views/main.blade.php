<?php
use Carbon\Carbon;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/css/news.css">
   
</head>
<body>
    <main>
        <h1 class="main_title">Последние новости</h1>

        <div class="cards">
            @foreach($news as $info)
            <div class="card">
                <h2 class="title">{{ $info->title }}</h2>
                <p class="about">{{ $info->about }}</p>
                <p class="date">{{Carbon::parse($info->date)->locale('ru')->isoFormat('D MMMM YYYY') }}</p>
            </div>
            @endforeach
        </div>

        <div class="btns">
            <button class="btn"><a href="/news">Все новости</a></button>
            <button class="btn"><a href="/form">Обратная связь</a></button>
        </div>

    
    </main>
</body>
</html>