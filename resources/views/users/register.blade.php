<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="/users" method="POST">
            @csrf
            <label>Name: </label>
            <input type="text" name="name" id="name" class="form-control" value={{old('name')}}><br>
            @error('name')
            <p>Name is required</p>
            @enderror
            <label>Password: </label>
            <input type="text" name="password" id="password" class="form-control" value={{old('password')}}><br>
            @error('password')
            <p>Password is required</p>
            @enderror
            <label>Confrim Password: </label>
            <input type="text" name="password_confirmation" id="cpassword" class="form-control"><br>
            @error('cpassword')
            <p>Name is required</p>
            @enderror
            <label>Email: </label>
            <input type="text" name="email" id="email" class="form-control" value={{old('email')}}><br>
            @error('email')
            <p>Email is required</p>
            @enderror
            <label>Confirm Email: </label>
            <input type="text" name="email_confirmation" id="cemail" class="form-control"><br>
            @error('cemail')
            <p>Name is required</p>
            @enderror
            <br>
            <input type="submit" value="Submit" class="btn btn-primary"><br><br>
            <input type="reset" value="Clear" class="btn btn-primary">
        </form>
    </div>
</body>
</html>