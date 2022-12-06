<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Джунгарики</title>

    </head>
    <body>
    <div class="block">
        <div>
            <div class="row block_registration">
                <div class="mx-auto">
                    <h3>Регистрация</h3>
                </div>
            </div>


            <form action="send" method="post">
                @csrf
                <div class="input-group block_registration">
                    <span class="input-group-text" id="input-group-left-example">@</span>
                    <input id="email" name="email" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="input-group-left">
                </div>
                <div class="block_registration">
                    <button style="width: 100%" type="submit" name="button" class="btn btn-success">Получить пароль</button>
                </div>
            </form>

            <div class="row block_registration">
                <div class="mx-auto">
                    <p>Уже есть аккаунт?</p>
                </div>
            </div>


        </div>
    </div>



    </body>
</html>

<style>
    .block{
        margin-top: 10%;
        margin-left: 20%;
        margin-right: 20%;
    }

    .block_registration{
        margin-top: 2%;
        margin-bottom: 2%;
    }
</style>
