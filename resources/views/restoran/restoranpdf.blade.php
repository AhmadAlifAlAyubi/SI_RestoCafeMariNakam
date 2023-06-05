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
            <th>ID Restoran</th>
            <th>ID Pegawai</th>
            <th>Nama Restoran</th>
            <th>Alamat Restoran</th>
            <th>Rating Restoran</th>
        </tr>
        @foreach ($restoran as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Restoran }}
                </td>
                <td>
                    {{ $data->ID_Pegawai }}
                </td>
                <td>
                    {{ $data->Nama_Restoran }}
                </td>
                <td>
                    {{ $data->Alamat_Restoran }}
                </td>
                <td class="text-center">
                    {{ $data->Rating_Restoran }}
                </td>
        @endforeach
    </table>

</body>

</html>
