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
				<h2 class = "center">New User Registration</h2>
				<p class = "center">Required fields are indicated by (*)</p>
				<form action = "seatSelect.php" method = "post">
				<p>Email Address: <input type = "text" name = "email" />*<br/>
				Create Password: <input type = "password" name = "password" />*<br/>
				Confirm Password: <input type = "password" name = "passconfirm" />*<br/>
				<b>Billing Information</b><br/>
				First Name: <input type = "text" name = "firstname" /> *<br/>
				Last Name: <input type = "text" name = "lastname" /> *<br/>
				Address 1: <input type = "text" name = "address1" /> *<br/>
				Address 2: <input type = "text" name = "address2" /> <br/>
				City: <input type = "text" name = "city" />*<br/>
				State: <select name = "state">
				<option>Alabama</option>
				<option>Alaska</option>
				<option>American Samoa</option>
				<option>Arizona</option>
				<option>Arkansas</option>
				<option>California</option>
				<option>Colorado</option>
				<option>Connecticut</option>
				<option>Delaware</option>
				<option>District of Columbia</option>
				<option>Florida</option>
				<option>Georgia</option>
				<option>Guam</option>
				<option>Hawaii</option>
				<option>Idaho</option>
				<option>Illinois</option>
				<option>Indiana</option>
				<option>Iowa</option>
				<option>Kansas</option>
				<option>Kentucky</option>
				<option>Louisiana</option>
				<option>Maine</option>
				<option>Maryland</option>
				<option>Massachusetts</option>
				<option>Michigan</option>
				<option>Minnesota</option>
				<option>Mississippi</option>
				<option>Missouri</option>
				<option>Montana</option>
				<option>Nebraska</option>
				<option>Nevada</option>
				<option>New Hampshire</option>
				<option>New Jersey</option>
				<option>New Mexico</option>
				<option>New York</option>
				<option>North Carolina</option>
				<option>North Dakota</option>
				<option>Northern Marianas Islands</option>
				<option>Ohio</option>
				<option>Oklahoma</option>
				<option>Oregon</option>
				<option>Pennsylvania</option>
				<option>Puerto Rico</option>
				<option>Rhode Island</option>
				<option>South Carolina</option>
				<option>South Dakota</option>
				<option>Tennessee</option>
				<option>Texas</option>
				<option>Utah</option>
				<option>Vermont</option>
				<option>Virginia</option>
				<option>Virgin Islands</option>
				<option>Washington</option>
				<option>West Virginia</option>
				<option>Wisconsin</option>
				<option>Wyoming</option></select>*<br/>
				Zip Code: <input type = "text" name = "zip" />*<br/>
				Phone Number: <input type = "text" maxlength = "3" size = "3"name = "phonearea">
								 <input type = "text" maxlength = "3" size = "3" name = "phonecode">
								 <input type = "text" maxlength = "4" size = "4" name = "phonefour"><br/>
				<b>Shipping Information</b><br/>
				Check to use billing information <input type="checkbox" name="usebilling" value="true" /><br/>
				First Name: <input type = "text" name = "firstname" /> *<br/>
				Last Name: <input type = "text" name = "lastname" /> *<br/>
				Address 1: <input type = "text" name = "address1" /> *<br/>
				Address 2: <input type = "text" name = "address2" /> <br/>
				City: <input type = "text" name = "city" />*<br/>
				State: <select name = "state">
				<option>Alabama</option>
				<option>Alaska</option>
				<option>American Samoa</option>
				<option>Arizona</option>
				<option>Arkansas</option>
				<option>California</option>
				<option>Colorado</option>
				<option>Connecticut</option>
				<option>Delaware</option>
				<option>District of Columbia</option>
				<option>Florida</option>
				<option>Georgia</option>
				<option>Guam</option>
				<option>Hawaii</option>
				<option>Idaho</option>
				<option>Illinois</option>
				<option>Indiana</option>
				<option>Iowa</option>
				<option>Kansas</option>
				<option>Kentucky</option>
				<option>Louisiana</option>
				<option>Maine</option>
				<option>Maryland</option>
				<option>Massachusetts</option>
				<option>Michigan</option>
				<option>Minnesota</option>
				<option>Mississippi</option>
				<option>Missouri</option>
				<option>Montana</option>
				<option>Nebraska</option>
				<option>Nevada</option>
				<option>New Hampshire</option>
				<option>New Jersey</option>
				<option>New Mexico</option>
				<option>New York</option>
				<option>North Carolina</option>
				<option>North Dakota</option>
				<option>Northern Marianas Islands</option>
				<option>Ohio</option>
				<option>Oklahoma</option>
				<option>Oregon</option>
				<option>Pennsylvania</option>
				<option>Puerto Rico</option>
				<option>Rhode Island</option>
				<option>South Carolina</option>
				<option>South Dakota</option>
				<option>Tennessee</option>
				<option>Texas</option>
				<option>Utah</option>
				<option>Vermont</option>
				<option>Virginia</option>
				<option>Virgin Islands</option>
				<option>Washington</option>
				<option>West Virginia</option>
				<option>Wisconsin</option>
				<option>Wyoming</option></select>*<br/>
				Zip Code: <input type = "text" name = "zip" />*<br/>
				Phone Number: <input type = "text" maxlength = "3" size = "3"name = "phonearea">
								 <input type = "text" maxlength = "3" size = "3" name = "phonecode">
								 <input type = "text" maxlength = "4" size = "4" name = "phonefour"></p>
				<input type="submit" value="Submit" />
				</form>
			</div>
		</div>
	</div>
</body>
</html>