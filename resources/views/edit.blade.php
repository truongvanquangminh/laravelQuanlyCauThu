<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
    <style>
        p {
            color: red;
        }

    </style>
</head>

<body>
    @foreach ($data as $item)
        <form action="{{ route('edit', $id) }}" method="post">
            @csrf
            <label for="">Name: </label>
            <input type="text" name="name" value="{{ $item->name }}"><br>
            <label for="">Age: </label>
            <input type="text" name="age" value="{{ $item->age }}"><br>
            <label for="">National: </label>
            <input type="text" name="national" value="{{ $item->national }}"><br>
            <label for="">Position: </label>
            <input type="text" name="position" value="{{ $item->position }}"><br>
            <label for="">Salary: </label>
            <input type="text" name="salary" value="{{ $item->salary }}"><br>
            <input type="submit" name="submit" value="Edit">
        </form>
    @endforeach
</body>

</html>
