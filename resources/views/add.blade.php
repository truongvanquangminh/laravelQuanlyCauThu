<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm cầu thủ</title>
    <style>
        p {
            color: red;
        }

    </style>
</head>

<body>

    <form action="{{route('add')}}" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name"><br>
        <label for="">Age: </label>
        <input type="text" name="age"><br>
        <label for="">National: </label>
        <input type="text" name="national"><br>
        <label for="">Position: </label>
        <input type="text" name="position"><br>
        <label for="">Salary: </label>
        <input type="text" name="salary"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>
