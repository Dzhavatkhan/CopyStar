<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }
        body{
            background-color: #F5F5F5;
            padding: 100px 320px 170px 320px; 
        }
        .wrapper{
            width: 1263px;
            height: 738px;
            background: #FFF;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }
        h2{
            color: #F00;
            width: 596px;
            height: 83px;
            text-align: center;
            font-family: "Inria Sans";
            font-size: 36px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            position: relative;
            top: 80px;
            left: 334px;
        }
        form{
            position: relative;
            top: -75px
        }
        .login{
            width: 587px;
            height: 71px;  
            border: 3px solid #5E9FF2;
            background: #FFF; 
            padding-left: 14px;
            font-family: "Inria Sans";
            outline: none;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            position: relative;
            top: 225px;
            left: 338px;       
        }
        .password{
            border: 3px solid #45BF86;
            background: #FFF;
            outline: none;
            width: 587px;
            height: 71px;  
            position: relative;
            top: 333px;
            padding-left: 14px;
            font-family: "Inria Sans";
            outline: none;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            left: -255px;                     
        }
        .login::placeholder{
            color: rgba(255, 0, 0, 0.75);
            font-family: "Inria Sans";
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .password::placeholder{
            color: rgba(94, 159, 242, 0.75);
            font-family: "Inria Sans";
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;            
        }
        .send_form{
            position: relative;
            top: 435px; 
            background: #6D0FF2;
            width: 587px;
            height: 71px;
            cursor: pointer;
            outline: none;
            border: none;
            color: #FFF;
            color: #FFF;
            text-align: center;
            font-family: "Inria Sans";
            font-size: 36px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            left: 338px
        }
        .send_form:hover{
            transition: 0.5s;
            background-color: #5D0CCF;
        }
        .a{
            position: relative;
            font-size: 18px;
            top: 500px;
            left: -245px;
        }
    </style>
    <div class="conatiner">
        <div class="wrapper">
            <h2>
                Авторизация
            </h2>
            <form action="">
                
                <input type="text" class="login" placeholder="Логин" name="login" value="{{ old('name') }}">

                <input type="text" class="password" placeholder="Пароль" name="password" value="{{ old('name') }}" >

                <button class="send_form">Отправить</button>
                <a class="a" href="{{ route('signUp') }}">У меня нет аккаунта!</a>
            </form>
        </div>
    </div>
</body>
</html>