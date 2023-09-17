<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Add Publisher</title>
    
</head>
<body>

<p class="h1 m-5">Add Publisher</p>

    
<form class="m-5" method="POST" action="/store/publisher" enctype="multipart/form-data">
    @csrf
  <div class="mb-5">
    <label for="publisher-name" class="form-label">Publisher Name</label>
    <input type="text" class="form-control" id="publisher-name" name="publisherName">

    @error('publisherName')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-5">
    <label for="image" class="form-label">Publisher Image</label>
    <input type="file" class="form-control" id="image" name="image">

    @error('image')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>

</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>