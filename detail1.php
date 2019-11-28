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
	<link rel="shortcut icon" href="css/images/favicon.ico" />
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
-->
    </style>
	<style type="text/css">
		body {
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
		}
		
		/* Table */
		.demo-table {
			border-collapse: collapse;
			font-size: 13px;
		}
		.demo-table th, 
		.demo-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 12px;
		}
		
		/* Table Header */
		.demo-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
		
		/* Table Body */
		.demo-table tbody td {
			color: #353535;
		}
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child,
		.demo-table tbody td:nth-child(4) {
			text-align: right;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #ffffff;
		}
		.demo-table tbody tr:hover td {
			background-color: #4ff738;
			border-color: #4ff738;
			transition: all .5s;
		}
		
		/* Table Footer */
		.demo-table tfoot th {
			background-color: #b7def7;
		}
		.demo-table tfoot th:first-child {
			text-align: left;
		}
		.demo-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	.style5 {font-size: 15px}
    </style>
	<style>
	/* Tombol lebih kecil */
.button.small{
  padding: 4px 12px;
}
/* Tombol lebih besar */
.button.large{
  padding: 12px 30px;
  text-transform: uppercase;
}
.button.large:active{
  top: 2px;
}
</style>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Search -->
		<div id="search">
			<div class="shell">
				<form action="#" method="get" accept-charset="utf-8">
					<div class="container">
						<input type="text" name="cari" class="selectbox" placeholder="Cari Barang nya Ganz..." />
					</div>
					<input class="search-button" type="submit" value="Submit" />
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
							<a href="#" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img3.jpg" alt="Slide Image 3" />
							<div class="slide-entry">
								<h2><font color="70ff00">Sayuran Segar</font></h2>
								<br />
								<br />
								<h3><font color="ffcf79" face="-1">Di Datangkan Langsung Dari Perkebunan</font></h3>
							</div>
							<a href="#" class="more" title="View More">View More</a>
						</li>
						<li>
							<img src="css/images/slide-img4.jpg" alt="Slide Image 4" />
							<div class="slide-entry">
								<h2><font color="#000000">Sapi Berkualitas Super</font></h2>
								<br />
								<h3><font color="#66a4df">Daging Sapi Enak</font></h3>
							</div>
							<a href="#" class="more" title="View More">View More</a>
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
								<h2>Kategori Sayur</h2>
								<div class="widget-entry">
									<ul>
										<li><a href="buah-lokal.php" title="Sayur Lokal"><span>Sayur Lokal</span></a></li>
										<li><a href="buah-lokal.php" title="Sayur Impor"><span>Sayur Impor</span></a></li>
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
										<li><a href="#" title="Contact Us"><span>Contact Us</span></a></li>
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
							<h2><span class="style4">Detail Keranjang Belanja</span><span class="title-bottom">&nbsp;</span></h2>
							<table width="200" height="200" class="demo-table" weight="500">
							<thead>
							  <tr>
								<th><center>No Pembelian</center></th>
								<th><center>Nama Barang</center></th>
								<th><center>Harga Satuan</center></th>
								<th><center>Quantity</center></th>
								<th><center>Sub Total</center></th>
								<th><center>Opsi</center></th>
							  </tr>
							  </thead>
							  <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "select sayur.id, sayur.nama_sayur, sayur.harga from sayur where sayur.id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no=1;
            ?>
                <tbody>
                <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['nama_sayur']; ?></center></td>
                <td><center><?php echo number_format($data['harga']); ?></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center><?php echo number_format($jumlah_harga); ?></center></td>
                <td><center><a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail1.php" class="btn btn-xs btn-success">Tambah</a> <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-warning">Kurang</a> <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=detail1.php" class="btn btn-xs btn-danger">Hapus</a></center></td>
                </tr>
				</tbody>
				
                <tfoot>
				<tr>
					<?php
                    //mysql_free_result($query);			
						}
							//$total += $sub;
						}?>  
                         <?php
				if($total == 0){
					echo '<tr><th colspan="7" align="center">Keranjang Kosong!</th></tr></table>';
					echo '<p><div align="right">
						<a href="index-sayur.php" class="btn btn-primary btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #ffffff;"><td colspan="4" align="center">
						<b>Total :</b></td><td colspan="4" align="right"<b>Rp. '.number_format($total,2,",",".").'</b></td></td></td></tr></table>
						<p><div align="right">
						<a href="index-sayur.php" class="small button"><font color="white">Belanja Lagi</font></a>
						<a href="checkout.php?total='.$total.'" class="small button"><font color="white">Check Out</font></a>
						</div></p>
					';
				}
				?>
				</tr>
				</tfoot>
						  </table>

							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Products -->
						
					</div>
					<!-- End Content -->
					
					<!-- Begin Right Sidebar -->
					<div id="right-sidebar" class="sidebar">
						<ul>
							<li class="widget products-box">
								<h2><font size="-1">Paling Banyak Dicari</font></h2>
								<div class="widget-entry">
									<ul>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='2' and id='7'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Bawang Merah">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='2' and id='8'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Bawang Putih">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='2' and id='9'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Jahe">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='2' and id='10'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Kentang">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='2' and id='11'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Timun">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">

													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='2' and id='12'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Wortel">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='3' and id='13'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Asparagus">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='3' and id='14'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Jamur">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='3' and id='15'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Paprika Kuning">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM sayur where kategori='3' and id='16'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk1.php?kd=<?php echo $data['id'];?>" title="Paprika Merah">
												<img src="css/images/<?php echo $data['gambar']; ?>" />
												<span class="info">
													<span class="title"><?php echo $data['nama_sayur']; ?></span>
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
		<<!-- Begin Footer -->
	  <div id="footer">
	    <div align="center" class="style5">Copyright &copy; 2017. Dark Reef | Made With ♥</div>
	  </div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>