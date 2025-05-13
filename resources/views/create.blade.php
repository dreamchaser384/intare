<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> you can insert information down below</h1>
        <fieldset>
        <form action="{{route('store')}}"method="post">
         @method('post')
         @csrf
            

<label>name</label>
<input type ="text"placeholder="name"name="name"><br><br>

<label>email</label>
<input type ="text"placeholder="email"name="email"><br><br>

<label>address</label>
<input type ="text"placeholder="address"name="address"><br><br>

<label>gender</label>
<input type ="text"placeholder="gender"name="gender"><br><br>

<label>age</label>
<input type ="text"placeholder="age"name="age"><br><br>

<label>save data</label>
<button type="submit">save</button>
</fieldset>        
</form>
</div>
</body>
</html>