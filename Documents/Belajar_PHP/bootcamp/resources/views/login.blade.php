<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>

</head>
<body>
    
    <form class="m-5" method="POST" action="/login/auth">
        @csrf
      <div class="mb-5">
        <label for="email" class="form-label">Email</label>
        <input type="Text" class="form-control" id="email" name="email">

        @error('email')
            <div class='alert alert-danger'>{{$message}}</div> 
        @enderror

      </div>
    
      <div class="mb-5">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">

        @error('password')
            <div class='alert alert-danger'>{{$message}}</div> 
        @enderror

      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>