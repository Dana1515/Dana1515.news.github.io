<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <main class="main">
        
        <div class="container_form">
            <h1 class="title_form">Форма обратной связи</h1>

            <form class="form" id="form" action={{ route('form.store') }} method="POST">
                @csrf
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
                    @foreach($users as $user)
                    <tr class="lead-row">
                        <td class="td_string">{{ $user->id }}</td>
                        <td class="td_string">{{ $user->fio }}</td>
                        <td class="td_string">{{ $user->address }}</td>
                        <td class="td_string">{{ $user->number }}</td>
                        <td class="td_string">{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody> 
            </table> 
        </div>
        
    </main>
    <script src="/js/script.js"></script>
</body>
</html>