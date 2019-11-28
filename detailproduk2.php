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
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
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
	</style>
	
	<style>
@import url(http://fonts.googleapis.com/css?family=Roboto);
/*--------------------------------Button starts--------------------------------*/
.button-container {
  text-align: center;
}
.button {
	position: relative;
	background: currentColor;
	border: 1px solid currentColor;
	font-size: 1.1rem;
	color: #1c1a1a;
	margin: 2rem 0;
	padding: 0.75rem 3rem;
	cursor: pointer;
  -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
	transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
	overflow: hidden;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
	left: .1000px;
	width: 450px
	height: 1000px;
}
.button span {
  color: #fff;
  position: relative;
  z-index: 1;
}
.button::before {
  content: '';
  position: absolute;
  background: #071017;
  border: 50vh solid #1d4567;
  width: 30vh;
  height: 30vh;
  border-radius: 50%;
  display: block;
  top: 50%;
  left: 50%;
  z-index: 0;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.button:hover {
  color: #00d81c;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}
.button:active::before, .button:focus::before {
  -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
  opacity: 0;
}
.button:focus {
  outline: none;
}
/*--------------------------------Button ends--------------------------------*/
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

	<style>
	li{display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:30px;}
	.highlight, .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}
	</style>
	
	<script>
function highlightStar(obj) {
	removeHighlight();		
	$('li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $("li").index(obj)) {
			return false;	
		}
	});
}

function removeHighlight() {
	$('li').removeClass('selected');
	$('li').removeClass('highlight');
}

function addRating(obj) {
	$('li').each(function(index) {
		$(this).addClass('selected');
		$('#rating').val((index+1));
		if(index == $("li").index(obj)) {
			return false;	
		}
	});
}

