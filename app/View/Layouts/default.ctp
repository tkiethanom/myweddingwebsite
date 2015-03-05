<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
		Kristin + Tawin
	</title>
	<?php

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');

		echo $this->Html->script('jquery-1.11.2.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery.throttledresize');
		echo $this->Html->script('imagesloaded.min');
		echo $this->Html->script('navbar');
		echo $this->Html->css('app/styles');
		echo $this->Html->css('app/navbar');
		echo $this->Html->css('app/footer');
		echo $this->Html->css('app/'.$page);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Great+Vibes|Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<?php echo $this->element("navbar") ?>
		<div id="content">
			<div class="container-fluid">
				<div class="row">
					<?php if($page != 'home'): ?>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2 class="page-title"><?php echo $title_for_layout ?></h2>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
		<div id="footer">
			kristinandtawin.com &copy <?php echo date('Y') ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-59717526-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>
