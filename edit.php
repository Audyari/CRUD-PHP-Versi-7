<?php 

include('connection.php');

$id = $_POST['id']; // Untuk mengambil id yang dilempar dari form list.php

$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE id='$id' LIMIT 1"); //mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo"<pre>";
var_dump($result);

?>

<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h2>Edit Data</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $result[0]['id']?>"/>
            <label>Nama</label><br/>
            <input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/>
            <br/><br/>
            <label>Alamat</label><br/>
            <textarea name="alamat" cols="30" rows="10"/><?php echo $result[0]['alamat']?></textarea>
            <br/><br/>
            <label>Umur</label><br/>
            <input type="text" name="umur" value="<?php echo $result[0]['umur']?>"/>
            <br/><br/>
            <label>Jenis Kelamin</label><br/>
            <select name="jenis_kelamin">
                <option value="L" <?php echo ($result[0]['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>Pria</option>
                <option value="P" <?php echo ($result[0]['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>Wanita</option>
            </select>
            <br/><br/>
            <button type="submit">Perbaharui</button>
        </form>
    </body>
</html>