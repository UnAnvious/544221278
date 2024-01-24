<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>erty</title>
</head>

<body>
    <h2>uiwfgiwgf</h2>
    <table border="1" cellspacing>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>

        @foreach ($konsultan as $data)
        <tr>
            <td>{{$data -> userID}}</td>
            <td>{{$data -> nama}}</td>
            <td>{{$data -> jenis_kons}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
