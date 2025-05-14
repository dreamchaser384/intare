<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="\edit.css">
</head>
<body>
    <div class="edit">
    <fieldset>
        <h1>you can edit product info</h1>
<form action="{{route('update',$data->id)}}"method="post">
    @method('put')
    @csrf
    <label>name</label>
    <input type="text"placeholder="name"name="name"value="{{$data->name}}"><br><br>

    <label>email</label>
    <input type="text"placeholder="code"name="code"value="{{$data->code}}"><br><br>

    <label>password</label>
    <input type="text"placeholder="price"name="price"value="{{$data->price}}"><br><br>

    <label>send data</label>
    <button type="submit">send data</button><br><br> 
    <label>go back</label>
    <ul>
        <li><a href="{{route('status')}}" style="background-color:purple;color:white;">go back</a></li>
</ul>

</fieldset>
</div>
</body>
</html>