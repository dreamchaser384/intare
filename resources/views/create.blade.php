<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"href="\create.css">

</head>
<body>
    <div class="create">
        <h1>you are allowed to create your product by inserting its details in the form  you see below </h1>
        <fieldset>
            <form action="{{route('postp')}}"method="post"style="position:absolute;top:190px;">
                
                @csrf
         <label>name</label>
    <input type="text"placeholder="productname"name="name"style="width:1000px;"><br><br> 

    <label>code</label>
    <input type="text"placeholder="productcode"name="code"style="width:1000px;"><br><br>

    <label>price</label>
    <input type="text"placeholder="product price"name="price"style ="width:1000px;"><br><br>

    <label>done</label>
    <button type="submit"style ="width:100px;">done</button>

</fieldset>
</div>
</body>
</html>