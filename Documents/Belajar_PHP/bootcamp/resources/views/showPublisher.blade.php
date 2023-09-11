<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Show Publisher</title>
</head>
<body>

<div class="d-flex m-5">

@foreach($publishers as $publisher)
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$publisher->publisherName}}</h5>>
            <a href="{{route('publisherDetail', ['id'=>$publisher->id])}}" class="btn btn-primary">See more detail</a>
            
            <div class="mt-3">
                <a href="{{route('editPublisher', ['id'=>$publisher->id])}}" class="btn btn-success">Update</a>

                <form action="{{route('deletePublisher', ['id'=>$publisher->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
                
            </div>

        </div>
    </div>
@endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>
</html>