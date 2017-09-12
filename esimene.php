<?php
	$name = [];
	$name['first'] = "Teet";
	$name['family'] = "Triisa";
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8"/>
        <title>Triisa Teet</title>
		<script>
		window.onload = function() {
			function updateClock() {
				var now = new Date(), 
					months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12']; 
					time = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds(), 

					date = [now.getDate(), 
							months[now.getMonth()],
							now.getFullYear()].join('.');

				document.getElementById('Time').innerHTML = [date, time].join(' ');

				setTimeout(updateClock, 1000);
			}
			updateClock(); 
		}
        </script>
    </head>
    <body>
		<p> See on minu leht </p>
		<?php 
			echo "<p> hello world :) </p>"; 
		?>
		<p> Minu nimi on <?= $name['first'].' '.$name['family'];?>
		<br><br>
		<span> Kell on: </span><span id='Time'></span>
		<br><br>
    </body>
</html>
