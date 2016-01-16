<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Quotable Quotes</title>
		<link rel="stylesheet" type="text/css" href="/assets/style.css">
	</head>
	<body>
		<div class="container">
			
			<p id="logout"><a href="logout">Logout</a></p>
			
			<h1>Welcome<?php if(!empty($name)) { echo ', '.$name; } ?>!</h1>
			
			<div id="quotableQuotes">
				<h2>Quotable Quotes</h2>
<?php 	
				if(!empty($quotes)) 
				{
					foreach($quotes as $quote) 
						{ 
?>
						<div class="quotes">
							<p><?php echo $quote['quoted_by'] ?>:</p>
							<p><?php echo $quote['quote'] ?></p>
							<p>Posted by: <?php echo $quote['alias'] ?></p>
							
							<form action="/add_to" method="post">
								<input type="hidden" name="quote_id" value="<?php echo $quote['id'] ?>">
								<input class="btn btn-primary" type="submit" value="Add to My List">
							</form>
						</div>
<?php				
						}	
				} 
?>
			</div>			

			<div id="favoriteQuotes">
				<h2>Your Favorites</h2>
<?php 	
				if(!empty($favorites)) 
				{
					foreach($favorites as $favorite) 
						{ 
?>
						<div class="quotes">
							<p><?php echo $favorite['quoted_by'] ?>:</p>
							<p><?php echo $favorite['quote'] ?></p>
							<p>Posted by: <?php echo $favorite['alias'] ?></p>
							<form action="/remove_from" method="post">
								<input type="hidden" name="quote_id" value="<?php echo $favorite['id'] ?>">
								<input class="btn btn-success" type="submit" value="Remove From My List">
							</form>
						</div>
<?php				
					}
			} 
?>
			</div>

			<form id="addQuote" action="/add" method="post">
				<h2>Contribute a Quote:</h2>			
				<p class="error"><?php if(!empty($quote_errors)) { echo $quote_errors; } ?></p>
				<p>Quoted by: <input type="text" name="quoted_by"></p>
				<p>Quote goes here: <input type="text" name="quote"></p>
				<input type="submit" value="Submit" name="Submit">
			</form>

		</div>
	</body>
</html>