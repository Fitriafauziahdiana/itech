<header class="main-header">
	<!-- Logo -->
	<a href="" class="logo">
		<span class="logo-mini"><i class="fab fa-internet-explorer "></i></span>
		<span class="logo-lg"><i class="fab fa-internet-explorer"></i> - Integraltech</span>
		<link href="<?php echo base_url('assets/img/Integral.png') ?>" rel="icon" />
	
	</a>
	<!-- Akhir Logo -->
	
	<!-- Navbar Header -->
	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle Navigation</span>
		</a>
		
		<!-- Menu Kanan -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Pesan -->

				<!-- Akhir Pesan -->

				<!-- akun user -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url() ?>media/img/user.png" class="user-image" alt="Photo User">
						<span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>
					</a>
				
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?php echo base_url() ?>media/img/user.png" class="img-circle" alt="Photo User">
							<p>
								<?php echo $this->session->userdata('full_name'); ?>
								<small>Login Sebagai : <?php echo $this->session->userdata('level'); ?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								
							</div>
							<div class="pull-right">
								<a href="<?php echo base_url('Login/logout') ?>" class="btn btn-flat btn-default">Keluar</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Akhir akun user -->
			</ul>
			
		</div>
		<!-- Akhir Menu Kanan -->
	</nav>
	<!-- Akhir Navbar Header -->
</header>