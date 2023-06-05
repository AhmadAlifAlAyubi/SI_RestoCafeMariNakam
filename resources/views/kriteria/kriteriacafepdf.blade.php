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

    <h2>Tabel Kriteria Cafe</h2>

    <table>
        <tr>
            <th>ID Kriteria Cafe</th>
            <th>Nama Kriteria Cafe</th>
        </tr>
        @foreach ($kriteriacafe as $data)
            <tr>
                <td scope="data">
                    {{ $data->ID_Kriteria_Cafe }}
                </td>
                <td>
                    {{ $data->Nama_Kriteria_Cafe }}
                </td>
        @endforeach
    </table>

</body>

</html>
