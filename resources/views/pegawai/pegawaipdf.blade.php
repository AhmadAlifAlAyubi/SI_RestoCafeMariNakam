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

    <h2>Tabel Pegawai</h2>

    <table>
        <tr>
            <th>ID User</th>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Pegawai</th>
        </tr>
        @foreach ($pegawai as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_User }}
                </td>
                <td>
                    {{ $data->ID_Pegawai }}
                </td>
                <td>
                    {{ $data->Nama_Pegawai }}
                </td>
                <td>
                    {{ $data->Jenis_Kelamin }}
                </td>
                <td class="text-center">
                    {{ $data->Alamat_Pegawai }}
                </td>
        @endforeach
    </table>

</body>

</html>
