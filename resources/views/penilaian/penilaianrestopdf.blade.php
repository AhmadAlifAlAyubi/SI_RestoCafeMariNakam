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

    <h2>Tabel Penilaian Cafe</h2>

    <table>
        <tr>
            <th>ID Penilaian Restoran</th>
            <th>ID Pembeli</th>
            <th>ID Restoran</th>
            <th>ID Kriteria Restoran</th>
            <th>Nilai Penilaian Restoran</th>
        </tr>
        @foreach ($penilaianresto as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Penilaian_Restoran }}
                </td>
                <td>
                    {{ $data->ID_Pelanggan }}
                </td>
                <td>
                    {{ $data->ID_Restoran }}
                </td>
                <td>
                    {{ $data->ID_Kriteria_Restoran }}
                </td>
                <td class="text-center">
                    {{ $data->Nilai_Penilaian_Restoran}}
                </td>
        @endforeach
    </table>

</body>

</html>
