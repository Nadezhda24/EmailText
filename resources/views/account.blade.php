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
                    <h3>Личный кабинет</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    @for($i = 0; $i < count($list); $i++)
                        <div class="card block_margin">
                            <div class="card-header">
                                {{$list[$i]->name}} {{$list[$i]->date}}
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Цена</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for($j = 0; $j < count($list[$i]->products); $j++)
                                        <tr>
                                            <th scope="row">{{$list[$i]->products[$j]->name}}</th>
                                            <td>{{$list[$i]->products[$j]->price}}</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="col-6">
                    <div id="intro">
                        <div class="card block_margin">
                            <div class="card-body">
                                <form >
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Наименование">
                                        <small id="emailHelp" class="form-text text-muted">Введите название продукта</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Цена">
                                        <small id="emailHelp" class="form-text text-muted">Введите предполагаемую цену продукта</small>
                                    </div>

                                    <div class="block_margin">
                                        <button style="width: 100%" type="submit" name="button" class="btn btn-success">Добавить товар</button>
                                    </div>

                                </form>

                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                {{$list[count($list)-1]->name}} {{$list[count($list)-1]->date}}
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Наименование</th>
                                        <th scope="col">Цена</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for($i = 0; $i < count($list[count($list)-1]->products); $i++)
                                        <tr>
                                            <th scope="row">{{$list[count($list)-1]->products[$i]->name}}</th>
                                            <td>{{$list[count($list)-1]->products[$i]->price}}</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>




                    <div class="block_margin">
                        <button style="width: 100%" type="submit" id="submit" name="button" class="btn btn-success">Создать список</button>
                    </div>

                </div>

            </div>



        </div>
    </div>



    </body>
</html>

<style>
    .block{
        margin-top: 5%;
        margin-left: 10%;
        margin-right: 10%;
    }

    .block_margin{
        margin-top: 2%;
        margin-bottom: 2%;
    }
</style>


<script>
    document.querySelector("#submit").onclick = function(){
        $("intro").style.display = "none"
    }
</script>

