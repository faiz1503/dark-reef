<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
<p align="center">
<table class="demo-table" >
						<thead>
  					<tr>
                    <th><center>No</center></th>
					<th><center>Item</center></th>
					<th><center>Gambar</center></th>
					<th><center>Stok</center></th>
				</tr>
				</thead>
				<?php  
				 include 'koneksi.php';
				 $no_urut = 0;
				 $search = $_POST['search'];
				 $query = "SELECT * FROM buah WHERE nama_buah LIKE '%$search%'";
				 $result = mysql_query($query);
				 while($data = mysql_fetch_array($result)) {
				  $no_urut++;
				  echo "<tr>
				     <td>$no_urut</td>
				     <td>".$data['nama_buah']."</td>
				     <td>".$data['gambar']."</td>
				     <td>".$data['stok']."</td>
				  <tr>";
				 }
				?>
				</table>
				</p>