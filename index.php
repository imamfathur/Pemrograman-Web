 <?php
 session_start();
 require_once("koneksi.php");

$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>

<head>
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body style="background: url(boston.jpg);color:white">
</head>
<center>

    <h1 style="font-family: Arial, Helvetica, sans-serif;">Data Mahasiswa</h1>
    


<a href="login.php"><input type="submit" value="Masuk" class="btn btn-success btn-lg" style="width: 100px;height: 35px"></a>



<br><br><br><br>
    <table class="table">
  <tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Kota</th>
  </tr>

  <?php

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
   
?>
  <tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nim'] ?></td>
    <td><?= $row['kota'] ?></td>
  </tr>
<?php
    }
} 
$conn->close();

?>



