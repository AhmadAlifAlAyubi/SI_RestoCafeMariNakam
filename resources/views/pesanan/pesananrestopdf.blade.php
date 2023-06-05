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

    <h2>Tabel Pesanan Cafe</h2>

    <table>
        <tr>
            <th>ID Pesanan Restoran</th>
            <th>ID Pelanggan</th>
            <th>ID Restoran</th>
            <th>ID Makanan</th>
            <th>ID Minuman</th>
            <th>Jumlah Makanan</th>
            <th>Jumlah Minuman</th>
            <th>Tanggal Pesan</th>
            <th>Total Harga</th>
        </tr>
        @foreach ($pesananrestoran as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Pesanan_Restoran }}
                </td>
                <td>
                    {{ $data->ID_Pelanggan }}
                </td>
                <td>
                    {{ $data->ID_Restoran }}
                </td>
                <td>
                    {{ $data->ID_Makanan }}
                </td>
                <td>
                    {{ $data->ID_Minuman }}
                </td>
                <td>
                    {{ $data->Jumlah_Makanan }}
                </td>
                <td>
                    {{ $data->Jumlah_Minuman }}
                </td>
                <td>
                    {{ $data->Tanggal_Pesanan }}
                </td>
                <td class="text-center">
                    {{ $data->Total_Harga }}
                </td>
        @endforeach
    </table>

</body>

</html>
