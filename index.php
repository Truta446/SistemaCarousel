<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link href="public/css/login.scss" rel="stylesheet" />
    </head>
    <body>
        <div class="cont">
            <div class="demo">
                <div class="login">
                    <div class="login__check"></div>
                    <div class="login__form">
                        <div class="login__row">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" class="login__input name" placeholder="Username"/>
                        </div>
                        <div class="login__row">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" class="login__input pass" placeholder="Password"/>
                        </div>
                        <button type="button" class="login__submit">Sign in</button>
                    </div>
                </div>                    
            </div>
        </div>

        <script src="public/js/login.js" type="text/javascript"></script>
    </body>
</html>