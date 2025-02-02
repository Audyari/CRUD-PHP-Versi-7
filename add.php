<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <form action="insert.php" method="post">
            <label>Nama:</label><br/>
            <input type="text" name="nama" required/><br/><br/>
            
            <label>Alamat:</label><br/>
            <textarea name="alamat" cols="30" rows="10" required/></textarea><br/><br/>
            
            <label>Umur:</label><br/>
            <input type="text" name="umur" required/><br/><br/>
            
            <label>Jenis Kelamin:</label><br/>
            <select name="jenis_kelamin" required>
                <option value="L">Pria</option>
                <option value="P">Wanita</option>
            </select><br/><br/>
            
            <button type="submit">Tambah</button>
        </form>
    </body>
</html>