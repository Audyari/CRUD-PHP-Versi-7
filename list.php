

<?php 

include ('connection.php'); 

$query = mysqli_query($connect,"SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo"<pre>";
//var_dump($query);
//var_dump($results);
?>

<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<a href="add.php">Tambah Data</a>  
    
    <br/><br/>
   
   <form action="search.php" method="POST">
       <input type="text" name="keyword" placeholder="Keyword .." value="<?= isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" />
       <button type="submit">Search</button>
   </form>


    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        <?php foreach($results as $result) : ?>
        <tr>
            <td><?php echo array_search($result, $results) + 1?></td>
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['alamat']?></td>
            <td><?php echo $result['umur']?></td>
            <td><?php echo $result['jenis_kelamin']?></td>
            <td>
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $result['id']?>">
                    <button type="submit">Edit</button>
                </form>
            </td>
            <td>
                <form action="delete.php" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data dengan ID <?php echo $result['id']?>?')">
                    <input type="hidden" name="id" value="<?php echo $result['id']?>">
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>