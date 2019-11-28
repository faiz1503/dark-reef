<?php 
ob_start();
session_start();
error_reporting(0);
include "config/koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Dark Reef Department Store</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicons.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE 6]>
		<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
<!--
.style1 {
	font-size: 14px;
	color: #FFFFFF;
}
.style2 {
	color: #00FF00;
	font-size: 20px;
}
.style4 {color: #FFFFFF}
.style5 {font-size: 24px}
-->
    </style>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Search -->
		<div id="search">
			<div class="shell">
				<form action="proses.php" method="post" accept-charset="utf-8">
					<div class="container">
						<input type="text" name="search" class="selectbox" placeholder="Cari Barang nya Ganz..." />
					</div>
					<input class="search-button" type="submit" value="Submit" name="cari"/>
				</form>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Search -->
		<!-- Begin Header -->
		<div id="header" class="shell">
			<h1 id="logo"><img src="css/images/logos.png" alt="Dark Reef" />&nbsp;</h1>
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<div class="shell">
					<li>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</li>
					<li><a href="index.php" title="Home">Home</a></li>
					<li><a href="#" title="Account">Kontak</a></li>
					<li><a href="#" title="Contact">Tentang Kami</a></li>
					<?php
					  if (empty($_SESSION[username]))
						echo '<li><a href="login.php">Login</a></li>'; ?>
					<?php if (!empty($_SESSION[username])) 
					echo '<li><a href="#">Halo Selamat Datang, </a></li>'; ?>
					<?php
      				if (!empty($_SESSION[username]))
					echo '<li><a href="#">'?> <?php echo ucfirst ("$_SESSION[username]"); ?></a></li>
					<?php
      				if (!empty($_SESSION[username]))
					echo '<li><a href="detail.php" title="Contact">Keranjang</a></li>'?>				
				<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Navigation -->
		
		<!-- Begin Slider -->
		<div id="slider">
			<div class="slider-outer">
				<div class="slider-inner shell">
					<!-- Begin Slider Items -->
					<ul class="slider-items">
						<li>
							<img src="css/images/slide-img1.jpg" alt="Slide Image 1" />
							<div class="slide-entry">	
							</div>
						</li>
						<li>
							<img src="css/images/slide-img2.jpg" alt="Slide Image 2" />
							<div class="slide-entry">
								<h2><font color="white">Buah-Buahan Segar</font></h2>
								<h3><font color="#ffffff" face="Ravie" size="+2">Menyediakan Buah Segar Langsung Dari Kebun</font></h3>
							</div>
							<a href="index.php" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img3.jpg" alt="Slide Image 3" />
							<div class="slide-entry">
								<h2><font color="70ff00">Sayuran Segar</font></h2>
								<br />
								<br />
								<h3><font color="ffcf79" face="-1">Di Datangkan Langsung Dari Perkebunan</font></h3>
							</div>
							<a href="index-sayur.php" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img4.jpg" alt="Slide Image 4" />
							<div class="slide-entry">
								<h2><font color="#000000">Sapi Berkualitas Super</font></h2>
								<br />
								<h3><font color="#66a4df">Daging Sapi Enak</font></h3>
							</div>
							<a href="index-daging.php" class="more" title="View More">View More</a>
						</li>
						
					</ul>
					
					<!-- End Slider Items -->
					<div class="cl">&nbsp;</div>
					<div class="slider-controls">
						
					</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Slider -->
		
		<!-- Begin Main -->
		<div id="main">
			<!-- Begin Inner -->
			<div class="inner">
				<div class="shell">
					<!-- Begin Left Sidebar -->
					<div id="left-sidebar" class="sidebar">
						<ul>
							<li class="widget">
								<h2>Kategori Buah</h2>
								<div class="widget-entry">
									<ul>
										<li><a href="buah-lokal.php" title="Buah Lokal"><span>Buah Lokal</span></a></li>
										<li><a href="buah-lokal.php" title="Buah Impor"><span>Buah Impor</span></a></li>
									</ul>
								</div>
							</li>
							<li class="widget">
								<h2>Informasi</h2>
								<div class="widget-entry">
									<ul>
										<li><a href="#" title="About Us"><span>About Us</span></a></li>
										<li><a href="#" title="Privacy Policy"><span>Privacy Policy</span></a></li>
										<li><a href="#" title="Terms &amp; Conditions"><span>Terms &amp; Conditions</span></a></li>
										<li><a href="http://localhost/nge_chat/index.php" title="Chatting"><span>Pojok Chatting </span></a></li>
										<li class="last"><a href="#" title="Site Map"><span>Site Map</span></a></li>
									</ul>
								</div>
							</li>
							
							
						</ul>
					</div>
					<!-- End Sidebar -->
					
					<!-- Begin Content -->
					<div id="content">
						<!-- Begin Post -->
						<div class="post">
							<h2><span class="style2">Selamat Datang di Dark Reef</span><span class="title-bottom">&nbsp;</span></h2>
							<p class="style1">Online Shop Sayuran, Buahan dan Daging dimana website ini di khusus menjual produk kebutuhan bahan masakan untuk didapur. Misalnya menjual produk sayuran, buahan, daging dan lainnya. Dengan adanya toko online ini, dimungkinkan adanya kemudahan bagi consumer yang ingin berbelanja secara online tanpa harus pergi keluar dari rumah.</p>
						</div>
						<!-- End Post -->
						
						<!-- Begin Products -->
						<div id="products">
							<h2><span class="style4">Produk Terbaru</span><span class="title-bottom">&nbsp;</span></h2>
							
							<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='1' and id='1'");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
					<div class="product">
					<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Apel Fuji">
					<span class="title">Apel Fuji</span>
                        <span class="title"><?php echo $data['nama']; ?></span>
                        <img src="css/images/<?php echo $data['gambar']; ?>" />
						<span class="price"><span>Rp.</span> <?php echo number_format($data['harga'],2,",",".");?></span></a>
                <?php   
              }
              }   
              ?>	</span></span></a>
						</div>
						
						<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='1' and id='2'");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
					<div class="product">
					<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Apel Washington">
					<span class="title">Apel Washington</span>
                        <span class="title"><?php echo $data['nama']; ?></span>
                        <img src="css/images/<?php echo $data['gambar']; ?>" />
						<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
                <?php   
              }
              }   
              ?>	
			  </a>
						</div>
						
						<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='1' and id='3'");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
					<div class="product last">
					<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Kiwi">
					<span class="title">Kiwi</span>
                        <span class="title"><?php echo $data['nama']; ?></span>
                        <img src="css/images/<?php echo $data['gambar']; ?>" />
						<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
                <?php   
              }
              }   
              ?>	
			  </a>
						</div>
							<div class="cl">&nbsp;</div>
							
							
							<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='1' and id='4'");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
					<div class="product">
					<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Nenas">
					<span class="title">Nenas</span>
                        <span class="title"><?php echo $data['nama']; ?></span>
                        <img src="css/images/<?php echo $data['gambar']; ?>" />
						<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
                <?php   
              }
              }   
              ?>	
			  </a>
						</div>
						
							<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='1' and id='5'");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
					<div class="product">
					<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Alpukat">
					<span class="title">Alpukat</span>
                        <span class="title"><?php echo $data['nama']; ?></span>
                        <img src="css/images/<?php echo $data['gambar']; ?>" />
						<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
                <?php   
              }
              }   
              ?>	
			  </a>
						</div>
						
							<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='1' and id='6'");
	if(mysqli_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($data = mysqli_fetch_assoc($sql)){
                    ?>
					<div class="product last">
					<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Rambutan">
					<span class="title">Rambutan</span>
                        <span class="title"><?php echo $data['nama']; ?></span>
                        <img src="css/images/<?php echo $data['gambar']; ?>" />
						<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
                <?php   
              }
              }   
              ?>	
			  </a>
						</div>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Products -->
						
					</div>
					<!-- End Content -->
					
					<!-- Begin Right Sidebar -->
					<div id="right-sidebar" class="sidebar">
						<ul>
							<li class="widget products-box">
								<h2>Paling Banyak Dicari</h2>
								<div class="widget-entry">
									<ul>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='2' and id='7'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Buah Naga">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
			  							<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='2' and id='8'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Strawberry">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='2' and id='9'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Melon">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='2' and id='10'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Markisa">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='2' and id='11'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Pisang">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='2' and id='12'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Pepaya">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
									</ul>
									<div class="cl">&nbsp;</div>
								</div>
							</li>
							<li class="widget products-box">
								<h2>Produk Unggulan</h2>
								<div class="widget-entry">
									<ul>
									<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='3' and id='13'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Apel Royal Gala">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='3' and id='14'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Blueberry">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='3' and id='15'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Jeruk Valencia">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM buah where kategori='3' and id='16'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk.php?kd=<?php echo $data['id'];?>" title="Longan">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_buah']; ?></span>
													<span class="price"><span>Rp. </span><?php echo number_format($data['harga'],2,",",".");?></span>
												</span>
												<span class="cl">&nbsp;</span>
											</a>
										</li>
										<?php   
              }
              }   
              ?>							
									</ul>
									<div class="cl">&nbsp;</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- End Sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Inner -->
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
	  <div id="footer">
	    <div align="center" class="style5">Copyright &copy; 2017. Dark Reef | Made With ♥</div>
	  </div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>