<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post Yourself</h1>
    <form method = "POST" action = "{{action('JobsController@postYourself')}}">
    @csrf
    Name:<input name = "name" type = "text" >
    Salary<input name = "sal" type = "number" min = 1000>
    <select required name = "job">
    <option>Select preferred job type</option>
        <option value="Front End">Front End</option>
    <option value="Back End">Back End</option>
    <option value="Full Stack">Full Stack</option>
    <option value="ML">ML</option>
    </select> 

    <select required name = "location">
        <option value="Mumbai">Mumbai</option>
    <option value="Pune">Pune</option>
    <option value="Delhi">Delhi</option>
    <option value="Bangalore">Bangalore</option>
    </select>
    <input type = "submit"> 
    </form>
</body>
</html>