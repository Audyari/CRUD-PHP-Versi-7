<?php

include('connection.php');

$keyword = $_POST['keyword'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE nama LIKE '%$keyword%'");

$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<body>
    <a href="add.php">Tambah Data</a>

    <form action="search.php" method="POST">
        <input type="text" name="keyword" placeholder="Keyword .." value="<?= $_POST['keyword'] ?? '' ?>"/>
        <button type="submit">Search</button>
    </form>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?= $result['nama'] ?></td>
                <td><?= $result['alamat'] ?></td>
                <td><?= $result['umur'] ?></td>
                <td><?= $result['jenis_kelamin'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $result['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $result['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>