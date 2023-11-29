<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
 <form method="post" action="{{ route('roles.store') }}">
  @csrf
 <div class="col-auto">
    <label for="name">Role Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="col-auto">
    <label for="name">Slug</label>
    <input type="text" class="form-control" name="slug">
  </div>

  <select name="permissions[]" multiple>
      <option value="create">Create</option>
      <option value="update">Update</option>
      <option value="delete">Delete</option>
      <option value="edit">Edit</option>
</select>

 

  <input type="submit" class="btn btn-primary" value="Submit">
 </form>
  </body>
</html>