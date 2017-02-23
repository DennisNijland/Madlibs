<?php  



?>

<!DOCTYPE html>
<html>
<head>
	<title>Madlips-main</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="Paniek.php" method="POST">
<h1 class="title">Madlips</h1>
	<div class="stoofpot">
		<div class="head">
			<ul>
				<li><a href="#">Er heerst paniek...</a>
  				<a href="Onkunde.php">Onkunde</a></li>
  			</ul>
		</div>
			<div class="main">
      <h2>Er heerst paniek...</h2>
      <br>
		    <p class="vraag">Welk dier zou je nooit als huisdier willen hebben?<input type="input" id="inpt" placeholder="Huisdier" name="huisdier" required></p>
        <br>
        <p class="vraag">Wie is de belangrijkste persoon in je leven? <input type="input" id="inpt" placeholder="Persoon" name="persoon" required></p>
        <br>
        <p class="vraag">In welk land zou je graag willen wonen? <input type="input" id="inpt" placeholder="Land" name="land" required></p>
        <br>
        <p class="vraag">Wat doe je als je je verveelt? <input type="input" id="inpt" placeholder="Activiteit" name="activiteit" required></p>
        <br>
        <p class="vraag">Met welk speelgoed speelde je als kind het meest? <input type="input" id="inpt" placeholder="Speelgoed" name="speelgoed" required></p>
        <br>
        <p class="vraag">Bij welke docent spijbel je het liefst? <input type="input" id="inpt" placeholder="Docent" name="docent" required></p>
        <br>
        <p class="vraag">Als je €100.000,- had, wat zou je dan kopen? <input type="input" id="inpt" placeholder="Product" name="product" required></p>
        <br>
        <p class="vraag">Wat is je favoriete bezigheid? <input type="input" id="inpt" placeholder="Bezigheid" name="bezigheid" required></p>

        <input type="submit" id="submit" value="Versturen">

			</div>
        <div class="footer">
      <p>Dit is gemaakt door Dennis Nijland.</p>
        </div>

	</div>
</form>
</body>
</html>
