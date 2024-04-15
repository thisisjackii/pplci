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
    <h1>Tabel Mahasiswa SQL</h1>

    <!-- Search Feature -->
    <div class="search-container">
        <h2>Search Mahasiswa</h2>
        <form method="post" action="<?= base_url('search/') ?>">
            <input type="text" placeholder="Search by Name" name="search_query">
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- Create New Record Form -->
    <div>
        <h2>Create New Mahasiswa</h2>
        <form method="post" action="<?= base_url('create/') ?>">
            <label for="nama">ID:</label>
            <input type="text" id="nim" name="nim" required>
            <label for="nama">Name:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="umur">Age:</label>
            <input type="text" id="umur" name="umur" required>
            <button type="submit">Create</button>
        </form>
    </div>

    <!-- Table View -->
    <table>
        <h2>Table View</h2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['umur']; ?></td>
                <td>
                    <a href="<?php echo base_url('view/' . $row['nim']); ?>">View</a>
                    |
                    <a href="<?php echo base_url('update/' . $row['nim']); ?>">Update</a>
                    |
                    <a href="<?php echo base_url('delete/' . $row['nim']); ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>