<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
    <div class="container">
        <form action="/users/authenticate" method="POST">
            @csrf
            <label>Email: </label>
            <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}"><br>
            @error('email')
            <p>Email is required</p>
            @enderror
            <label>Password: </label>
            <input type="text" name="password" id="password" class="form-control" value="{{old('password')}}"><br>
            @error('password')
            <p>Password is required</p>
            @enderror
            <input type="submit" value="LOG IN" class="btn btn-primary"><br>
            <a href="/register">Dont have a acc click here!!!</a>
        </form>
    </div>
</body>
</html>