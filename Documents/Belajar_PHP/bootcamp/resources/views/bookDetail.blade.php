<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="d-flex m-5">


    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$bookr->bookTittle}}</h5>
            <p class="card-text">{{$bookr->author}}</p>
            <a href="{{route('publisherDetail', ['id' => $bookr->publisherId])}}"class="card-text">{{$bookr->publishert->publisherName}}</a>
            <p class="card-text">{{$bookr->price}}</p>
            <p class="card-text">{{$bookr->releaseDate}}</p>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>