<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <form action="" class="form" method="POST">
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
                <input type="text" class="password" name="password" placeholder="Пароль">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
                <input type="text" class="password_confirm" name="password_confirm" placeholder="Подтвердите пароль">
                @error('password_confirm')
                    <p class="error">{{$message}}</p>
                @enderror
                <button>Отправить</button>
            </form>
        </div>
    </div>
</body>
</html>
