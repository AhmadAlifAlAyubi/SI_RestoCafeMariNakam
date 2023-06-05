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
            <th>ID Penilaian Cafe</th>
            <th>ID Pembeli</th>
            <th>ID Cafe</th>
            <th>ID Kriteria Cafe</th>
            <th>Nilai Penilaian Cafe</th>
        </tr>
        @foreach ($penilaiancafe as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Penilaian_Cafe }}
                </td>
                <td>
                    {{ $data->ID_Pelanggan }}
                </td>
                <td>
                    {{ $data->ID_Cafe }}
                </td>
                <td>
                    {{ $data->ID_Kriteria_Cafe }}
                </td>
                <td class="text-center">
                    {{ $data->Nilai_Penilaian_Cafe }}
                </td>
        @endforeach
    </table>

</body>

</html>
