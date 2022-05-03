<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Movie age rating</title>
  </head>
  <body>
    <center>
<!-- adding a JavaScript button that generates a random number-->
   <form action="./results.php" method="post" target="results">
    <?php
    echo "<h1>Movie age rating program with PHP</h1>";
    ?>
		<table>
			<tr>
				<td>
          <?php
					echo "<h3>Enter an age:</h3>";
          ?>
						<label for="age">Age:</label>
						<input type="number" step="1"  min="1" name="age" placeholder="Enter your age"><br><br>
						<input type="submit" value="Calculate age appropriate rating">
					</form>
				</td>
				<td>
<!-- adding an image -->
					<img src="./images/movietheatre.jpeg" alt="Greeting" width="100%">
				</td>
			</tr>
		</table>
		<!-- Adding an iframe to display results -->
      <center><iframe id="results" name="results"></iframe></center>
			</div>
		</div>
    </center>
  </body>
</html>