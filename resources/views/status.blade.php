<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"href="\status.css">

</head>
<body>
    <div class="status">

    <table border="1" class="ttt">
        <thead>
            <tr><th>id</th>
            <th>name</th>
            <th>code</th>
            <th>price</th>
            <th>edit</th>
            <th>delete</th>
            <th>logout</th>
</thead>
<tbody>
    @foreach($status as $statu)
    <tr>
    <td>{{$statu->id}}</td>
    <td>{{$statu->name}}</td>
    <td>{{$statu->code}}</td>
    <td>{{$statu->price}}</td>
    <td><a href="{{route('edit',$statu->id)}}"style="background-color:yellow;color:black;">edit product info</a></td>
    <td>
        <form action="{{route('delete',$statu->id)}}"method="post">
            @csrf
        @method('delete')
            <input type="submit"value="delete"style="background-color:red;color:white;">
        

</form>
    
</td>
<td><a href="{{route('logout')}}"style ="background-color:green;color:white;">logout</td>
</tr>
    @endforeach

</tbody>
<div>
</body>
</html>