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

    <h2>Tabel Minuman Restoran</h2>

    <table>
        <tr>
            <th>ID Restoran</th>
            <th>ID Minuman</th>
            <th>Nama Minuman</th>
            <th>Harga</th>
            <th>Deskripsi Minuman</th>
        </tr>
        @foreach ($minumanresto as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Restoran }}
                </td>
                <td>
                    {{ $data->ID_Minuman }}
                </td>
                <td>
                    {{ $data->Nama_Minuman }}
                </td>
                <td>
                    {{ $data->Harga_Minuman }}
                </td>
                <td class="text-center">
                    {{ $data->Deskripsi_Minuman }}
                </td>
        @endforeach
    </table>

</body>

</html>
