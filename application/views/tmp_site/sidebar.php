<aside class="main-sidebar">
	<section class="sidebar">
		<!-- user panel -->
		<<div class="user-panel">
			<div class="logo" align="center">
				<img src="<?php echo base_url() ?>media\img\logo01.png" width="110" height="auto" class="img-responsive" alt="Logo" style="margin-top: -5px;margin-bottom: 10px;">
				<link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
			</div>
		</div>
		<!-- Akhir user panel -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU NAVIGATION</li>

			<li class="active"><a href="<?php echo base_url('Dashboard') ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
			<li><a href="<?php echo base_url('Services') ?>"><i class="fas fa-book"></i> <span> E-Services</span></a></li>
			<li><a href="<?php echo base_url('Aplikasi') ?>"><i class="fab fa-twitch"></i> <span> Aplikasi</span></a></li>
			<li><a href="<?php echo base_url('Bigdata') ?>"><i class="fas fa-folder-open"></i> <span>Big Data</span></a></li>
			<li><a href="<?php echo base_url('Multimedia') ?>"><i class="fas fa-clipboard-list"></i> <span>Multimedia</span></a></li>
			<li><a href="<?php echo base_url('Publikasi') ?>"><i class="fas fa-tags"></i> <span>Publikasi</span></a></li>
			<li><a href="<?php echo base_url('Arsip') ?>"><i class="fas fa-box-open"></i> <span>E-arsip</span></a></li>
			
			<li class="treeview">
				<a href=""><i class="fas fa-cogs"></i> <span>Master Apps</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url('Master/jeniskegiatan') ?>">Master Jenis Kegiatan</a></li>
					<li><a href="<?php echo base_url('Master/users') ?>">Master Users</a></li>
				</ul>
			</li>

			<li><a href="<?php echo base_url('Backup') ?>"><i class="fas fa-database"></i> <span>Backup &amp; Restore</span></a></li>

		</ul>
		<!-- Akhir sidebar menu -->
	</section>
</aside>

<!-- 
<li class="treeview">
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url() ?>"></a></li>
					<li><a href="<?php echo base_url('Pangkalan/siaga') ?>">Pangkalan Siaga</a></li>
					<li><a href="<?php echo base_url('Pangkalan/penggalang') ?>">Pangkalan Penggalang</a></li>
					<li><a href="<?php echo base_url('Pangkalan/penegak') ?>">Pangkalan Penegak</a></li>
					<li><a href="<?php echo base_url('Pangkalan/pandega') ?>">Pangkalan Pandega</a></li>
				</ul>
			</li>
-->