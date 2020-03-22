<html>
    <head>
        <title>Data siswa</title>
    </head>
    <body>
        <center><h1>Data siswa SMK SEMAU</h1>
    <table border="1" width="80%"></center>
<tr>
    <th bgcolor = "aqua">NIS </th>
    <th bgcolor = "aqua">NAMA </th>   
    <th bgcolor = "aqua">JENIS KELAMIN </th>
    <th bgcolor = "aqua">KELAS </th>
    <th bgcolor = "aqua">ALAMAT </th>
    <th bgcolor = "aqua">TAMBAH</th>

    
</tr>
<?php
include "koneksi.php";
$query ="SELECT*FROM siswa";
$sql = mysqli_query($cennect, $query);
while($data = mysqli_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['Nama']."</td>";
    echo "<td>".$data['Kelas']."</td>";
    echo "<td>".$data['Jurusan']."</td>";
    echo "<td>".$data['Alamat']."</td>";
    echo "<td><BUTTON><a href='add.php?id=$data[id]'>Edit</a></BUTTON> |<BUTTON> <a href= 'hapu.php?id=$data[id]'>Delete</a></td></BUTTON></tr>";        
}
?>
</table>
</body>
</html>