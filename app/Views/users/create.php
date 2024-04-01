<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User</title>
</head>

<body>
    <h1>Add User</h1>
    <form action="/users/store" method="post">
        <label>Name:</label>
        <input type="text" name="name"><br>
        <label>Email:</label>
        <input type="email" name="email"><br>
        <label>Phone:</label>
        <input type="text" name="phone"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>