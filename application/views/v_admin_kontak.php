<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ADMIN</title>

	<link href="<?php echo base_url('plugin/css/css/bootstrap.min.css');?>" rel="stylesheet"/>
	<link href="<?php echo base_url('plugin/css/css/sb-admin.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('plugin/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
</head>

<body>

	<div id="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Admin</a>
			</div>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="divider"></li>
						<li>
							<a href="<?php echo site_url('c_admin/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li>
						<a href="<?php echo site_url('c_admin/siswa'); ?>"><i class="fa fa-fw fa-table"></i> DATA SISWA</a>
					</li>
					<li>
						<a href="<?php echo site_url('c_admin/nilai'); ?>"><i class="fa fa-fw fa-table"></i> DATA NILAI</a>
					</li>
					<li class="active" >
						<a href="<?php echo site_url('c_admin/v_kontak'); ?>"><i class="fa fa-fw fa-table"></i> KONTAK</a>
					</li>
					<li>
						<a href="<?php echo site_url('c_admin/terima'); ?>"><i class="fa fa-fw fa-table"></i> SISWA DITERIMA</a>
					</li>
				</ul>
			</div>
		</nav>

		<div id="page-wrapper">

			<div class="container-fluid">

				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Tabel Data Kontak
						</h1>
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
							</li>
							<li class="active">
								<i class="fa fa-table"></i> Tables
							</li>
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Email</th>
										<th>Subject</th>
										<th>Pesan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<tr>
										<?php foreach ($kontak as $k){
										?>
										<tr> 
											<td><?=$k->nama?></td>
											<td><?=$k->email?></td>
											<td><?=$k->subject?></td>
											<td><?=$k->pesan?></td>
										</tr>
										<?php } ?>
									</tr>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /.row -->
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
