<?php
use Carbon\Carbon;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница с новостями</title>
    <link rel="stylesheet" href="/css/news.css">
</head>
<body>
    <main>
        <h1 class="main_title">Все новости</h1>
     
        <div class="cards">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <h2 class="title"><?php echo e($info->title); ?></h2>
                <p class="about"><?php echo e($info->about); ?></p>
                <p class="date"><?php echo e(Carbon::parse($info->date)->locale('ru')->isoFormat('D MMMM YYYY')); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="btns">
            <button class="btn"><a href="/">На главную</a></button>
        </div>

       
      

    </main>
</body>
</html><?php /**PATH C:\OSPanel\domains\myapp\project\resources\views/news.blade.php ENDPATH**/ ?>