<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>you are allowed to create your product by inserting its details in form below</h1>
        <fieldset>
            <form action="{{route('postp')}}"method="post">
                
                @csrf
         <label>name</label>
    <input type="text"placeholder="productname"name="name"><br><br> 

    <label>code</label>
    <input type="text"placeholder="productcode"name="code"><br><br>

    <label>price</label>
    <input type="text"placeholder="product price"name="price"><br><br>

    <label>done</label>
    <button type="submit">done</button>

</fieldset>
</div>
</body>
</html>