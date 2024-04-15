<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
    <style>
    /* Add your CSS styles here */
    .update-form {
        margin-bottom: 20px;
    }

    .update-form input[type=text] {
        padding: 6px;
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .update-form button {
        padding: 6px;
        margin-top: 8px;
        margin-bottom: 8px;
    }
    </style>
</head>

<body>
    <h1>Update Mahasiswa</h1>

    <div class="update-form">
        <form method="post" action="<?= base_url('update/' . $mahasiswa['nim']) ?>">
            <label for="nama">Name:</label>
            <input type="text" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>" required>
            <label for="umur">Age:</label>
            <input type="text" id="umur" name="umur" value="<?= $mahasiswa['umur'] ?>" required>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>