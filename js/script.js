$(document).ready(function() {
	$('#example').countdown({
		date: '11/26/2015 23:59:59',
		offset: -8,
		day: 'dzie�',
		days: 'dni',
		hour: 'godzina',
		hours: 'godzin',
		minute: 'minuta',
		minutes: 'minut',
		second: 'sekunda',
		seconds: 'sekund'
	}, function () {
		alert('Done!');
	});
});