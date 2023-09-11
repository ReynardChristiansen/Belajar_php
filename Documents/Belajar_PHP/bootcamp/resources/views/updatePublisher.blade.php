<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Update Publisher</title>
</head>
<body>
    <h1>update Publisher</h1>

    <form class="m-5" method="POST" action="{{route('updatePublisher', ['id' => $publisher->id])}}">
        @csrf
        @method('PATCH')
      <div class="mb-5">
        <label for="publisher" class="form-label">Publisher Name</label>
        <input type="text" class="form-control" id="publisher" name="publisher" value="{{$publisher->publisherName}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>