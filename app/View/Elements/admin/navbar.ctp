<?php
$curr_page = '';
$controller = $this->params['controller'];
$action = $this->params['action'];
$curr_page = $controller.'-'.$action;
?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="branding">
				<a href="/admin" title="Home">Admin</a>
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?php echo ($controller == 'users')? 'active' : '' ?>"><a href="/admin/users/index">Users</a></li>
				<li class="<?php echo ($controller == 'galleryImages')? 'active' : '' ?>"><a href="/admin/galleryImages/index">Gallery Images</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>