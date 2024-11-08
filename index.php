d<!-- search -->
<div class="search">
    <div class="container">
        <form action="galeri.php">
            <input type="text" name="search" placeholder="cari foto" />
            <input type="submit" name="cari" value="cari foto" />
</form>
</div>
</div>

<!-- category -->
<div class="section">
    < div class="container">
    <h3>kategori</h3>
    <div class="box">
        <?php
        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
        if(mysqli_num_rows($kategori) > 0){
            while($k = mysqli_fetch_array($kategori)){
                ?>
            }
            <a href ="galeri.php?kat=<?php echo $k['category_id'] ?>">
            <div class="col-5>
            <img src="img/icon-kategori.png" width="50px" style="margin-bottom:5px;"/>
            <p><?php echo $k['category_name'] ?></p>
        </div>
        </a>
        <?php }} else{ ?>
            <p>kategori tidak ada</p>
            <?php }?>
        </div>
        </div>
        </div>
<!-- new product -->
<div class="container">
    <h3>foto terbaru</h3>
    <div class="box">
        <?php
        $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status = 1 ORDER BY image_id DESC LIMIT 8");
        if(mysqli_num_rows($foto) > 0){
            ?>
            <a href="detail-image.php?id=<?php echo $p['image_id'] ?>">
            <div class = "col-4">
                <img src="foto/><?php echo $p['image'] ?> height="150px" />
                <p class="nama"><?php echo substr($p['image_name'], 0, 30) ?></p>
                <p class="admin"> nama user :<?php echo $p['admin_name'] ?></p>
                <p class="nama"><?php echo $p['date created'] ?></p>
        </div>
        </a>
        <?php }}else{ ?>
            <p>Foto tidak ada</p>
            <?php } ?>
        </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="container">
                <small>Copyright &copy; 2024 - Web Galeri Foto.</small>
        </div>
        </footer>
        </body>
        </html>
        

        }

