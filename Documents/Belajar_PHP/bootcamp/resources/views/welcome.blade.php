<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
             
              @can('is_admin')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('addBook')}}">Add Book</a>
              </li>
              @endcan
            </ul>
            <div class="d-flex">
                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Logout</button>
                    </form>
                    @else
                        <a href="/login" class="btn btn-outline-success">Login</a>
                @endauth

              
            </div>
          </div>
        </div>
      </nav>

<div class="d-flex m-5">

@foreach($bookss as $book)
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$book->bookTittle}}</h5>
            <p class="card-text">{{$book->author}}</p>
            <a href="{{route('bookDetail', ['id'=>$book->id])}}" class="btn btn-primary">See more detail</a>
            
            <div class="mt-3">
                <a href="{{route('editBook', ['id'=>$book->id])}}" class="btn btn-success">Update</a>

                <form action="{{route('deleteBook', ['id'=>$book->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </div>

        </div>
    </div>
@endforeach
</div>

<form action="/sendMail">
  <div class="mb-3">
    <label for="from" class="form-label">From</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="from">
  </div>

  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>