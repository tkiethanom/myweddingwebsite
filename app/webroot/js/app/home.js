$(document).ready(function(){
	var labels = ['years', 'months', 'weeks', 'days'],
		sinceDate = new Date(2015,06,11),
		template = _.template($('#main-example-template').html()),		
		currDate = ['00','00','00','00'],		
		$example = $('#main-example');
	
	// Build the layout	
	labels.forEach(function(label) {
		$('#countdown').append(template({
			curr: currDate[label],
			next: currDate[label],
			label: label
		}));		
	});

	function tickHandler(event) {						
		// Setup the data
		data = {
			'curr': currDate,
			'next': event
		};					

		// Apply the new values to each node that changed
		labels.forEach(function(label, i) {			
			$node = $('#countdown').find('.' + label);
			// Update the node
			$node.removeClass('flip');
			console.log(data.curr[i]);
			$node.find('.curr').text(data.curr[i].toString().padStart(2,0));
			$node.find('.next').text(data.next[i].toString().padStart(2,0));
			// Wait for a repaint to then flip
			_.delay(function($node) {
				$node.addClass('flip');
			}, 50, $node);			
		});

		$example.countdown('pause');
	}
	

	// Starts the countdown
	$example.countdown({since: sinceDate, format: 'YOWD', onTick: tickHandler });
});