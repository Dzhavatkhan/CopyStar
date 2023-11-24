<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    @vite('resources/css/log.css')
</head>
<body>

    <div class="container">
        <div class="wrapper">
            <h2>
                Авторизация
            </h2>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <input type="text" class="login" placeholder="Логин" name="login" value="{{ old('name') }}">
                @error('login')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="password" placeholder="Пароль" name="password" value="{{ old('name') }}" >
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
                <button class="send_form">Отправить</button>
                <a class="a" href="{{ route('signUp') }}">У меня нет аккаунта!</a>
            </form>
        </div>
    </div>
</body>
</html>
