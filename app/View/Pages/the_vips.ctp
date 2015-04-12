<?php
	$bridesmaids = array(
		array('name'=>'Orachat Sripom','subtitle'=>'Maid of Honor'),
		array('name'=>'Vicky Lam'),
		array('name'=>'Jessica Kwon'),
		array('name'=>'Ashleigh Menhadji'),
		array('name'=>'Jessica Mangonon'),
	);
	$groomsmen = array(
		array('name'=>'Matt Kiethanom','subtitle'=>'Best Man'),
		array('name'=>'Jameson Balingit '),
		array('name'=>'Roger Tarachai'),
		array('name'=>'Tommy Hua'),
		array('name'=>'Tony Chan'),
	);
?>

<div class="vips-container container">
	<div class="row">
		<div class="col-md-6">
			<div class="people">
				<div class="title">
					Bridesmaids
				</div>
				<?php foreach($bridesmaids as $person): ?>
					<div class="person">
						<div class="row">
							<div class="col-xs-3 col-sm-3 col-md-3">
								<img class="img-responsive" src="http://placehold.it/320x320&text=Image"/>
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="name">
									<?php echo $person['name']; ?>
								</div>
								<?php if(!empty($person['subtitle'])): ?>
									<div class="subtitle">
										<?php echo $person['subtitle']; ?>
									</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="people">
				<div class="title">
					Groomsmen
				</div>
				<?php foreach($groomsmen as $person): ?>
					<div class="person">
						<div class="row">
							<div class="col-xs-3 col-sm-3 col-md-3">
								<img class="img-responsive" src="http://placehold.it/320x320&text=Image"/>
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9">
								<div class="name">
									<?php echo $person['name']; ?>
								</div>
								<?php if(!empty($person['subtitle'])): ?>
									<div class="subtitle">
										<?php echo $person['subtitle']; ?>
									</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="people">
				<div class="title">
					Flower Girl
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center"> Alivia Cunningham </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="people">
				<div class="title">
					Ring and Coin Bearer
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center"> Wesley Adams </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="people">
				<div class="title">
					Mother of the Bride
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Fatima Alix </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="people">
				<div class="title">
					Parents of the Groom
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Mungkorn and <span class="text-nowrap">Munchumas Kiethanom</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="people">
				<div class="title">
					Principal Sponsors
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Alfred and Thelma Dawson </div>
						</div>
					</div>
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Oliver and Nayda Carreon</div>
						</div>
					</div>
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Carmen and Bingo Alcoseba </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="people">
				<div class="title">
					Veil Sponsors
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Julius and Jeanette Corazo </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="people">
				<div class="title">
					Cord Sponsors
				</div>
				<div class="person">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="name text-center">Justin and Kristin Beltran </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>