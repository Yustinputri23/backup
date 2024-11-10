<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEb GALERI FOTO</title>
</head>
<body>
    <!-- header -->
     <header>
        <div class="container ">
            <h1><a href="index.php">WEB GALERI FOTO</a> </h1>
            <ul>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
     </header>
<!-- content -->
 <div class="section">
    <div class="container">
        <h3>Registrasi Akun</h3>
        <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="Nama user" 
                class="input-control" required>

                <input type="text" name="user" placeholder="Username" 
                class="input-control" required>

                <input type="text" name="pass" placeholder="Password" 
                class="input-control" required>

                <input type="text" name="tlp" placeholder="Nomor Telpon" 
                class="input-control" required>

                <input type="text" name="email" placeholder="E-mailr" 
                class="input-control" required>

                <input type="text" name="almt" placeholder="alamat" 
                class="input-control" required>

                <input type="submit" name="submit" value="Submit" class="btn">

            </form>

            <?php
            
            if(isset($_POST['nama'])){

                $nama = ucwords($_POST['nama']);
                $username = $_POST['user'];
                $password = $_POST['pass'];
                $telpon = $_POST['tlp'];
                $mail = $_POST['email'];
                $alamat = ucwords($_POST['almt']);

                $insert = mysqli_query($conn, "INSERT INTO tb_admin
     VALUES (

                    null,
                    '".$nama."',
                    '".$username."',
                    '".$password."',
                    '".$telpon."',
                    '".$mail."',
                    '".$alamat."')
                
                
                
                 ");
                 if($insert){
                    echo '<script>alert("Registrasi Berhasil")</script>';
                    echo
                    '<script>window.location="login.php"</script>';
                 }else{
                    echo 'gagal '.mysqli_error($conn);
                 }
            }

            ?>
            </div>
            </div>
        </div>
    </div>
 </div>

 <!-- footer -->
  <footer>
    <div class="container">
        <small>Copyright</small>
    </div>
  </footer>
</body>
</html>