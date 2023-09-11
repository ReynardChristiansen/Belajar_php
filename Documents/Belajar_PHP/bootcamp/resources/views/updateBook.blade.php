<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Update Book</title>
</head>
<body>
    <h1>update book</h1>

    <form class="m-5" method="POST" action="{{route('updateBook', ['id' => $book->id])}}">
        @csrf
        @method('PATCH')
      <div class="mb-5">
        <label for="book-tittle" class="form-label">Book Tittle</label>
        <input type="text" class="form-control" id="book-tittle" name="bookTittle" value="{{$book->bookTittle}}">
      </div>
    
      <div class="mb-5">
        <label for="author" class="form-label">Author</label>
        <input type="Text" class="form-control" id="author" name="author" value="{{$book->author}}">
      </div>
    
      <div class="mb-5">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{$book->price}}">
      </div>
    
      <div class="mb-5">
        <label for="release-date" class="form-label">Release Date</label>
        <input type="date" class="form-control" id="release-date" name="releaseDate" value="{{$book->releaseDate}}">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>