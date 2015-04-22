<div class="home-main .col-lg-12">
	<div class="home-main-image"></div>
	<div class="home-date">Saturday July 11th, 2015</div>
	<div id="main-example" class="main-example"></div>
	<script type="text/template" id="main-example-template">
		<div class="time <%= label %>">
			<span class="count curr top"><%= curr %></span>
			<span class="count next top"><%= next %></span>
			<span class="count next bottom"><%= next %></span>
			<span class="count curr bottom"><%= curr %></span>
			<span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
		</div>
	</script>
	<div class="flavor-text">
		Until the Big Day!
	</div>
</div>