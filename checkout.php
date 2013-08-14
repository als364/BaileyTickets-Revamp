<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bailey Hall Tickets</title>
	<link rel="stylesheet" type="text/css" href="style/homepage.css" />
</head>
<body>
	<div id = "wrapper">
		<div id = "topbar">
			<?php include("topbar.php") ?>
		</div>
		<div id = "main">
			<div id = "sidebar">
				<?php include("sidebar.php") ?>
			</div>
			<div id = "content">
				<h2 class = "center">Checkout</h2>
				<p>Step 2 of 3</p>
				<table id = "centertable">
					<tr>
						<td><u>Event: </u></td>
						<td><u>Quantity: </u></td>
						<td><u>Cost</u></td>
					</tr>
					<tr>
						<td><?php echo $_POST['event']?></td>
						<td><?php echo $_POST['seats']?></td>
						<td>$$$.$$</td>
					</tr>
				</table>
				<form action = "confirm.php" method = "post">
					<p align = "right">Select Delivery Method: <select name = "delivery">
					<option>E-Ticket</option>
					<option>Will Call</option>
					<option>Snail Mail</option>
					</select><br/>
					Total: $$$.$$</p>
					<table id = "centertable">
						<tr>
							<td>Card Type</td>
							<td>Card Number</td>
							<td>Security Code</td>
							<td>Expiration Date</td>
						</tr>
						<tr>
							<td><select name = "cardtype">
							<option>Visa</option>
							<option>MasterCard</option>
							<option>American Express</option>
							</select></td>
							<td><input type = "password" name = "cardnumber" /></td>
							<td><input type = "password" maxlength = "3" size = "3" name = "securitycode" /></td>
							<td><select name = "expmonth" maxlength = "2" size = "2">
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							</select><select name = "expyear" maxlength = "4" size = "4">
							<option>2011</option>
							<option>2012</option>
							<option>2013</option>
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							</select>&nbsp;</td>
						</tr>
						<tr>
							<td><input id = "centertable" type = "submit" value = "Buy Tickets"/></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>