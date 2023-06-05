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

    <h2>Tabel Kriteria Restoran</h2>

    <table>
        <tr>
            <th>ID Kriteria Restoran</th>
            <th>Nama Kriteria Restoran</th>
        </tr>
        @foreach ($kriteriaresto as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Kriteria_Restoran }}
                </td>
                <td>
                    {{ $data->Nama_Kriteria_Restoran }}
                </td>
        @endforeach
    </table>

</body>

</html>
