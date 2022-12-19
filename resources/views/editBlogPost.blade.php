<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPDATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset("css/write.css")}}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-4 p-4 px-5 card shadow">
    <form action="{{route('update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 style="text-align: center">Create Your Post</h2>
        <div class="form-group p-2">
          <input type="text" value="{{$post->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required>
          <small id="emailHelp" class="form-text text-muted">The topic or heading of your post</small>
        </div>

        <div class="form-group p-2">
          <textarea type="text" class="form-control rounded-0"  name="description" id="" cols="50" rows="15" required> {{$post->description}}</textarea>
        </div>

        <div class="form-check p-2">
            <label class="form-label" for="customFile">Upload Image</label>
            <input type="file" class="form-control" name="file_path" />
        </div>

        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_id" value="{{auth()->user()->id}}" required hidden>

        <button type="submit" class="btn btn-primary my-3 mx-3">Submit</button>
    </form>
</div>

</body>
</html>
