<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div>
  
    <h1 style="background-color:black; color:white;"><span style="background-color:blue;color:white;"> you are welcome to our site where you are allowed to get different services</span> if you want to get access all you need to do is to insert your data in login form below</h1>

</div>
<fieldset style= "color:blue;border-radius: 20px;size:15px;">

<div >

<form action="{{route('post')}}"method="post"style="background-color:black;color:white;">
    @csrf
    <label>name</label> 

    <input type="text"placeholder="name"name="name"><br><br>

    <label>email</label>
    <input type="text"placeholder="email"name="email"><br><br>

    <label>password</label>
    <input type="text"placeholder="password"name="password"><br><br>

    <label>gender</label>
    <input type="text"placeholder="gender"name="gender"><br><br>
    <label>send data</label>
    <button type="submit">send data</button><br><br> 


</fieldset>
</div>
</div>
</body>
</html>