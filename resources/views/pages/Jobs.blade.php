<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>We have {{$count}} results.</p>
    <table>
    <thead>
    <tr>
    <td>
    Sr. No
    </td>
    <td>
    Role
    </td>
    <td>
    Location
    </td>
    <td>
    Salary
    </td>
    </tr>
    </thead>
    <tbody>
    @foreach($jobs as $job)
    <tr>
    <td>{{$loop->iteration}}</td>
    <td>
       {{ $job->role}}
    </td>
    <td>
  {{  $job->location}}
    </td>
    <td>
  {{  $job->salary}}$
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>