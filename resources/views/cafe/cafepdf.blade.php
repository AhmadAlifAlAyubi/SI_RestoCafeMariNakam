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
            <th>ID Cafe</th>
            <th>ID Pegawai</th>
            <th>Nama Cafe</th>
            <th>Alamat Cafe</th>
            <th>Rating Cafe</th>
        </tr>
        @foreach ($cafe as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Cafe }}
                </td>
                <td scope="data">
                    {{ $data->ID_Pegawai }}
                </td>
                <td>
                    {{ $data->Nama_Cafe }}
                </td>
                <td>
                    {{ $data->Alamat_Cafe }}
                </td>
                <td class="text-center">
                    {{ $data->Rating_Cafe }}
                </td>
        @endforeach
    </table>

</body>

</html>
