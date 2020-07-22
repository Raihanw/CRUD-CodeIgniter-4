<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>

<body>
    <form action="/user/save" method="POST">
        <h3>Add User</h3>
        <p>
            <input type="text" name="user_id" placeholder="ID User"><br>
            <input type="text" name="user_nama" placeholder="Nama"><br>
            <input type="text" name="user_email" placeholder="E-mail"><br>
            <input type="password" name="user_pass" placeholder="Password">
        </p>
        <button type="submit">Save</button>
    </form>
</body>

</html>