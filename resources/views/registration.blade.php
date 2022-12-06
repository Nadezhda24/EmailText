<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Laravel</title>

    </head>
    <body>

    <form action="send" method="post" style="margin: 20px">
        @csrf
        <div class="form-group">
            <label for="name">Введите текст</label>
            <textarea name="text" class="form-control" placeholder="Введите текст" id="text" rows="3"></textarea>
        </div>
        <button type="submit" name="button" class="btn btn-success">Сохранить</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Текст</th>
        </tr>
        </thead>
        <tbody>
        @for($i = 0; $i < count($data); $i++)
            <tr>
                <th scope="row">{{$i + 1}}</th>
                <td>{{$data[$i]->text}}</td>

            </tr>
        @endfor
        </tbody>
    </table>
    </body>
</html>