function resetRating() {
	if($("#rating").val()) {
		$('li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $("#rating").val()) {
				return false;	
			}
		});
	}
}
</script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Search -->
		<div id="search">
			<div class="shell">
				<form action="proses2.php" method="post" accept-charset="utf-8">
					<div class="container">
						<input type="text" name="search" class="selectbox" placeholder="Cari Barang nya Ganz..." />
					</div>
					<input class="search-button" type="submit" value="Submit" name="submit" />
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
					<li>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
										<li><a href="sayur-lokal.php" title="Sayur Lokal"><span>Sayur Lokal</span></a></li>
										<li><a href="sayur-lokal.php" title="Sayur Impor"><span>Sayur Impor</span></a></li>
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
							<h2><span class="style4">Keranjang Anda</span><span class="title-bottom">&nbsp;</span></h2>
						<table class="demo-table" >
						<thead>
  					<tr>
                    <th><center>No</center></th>
					<th><center>Item</center></th>
					<th><center>Gambar</center></th>
					<th><center>Quantity</center></th>
					<th><center>Sub Total</center></th>
				</tr>
				</thead>
				<?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
                
    $total = 0;
    //mysql_select_db($database_conn, $conn);
    if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val) {
            $query = mysqli_query($koneksi, "select daging.id, daging.nama_daging, daging.gambar, daging.harga from daging where daging.id = '$key'");
            $data = mysqli_fetch_array($query);

            $jumlah_harga = $data['harga'] * $val;
            $total += $jumlah_harga;
            $no=1;
            ?>
				<tbody>
                <tr>
                <td><center><?php echo $no++; ?></center></td>
                <td><center><?php echo $data['nama_daging']; ?></center></td>
				<td><center><img src="css/images/<?php echo $data['gambar']; ?>" width="150" height="150" /></center></td>
                <td><center><?php echo number_format($val); ?></center></td>
                <td><center><?php echo number_format($jumlah_harga); ?></center></td>
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
					echo '<th colspan="5" align="center">Keranjang Kosong!</th>';
				} else {
					echo'
                        <th colspan="4"><b>Total : </th>
						<th>Rp. '.number_format($total,2,",",".").' </b></th>
					';
				}
				?>
				</tr>
				</tfoot>
				</table>
				<p align="right">
				<div class="container">
    			<div class="button-container">
    			<button type="button" class="button" onclick="window.location = 'detail2.php';">
				<span><font color="#ffffff">Details Keranjang</font></span></button>
  				</div>
				</div>
				</p>

						</div>
						
						<!-- ambil detail produk -->
						<div class="cl">&nbsp;</div>
						<div id="products">
							<h2><span class="style4">Detail Produk</span><span class="title-bottom">&nbsp;</span></h2>
					<table>
                    <tr>
					<?php                  
					$query = mysqli_query($koneksi, "SELECT * FROM daging WHERE id='$_GET[kd]'");
					$data  = mysqli_fetch_array($query);
					?>
                        <td rowspan="7"><img src="css/images/<?php echo $data['gambar']; ?>" width="150" height="150" /></td>
                        </tr>
						<tr>
                        <td></td>
                        <td size="200"><h3>Nama Produk</h3></td>
                        <td><h3>:</h3></td>
						<td></td>
						<td><h3><?php echo $data['nama_daging']; ?></h3></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td size="200"><h3>Harga</h3></td>
                        <td><h3>:</h3></td>
						<td></td>
						<td><h3>Rp. <?php echo number_format($data['harga'],2,",",".");?></h3></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Stock</h3></td>
                        <td><h3>:</h3></td>
						<td></td>
                        <td><h3><?php if ($data['stok'] >= 1){
	                           echo '<strong style="color: green;">In Stock, </strong>';	echo $data['stok'];
                                } else {
	                           echo '<strong style="color: red;">Out Of Stock</strong>';	
                                }; ?></h3></td>
                        </tr>
                        <!--<tr>
                        <td></td>
                        <td><h3>Satuan</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php //echo $data['br_satuan']; ?></h3></div></td>
                        </tr>-->
                        <tr>
                        <td></td>
                        <td><h3>Rating</h3></td>
                        <td><h3>:</h3></td>
						<td></td>
                        <input type="hidden" name="rating" id="rating" />
						<td>
						<ul onMouseOut="resetRating();">
						  <li onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
						  <li onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
						  <li onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
						  <li onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
						  <li onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
						</ul>
						</td>
                        </tr>
					<!--	<p>
						
						</p> -->
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
						<td>
						<p align="right">
						<a href="cart.php?act=add&amp;barang_id=<?php echo $data['id']; ?>&amp;ref=detailproduk2.php?kd=
						<?php echo $data['id'];?>" class="small button"><font color="white">Beli</font></a></td></p>
                        </tr>
     
                    </table>
                    </div>
                    <!--</div> -->
        		<!--</div> -->
<!---->
      		</div>
							
							
						
						<!-- End Products -->
						
					
					<!-- End Content -->
					
					<!-- Begin Right Sidebar -->
					<div id="right-sidebar" class="sidebar">
						<ul>
							<li class="widget products-box">
								<h2><font size="-1">Paling Banyak Dicari</font></h2>
								<div class="widget-entry">
									<ul>
										<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='2' and id='7'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Bawang Merah">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='2' and id='8'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Bawang Putih">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='2' and id='9'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Jahe">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='2' and id='10'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Kentang">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='2' and id='11'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Timun">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='2' and id='12'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Wortel">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='3' and id='13'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Asparagus">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='3' and id='14'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Jamur">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='3' and id='15'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Paprika Kuning">
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
                    $sql = mysqli_query($koneksi, "SELECT * FROM faiz where kategori='3' and id='16'");
					if(mysqli_num_rows($sql) == 0){
						echo "Tidak ada produk!";
					}else{
						while($data = mysqli_fetch_assoc($sql)){
                    		?>
										<li>
											<a href="detailproduk2.php?kd=<?php echo $data['id'];?>" title="Paprika Merah">
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
		<!-- Begin Footer -->
	  <div id="footer">
	    <div align="center" class="style5">Copyright &copy; 2017. Dark Reef | Made With ♥</div>
	  </div>
		<!-- End Footer -->
	</div>
	<!-- End Wrapper -->
</body>
</html>