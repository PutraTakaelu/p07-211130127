<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>Mahasiswa</th>
            <th>IPK</th>
            <th>Kategori Mahasiswa</th>
        </tr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $ipk = rand(10, 40) / 10;
            $kategori = '';

            //menentukan kategori berdasarkan ipk
            if ($ipk >= 3.5) {
                $kategori = "Cum Laude";
            } elseif ($ipk >= 3.0) {
                $kategori = "Sangat Baik";
            } elseif ($ipk >= 2.5) {
                $kategori = "Baik";
            } elseif ($ipk >= 2.0) {
                $kategori = "Cukup";
            } else {
                $kategori = "Perlu perbaikan";
            }

            echo "<tr>";
            echo "<td>Mahasiswa Ke-$i</td>";
            echo "<td>$ipk</td>";
            echo "<td>$kategori</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>