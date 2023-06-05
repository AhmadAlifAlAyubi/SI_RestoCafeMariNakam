<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
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

    <h2>Tabel Cafe</h2>

    <table>
        <tr>
            <th>ID User</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
        </tr>
        @foreach ($user as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_User }}
                </td>
                <td>
                    {{ $data->Username }}
                </td>
                <td>
                    {{ $data->Password }}
                </td>
                <td class="text-center">
                    {{ $data->Pilihan }}
                </td>
        @endforeach
    </table>

</body>

</html>
