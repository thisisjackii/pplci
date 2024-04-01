<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Mahasiswa</title>
    <style>
    /* Add your CSS styles here */
    table {
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <!-- AA BB CC DD EE FF table -->
    <h1>Tabel Huruf</h1>
    <table>
        <caption>Tabel Huruf</caption>
        <tbody>
            <?php
            $a = 65; // ASCII code for 'A'
            $table_data = ''; // Initialize an empty string to store table data
            for ($row = 0; $row < 2; $row++) {
                $table_data .= "<tr>";
                for ($col = 0; $col < 3; $col++) {
                    $char = chr($a);
                    $table_data .= "<td>{$char}{$char}</td>";
                    $a++;
                }
                $table_data .= "</tr>";
            }
            ?>
            <?= $table_data ?>
        </tbody>
    </table>

    <h1>Student List</h1>
    <table>
        <caption>Student List</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $students = [];
            for ($i = 1; $i <= 10; $i++) {
                $students[] = ['id' => $i, 'name' => 'Student ' . $i];
            }


            foreach ($students as $student) :
            ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Tabel Mahasiswa SQL</h1>
    <table>
        <caption>Tabel Mahasiswa SQL</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['umur']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>