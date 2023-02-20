<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сообщения</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container pt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
                <form class="border p-3" id="message_form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Тема письма</label>
                        <input type="text" class="form-control" id="message_title" placeholder="Введите тему письма" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Текст</label>
                        <textarea class="form-control" id="message_text" rows="3" name="text"></textarea>
                    </div> 
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container border p-3">
        <div class="row">
            <div class="col-md-8 col-sm-12 table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Текст</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">
                      
                    </tbody>
                </table>
            </div>
        </div>
        <form id="update_form">
            @csrf
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>