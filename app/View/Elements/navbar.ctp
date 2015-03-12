<?php
$curr_page = '';
if(!empty($this->params['pass'][0]) && $this->params['controller'] == 'pages'){
	$curr_page = $this->params['pass'][0];
}
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
				<a href="/" title="Home">Kristin + Tawin</a>
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="navbar-home <?php echo ($curr_page == 'home')? 'active' : '' ?>"><a href="/">Home</a></li>
				<li class="<?php echo ($curr_page == 'thecouple')? 'active' : '' ?>"><a href="#">The Couple</a></li>
				<li class="<?php echo ($curr_page == 'thevips')? 'active' : '' ?>"><a href="#">The VIPs</a></li>
				<li class="<?php echo ($curr_page == 'thewedding')? 'active' : '' ?>"><a href="#">The Wedding</a></li>
				<li class="<?php echo ($curr_page == 'gallery')? 'active' : '' ?>"><a href="#">Gallery</a></li>
				<li class="<?php echo ($curr_page == 'registry')? 'active' : '' ?>"><a href="#">Registry</a></li>
				<li class="<?php echo ($curr_page == 'travel')? 'active' : '' ?>"><a href="/travel">Travel</a></li>
				<li class="<?php echo ($curr_page == 'accommodations')? 'active' : '' ?>"><a href="/accommodations">Accommodations</a></li>
				<li class="<?php echo ($curr_page == 'contactus')? 'active' : '' ?>"><a href="#">Contact Us</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>