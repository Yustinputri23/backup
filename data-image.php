<?php
session_start();
include 'db.php';

if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>'; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB GALERI FOTO</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- header -->
     <header>
        <div class="container">
            <h1><a href="dashboard.php">WEB Galeri Foto</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-image.php">Data foto</a></li>
                <li><a href="keluar.php">keluar</a></li>
            </ul>
        </div>
     </header>
     <!-- content -->
      <div class="section">
        <div class="container">
            <h3>galeri foto</h3>
            <div class="box">
                <p><a href="tambah-image.php">tambah data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>katagori</th>
                            <th>Nama user</th>
                            <th> Nama foto</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>status</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                </table>
                <?php
                $no = 1;
                $user = $_SESSION['a_global']->admin_id;
                $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE admin_id = '$user");
                if(mysqli_num_rows($foto) > 0){
                    while($row = mysqli_fetch_array($foto)){
                        ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $row['category_name']?></td>
                            <td><?php echo $row['admin_name']?></td>
                            <td><?php echo $row['image_name']?></td>
                            <td><?php echo $row['image_description']?></td>
                            <td><a href="foto/<?php echo $row ['image']?>" target="_blank"><img src="foto/<?php echo $row['image']?>" width="50px"></a></td>
                            <td><?php echo ($row['image_status'] == 0)? 'tidak aktif':'aktif'; ?></td>
                            <td><a href="edit-image.php?id=<?php echo $row['image_id'] ?>" onclick="return confrim </td>
                        </tr>
                    }}
                
            </div>
        </div>
      </div>
      <!-- footer -->
 <footer>
    <div class="container">
        <small>copyright</small>
    </div>
 </footer>

</body>
</html>