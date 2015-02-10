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
	<meta name="viewport" content="width=640, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
		Kristin + Tawin
	</title>
	<?php
		echo $this->Html->css('styles');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');

		echo $this->Html->script('jquery-1.11.2.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery.throttledresize');
		echo $this->Html->script('imagesloaded.min');
		echo $this->Html->script('home');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1></h1>
		</div>
		<div id="content">
			<div class="container-fluid">
				<div class="row">
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
</body>
</html>
