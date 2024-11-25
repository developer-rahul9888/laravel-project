<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>LeaderBoard Table</h2>

<table>
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th>Posts</th>
  </tr>

  @foreach($users as $user)
  <tr>
    <td>{{$user->username}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->posts_count}}</td>
  </tr>

  @endforeach
  
</table>

</body>
</html>

