<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style type="text/css">
        table {
            width: 800px;
            margin: auto;
            text-align: center;
        }

        tr {
            border: 1px solid;
        }

        th {
            border: 1px solid;
        }

        td {
            border: 1px solid;
        }

        h1 {
            text-align: center;
            color: red;
        }

        #button {
            margin: 2px;
            margin-right: 10px;
            float: right;
        }

    </style>
</head>

<body>
    <table id="datatable" style="border: 1px solid">
        <h1>Quản lý cầu thủ</h1>
        <thead>
            <tr role="row">
                <th>ID</th>
                <th>Tên cầu thủ</th>
                <th>Tuổi</th>
                <th>Quốc tịch</th>
                <th>Vị trí</th>
                <th>Lương</th>
                <th style="width: 7%;">Edit</th>
                <th style="width: 10%;">>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr role="row">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->national }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->salary }} </td>
                    <form action="{{ route('destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><a href="{{ route('show', $item->id) }}">Edit</a></td>

                        <td><button type="submit" href=""> Delete</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="8">
                    <a href="{{ route('create') }}"><button id="button">Thêm cầu thủ</button></a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>
