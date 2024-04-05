<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Mahasiswa</title>
    <style>
    /* Add your CSS styles here */
    </style>
</head>

<body>
    <h1>View Mahasiswa</h1>
    <div>
        <p>ID: <?php echo $mahasiswa['nim']; ?></p>
        <p>Name: <?php echo $mahasiswa['nama']; ?></p>
        <p>Age: <?php echo $mahasiswa['umur']; ?></p>
    </div>
</body>

</html>