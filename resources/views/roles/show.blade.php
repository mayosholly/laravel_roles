<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Role</th>
      <th scope="col">Slug</th>
      <th scope="col">Permission</th>
    </tr>
  </thead>
  <tbody>
  <a class="btn btn-primary" href="{{ route('roles.create') }}"> Create</a>

    <tr>
      <th scope="row">{{$role->id}}</th>
      <td>{{ $role->name }}</td>
      <td> {{ $role->slug }} </td>
      <td>permission</td>
    </tr>
   
  </tbody>
</table>
  </body>
</html>