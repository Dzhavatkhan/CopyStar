<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/reg.css")
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h2>
                Регистрация
            </h2>
            <form action="{{ route('reg') }}" class="form" method="POST">
                @csrf
                <input type="text" class="name" name="name" placeholder="Имя">
                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="surname" name="surname" placeholder="Фамилия">
                @error('surname')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="patronymic" name="patronymic" placeholder="Отчество">
                @error('patronymic')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="email" class="email" name="email" placeholder="Почта">
                @error('email')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="login" name="login" placeholder="Логин">
                @error('login')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="password" name="password" placeholder="Пароль">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="password" name="password_confirmation" placeholder="Подтвердите пароль">
                @error('password_confirmation')
                    <p class="error">{{$message}}</p>
                @enderror
                <button>Отправить</button>
                <p class="rules">Нажимая на эту кнопку Вы соглашаетесь с правилами сайта</p>
            </form>
        </div>
    </div>text
</body>
</html>
