
<html>
<head>
    <title>tambah</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr> 
                <td>jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
      
       include_once("koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO siswa(nama,kelas,jurusan,alamat) VALUES('$name','$kelas','$jurusan','$alamat')");

        echo "User added successfully. <a href='index.php'>View siswa</a>";
    }
    ?>
</body>
</html>