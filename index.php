<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Your Website</title>
<link rel="stylesheet" href="" type="text/css" />
<script type="text/javascript"></script>
</head>

<body>

<div class="container">
	<div class="jumbotron">
		<h1>Program CRUD dengan OOP</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Masukan data</div>
					<div class="panel-body">
						<form method="post"	action="proses.php">
							<table class="table table-hover">
								<tr>
									<td>Masukan Nama</td>
									<td><input type="text" class="form-control" name="nama" placeholder="Masukan Nama"></td>
								</tr>
								<tr>
									<td>Masukan Npm</td>
									<td><input type="text" class="form-control" name="npm" placeholder="Masukan NPM"></td>
								</tr>
								<tr>
									<td>Masukan Jurusan</td>
									<td><input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan"></td>
								</tr>
								<tr>
									<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Kirim"></td>
								</tr>
							</table>
						</form>		
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered">
					<tr>
						<th></th>
						<th>Nama anda</th>
						<th>Npm anda</th>
						<th>Jurusan anda</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
					</tr>
					<?php 

					include "database.php";
					$no = 1;
					$data = mysqli_query($koneksi,"select * from info");
					while ($d = mysqli_fetch_array($data)) {

					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d ['nama'];?></td>
						<td><?php echo $d ['npm'];?></td>
						<td><?php echo $d ['jurusan'];?></td>
						<td><a href="edit.php?id=<?php echo $d['id']?>" class="btn btn-info">Edit</td>
						<td><a href="delete.php?id=<?php echo $d['id']?>" class="btn btn-danger">Delete</td>						
					</tr>
					<?php 
					} 
					?>
				</table>
			</div>
		</div>
	</div>