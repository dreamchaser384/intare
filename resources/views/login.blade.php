<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="\login.css">



</head>

<body>
    <div class="header" >
  
    <h1> <span style="background-color:white;color:black;">you are welcome to our site where you are allowed to get different services </span>if you want to get access all you need to do is to insert your data in login form below</h1>
</div>
    <div class="form">

<form action="{{route('post')}}"method="post"class="my">
    @csrf
    <label>name</label> 

    <input type="text"placeholder="name"name="name"><br><br>

    <label>email</label>
    <input type="text"placeholder="email"name="email"><br><br>

    <label>password</label>
    <input type="text"placeholder="password"name="password"><br><br>

    <label>gender</label>
    <input type="text"placeholder="gender"name="gender"> <br><br>

    <label>send data</label>
    <button type=" submit " style="position:absolute; background-color:blue;color:white;
    
    buttom=10px;">send data</button>
    <br><br> 
</form>

</div>
</body>
</html>