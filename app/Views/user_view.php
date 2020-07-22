<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <p>
        <a href="<?= base_url('User/add_new') ?>">Tambah Data</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $row) : ?>
                <tr>
                    <td> <?= $row['user_id']; ?> </td>
                    <td> <?= $row['user_nama']; ?> </td>
                    <td> <?= $row['user_email']; ?> </td>
                    <td>
                        <a href="/user/edit/<?= $row['user_id']; ?>">Edit</a>
                        <a href="/user/delete/<?= $row['user_id']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>