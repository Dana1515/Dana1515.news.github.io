<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <main class="main">
        
        <div class="container_form">
            <h1 class="title_form">Форма обратной связи</h1>

            <form class="form" id="form" action=<?php echo e(route('form.store')); ?> method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="fio">ФИО</label>
                    <input type="text" id="fio" name="fio" placeholder="Иванов Иван Иванович" minlength="10" required>
                </div>
                <div class="form-group">
                    <label for="address">Адрес</label>
                    <input type="text" id="address" name="address" placeholder="г.Тула, ул.М.Горького, д.37" required>
                </div>
                <div class="form-group">
                    <label for="number">Телефон</label>
                    <input type="tel" id="number" name="number" placeholder="+7 (999)-999-99-99"  required>
                    <span class="error-message" id="phoneError">Пожалуйста, введите корректный номер телефона</span>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="pochta@mail.ru" required>
                </div>
                <button type="submit" class="btn_submit" id="btn">Отправить</button>
            </form>

        </div>

        <div class="container_table" id="container_table">
            <table class="table" id="dataTable"> 
                <thead class="thead-dark"> 
                    <tr> 
                        <th>id</th> 
                        <th>ФИО</th> 
                        <th>Адрес</th> 
                        <th>Телефон</th> 
                        <th>Email</th>  
                    </tr> 
                </thead> 
                <tbody> 
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="lead-row">
                        <td class="td_string"><?php echo e($user->id); ?></td>
                        <td class="td_string"><?php echo e($user->fio); ?></td>
                        <td class="td_string"><?php echo e($user->address); ?></td>
                        <td class="td_string"><?php echo e($user->number); ?></td>
                        <td class="td_string"><?php echo e($user->email); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody> 
            </table> 
        </div>
        
    </main>
    <script src="/js/script.js"></script>
</body>
</html><?php /**PATH C:\OSPanel\domains\myapp\project\resources\views/form.blade.php ENDPATH**/ ?>