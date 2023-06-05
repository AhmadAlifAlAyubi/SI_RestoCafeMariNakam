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

    <h2>Tabel Pembeli</h2>

    <table>
        <tr>
            <th>ID User</th>
            <th>ID Pembeli</th>
            <th>Nama Pembeli</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Pembeli</th>
        </tr>
        @foreach ($pembeli as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_User }}
                </td>
                <td>
                    {{ $data->ID_Pelanggan }}
                </td>
                <td>
                    {{ $data->Nama_Pelanggan }}
                </td>
                <td>
                    {{ $data->Jenis_Kelamin }}
                </td>
                <td class="text-center">
                    {{ $data->Alamat_Pelanggan }}
                </td>
        @endforeach
    </table>

</body>

</html>
