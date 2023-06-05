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

    <h2>Tabel Makanan Cafe</h2>

    <table>
        <tr>
            <th>ID Cafe</th>
            <th>ID Makanan</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Deskripsi Makanan</th>
        </tr>
        @foreach ($makanancafe as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Cafe }}
                </td>
                <td>
                    {{ $data->ID_Makanan }}
                </td>
                <td>
                    {{ $data->Nama_Makanan }}
                </td>
                <td>
                    {{ $data->Harga_Makanan }}
                </td>
                <td class="text-center">
                    {{ $data->Deskripsi_Makanan }}
                </td>
        @endforeach
    </table>

</body>

</html>
