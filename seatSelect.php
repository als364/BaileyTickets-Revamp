<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bailey Hall Tickets</title>
	<link rel="stylesheet" type="text/css" href="style/homepage.css" />
	
	<script type="text/javascript">      
		function hoverSect(){
		
		}
		
		var num_seats = 0;
		
		var IE = false;
	if (navigator.appName == "Microsoft Internet Explorer"){IE = true}
	if (!IE){document.captureEvents(Event.MOUSEMOVE)}

	function getMouseXY(m){
		//alert(document.getElementById('hover1').style.top);

  		if (IE)	{
			 var tmpX = event.clientX;
  			 var tmpY = event.clientY;
			}	
 		else 	{
    			 var tmpX = m.pageX;
			 var tmpY = m.pageY;
  			}  
		
		document.getElementById('hover1').style.left = tmpX + 'px';
		document.getElementById('hover1').style.top = tmpY  - 110 + 'px';
		
		
  	}

	function hover1Over(title){
	document.onmousemove = getMouseXY;
		document.getElementById('hover1').style.display='block';
		document.getElementById('hover1_span').innerHTML = title;
	}
	
	function hover1Out(){
		document.getElementById('hover1').style.display='none';
	}
	
	function seatHover(row, number){
		if(row == 'A'){
			document.getElementById('stage_view').src = "images/Stage-" + 1 + ".jpg";
		}
		else if(row == 'B'){
			document.getElementById('stage_view').src = "images/Stage-" + 2 + ".jpg";
		}
		else if(row == 'C'){
			document.getElementById('stage_view').src = "images/Stage-" + 3 + ".jpg";
		}
		else if(row == 'D'){
			document.getElementById('stage_view').src = "images/Stage-" + 4 + ".jpg";
		}
		else if(row == 'E'){
			document.getElementById('stage_view').src = "images/Stage-" + 5 + ".jpg";
		}
		
		document.getElementById('seat_number').innerHTML = row + "" + number;
		document.getElementById('price').innerHTML = "$30";
		
			
	}
	
	function seatOut(){
		document.getElementById('seat_number').innerHTML = "";
		document.getElementById('price').innerHTML = "";
		document.getElementById('stage_view').src = "images/default_seat.gif";
	
	
	}
	
	function selectSeat(seat){
		
		if(document.getElementById(seat).getAttribute("class") == "green"){
			document.getElementById(seat).setAttribute("class", "blue");
			num_seats++;
			document.getElementById("selected").innerHTML = num_seats;
			document.getElementById("selected2").innerHTML = num_seats;
			document.getElementById("seats").value = num_seats;
		}
		else{
			document.getElementById(seat).setAttribute("class", "green");
			num_seats--;
			document.getElementById("selected").innerHTML = num_seats;
			document.getElementById("selected2").innerHTML = num_seats;
			document.getElementById("seats").value = num_seats;
		}
		
		
	}
	
	function moveRight(){
		document.getElementById("light3").style.left = "40%";
	}
	
	function moveLeft(){
		document.getElementById("light3").style.left = "10%";
	}
	
	</script>
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
				<p id="steps"><span id="step">Step 1 of 3: Select your Seats for: <?php echo $_POST["event"]; ?></span> <br/> <b>Select Seats > </b> Checkout <b>></b> Purchase</p>
			
				<img src='images/Bailey-Venue-Map.gif' USEMAP='#Bailey-Venue-Map' BORDER=0>
				<map name='Bailey-Venue-Map'><area shape='rect' coords='26,67,68,190' href='javascript:void(0)'  onmouseover='hover1Over("Mezz Left")' onmouseout='hover1Out()'
				onclick="moveLeft(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'">
				
				<area shape='poly' coords='31,211,71,283,122,309,165,321,238,310,295,263,323,209,280,200,265,240,231,263,184,279,136,271,92,242,71,200,32,212' 
				onmouseover='hover1Over("Mezzanine Center")' onmouseout='hover1Out()' onclick="moveLeft(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'" href='javascript:void(0)'>
				
				 <area shape='rect' coords='286,67,328,191' onmouseover='hover1Over("Mezz Right")' onmouseout='hover1Out()' href='javascript:void(0)' 
				onclick="moveLeft(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'"> 
				
				<area shape='poly' coords='99,87,74,116,76,184,91,230,124,254,126,94,98,87' onmouseover='hover1Over("Orc Left")' onmouseout='hover1Out()' href='javascript:void(0)' 
				onclick="moveLeft(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'">
				
				 <area shape='poly' coords='136,99,136,248,145,265,211,263,218,249,218,102,134,101' onmouseover='hover1Over("Orchestra")' onmouseout='hover1Out()' href='javascript:void(0)' 
				onclick="moveLeft(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'"> 
				
				<area shape='poly' coords='226,95,228,252,263,225,276,176,277,99,255,82,226,98' onmouseover='hover1Over("Orc Right")' onmouseout='hover1Out()' href='javascript:void(0)' 
				onclick="moveLeft(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'"> 
				
				<area shape='rect' coords='382,58,402,156' href='javascript:void(0)' onmouseover='hover1Over("Balcony Left")' onmouseout='hover1Out()'
				onclick="moveRight(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'"> 
				
				<area shape='poly' coords='384,169,405,234,452,279,500,298,559,300,629,266,669,213,680,168,654,163,625,239,536,279,448,247,405,166,386,169' 
				onmouseover='hover1Over("Balcony Center")' onmouseout='hover1Out()' href='javascript:void(0)' onclick="moveRight(); document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'">
				
				<area shape='rect' coords='658,58,684,154' onmouseover='hover1Over("Balcony Right")' onmouseout='hover1Out()' href='javascript:void(0)' 
				onclick="document.getElementById('light3').style.display='block'; document.getElementById('fade2').style.display='block'; moveRight()"></map>
				
				<p id="selected_p2" ># selected:<span id="selected">0</span></p>
				
				<form name="input" action="checkout.php" method="post">
					<input type="hidden" name="event" value="<?php echo $_POST["event"]; ?>">
					<input id='seats' type="hidden" name="seats" value="0">
					<input id="continue" type="submit" value="Continue" />
				</form>
				
				<div id="hover1">
					<div id="hover1_1"><p><span id="hover1_span"></span><br/>
					$30</p></div>
					<div id="hover1_2"><p>&nbsp;Total Seats Remaining: 20 <br/>&nbsp;Max seats together: 3</p></div>
				</div>
				
				<div id="light3" class="white_content2">
					<div id="seating">
						<table border="0" width="100%">
							 <tr>
								 <td></td>
								 <td>1</td>
								 <td>2</td>
								 <td>3</td>
								 <td>4</td>
								 <td>5</td>
							 </tr>
							 <tr>
								<td>A</td>
								<td><span class="red" onmouseover="seatHover('A', '1')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('A', '2')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="A3" class="green" onmouseover="seatHover('A', '3')" onmouseout="seatOut()" onclick='selectSeat("A3")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="A4" class="green" onmouseover="seatHover('A', '4')" onmouseout="seatOut()" onclick='selectSeat("A4")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('A', '5')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
							 <tr>
								<td>B</td>
								<td><span class="red" onmouseover="seatHover('B', '1')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="B2" class="green" onmouseover="seatHover('B', '2')" onmouseout="seatOut()" onclick='selectSeat("B2")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('B', '3')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="B4" class="green" onmouseover="seatHover('B', '4')" onmouseout="seatOut()" onclick='selectSeat("B4")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="B5" class="green" onmouseover="seatHover('B', '5')" onmouseout="seatOut()" onclick='selectSeat("B5")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
							 <tr>
								<td>C</td>
								<td><span id="C1" class="green" onmouseover="seatHover('C', '1')" onmouseout="seatOut()" onclick='selectSeat("C1")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="C2" class="green" onmouseover="seatHover('C', '2')" onmouseout="seatOut()" onclick='selectSeat("C2")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="C3" class="green" onmouseover="seatHover('C', '3')" onmouseout="seatOut()" onclick='selectSeat("C3")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('C', '4')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('C', '5')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
							 <tr>
								<td>D</td>
								<td><span id="D1" class="green" onmouseover="seatHover('D', '1')" onmouseout="seatOut()" onclick='selectSeat("D1")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('D', '2')" onmouseout="seatOut()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="D3" class="green" onmouseover="seatHover('D', '3')" onmouseout="seatOut()" onclick='selectSeat("D3")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('D', '4')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="D5" class="green" onmouseover="seatHover('D', '5')" onmouseout="seatOut()" onclick='selectSeat("D5")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
							 <tr>
								<td>E</td>
								<td><span id="E1" class="green" onmouseover="seatHover('E', '1')" onmouseout="seatOut()" onclick='selectSeat("E1")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="E2" class="green" onmouseover="seatHover('E', '2')" onmouseout="seatOut()" onclick='selectSeat("E2")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('E', '3')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span class="red" onmouseover="seatHover('E', '4')" onmouseout="seatOut()" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
								<td><span id="E5" class="green" onmouseover="seatHover('E', '5')" onmouseout="seatOut()" onclick='selectSeat("E5")'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
							</tr>
						</table>
						
						<p id="click_p" >Click to select seats.</p>
						<p class="seating_desc"><span class="red_dem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp; = reserved</p>
						<p class="seating_desc"><span class="green_dem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp; = open</p>
						<p class="seating_desc"><span class="blue_dem">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp; = selected</p>
						<p id="selected_p" ># selected:<span id="selected2">0</span></p>
						<br/><br/>
						<p>Seat Info:</p>
						
						<div id="seat_hover">
							<img id="stage_view" src="images/default_seat.gif" alt="View of the stage from seat" />
							<p>Seat: <span id="seat_number"></span></p>
							<p>Price: <span id="price"></span></p>
						</div>
						
						<br/><br/><br/><input type="submit" value="Close" onclick = "document.getElementById('light3').style.display='none';document.getElementById('fade2').style.display='none'; hideLogin()" />
					</div>
				</div>
				<div id="fade2" class="black_overlay" onclick = "document.getElementById('light3').style.display='none';document.getElementById('fade2').style.display='none'; hideLogin()"></div>
			</div>
		</div>
	</div>
</body>
</html>