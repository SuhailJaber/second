@@ -0,0 +1,22 @@
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>

<body>
    <center>
        <h2>Tasks:</h2>
        <ul>
            @foreach ($tasks as $task)
            <li>{{$task}}</li>
            @endforeach
        </ul>
    </center>
</body>

</html>