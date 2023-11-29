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
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Permission</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <a class="btn btn-primary" href="{{ route('users.create') }}"> Create</a>

    @forelse ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{ $user->name }}</td>
      <td> {{ $user->email }} </td>
      <td>Admin</td>
      <td>create</td>
      <td>
        <a class="btn btn-primary" href="{{ route('users.edit', $user) }}"> Edit</a>
        <a class="btn btn-success" href="{{ route('users.show', $user) }} "> Show</a>
        <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ route('users.destroy', $user->id) }}"> Delete</a>
      </td>
    </tr>
    @empty
        <h2> No Data </h2>
    @endforelse
   
  </tbody>
</table>
  </body>
</html>