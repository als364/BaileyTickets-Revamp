<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bailey Hall Tickets</title>
	<link rel="stylesheet" type="text/css" href="style/homepage.css" />
	<link type="text/css" rel="stylesheet" href="style/jscal2.css" />
    <link type="text/css" rel="stylesheet" href="style/border-radius.css" />
	 <link id="skin-win2k" title="Win 2K" type="text/css" rel="alternate stylesheet" href="style/win2k/win2k.css" />
    <link id="skin-steel" title="Steel" type="text/css" rel="alternate stylesheet" href="style/steel/steel.css" />
    <link id="skin-gold" title="Gold" type="text/css" rel="alternate stylesheet" href="style/gold/gold.css" />
    <link id="skin-matrix" title="Matrix" type="text/css" rel="alternate stylesheet" href="style/matrix/matrix.css" />
    <link id="skinhelper-compact" type="text/css" rel="alternate stylesheet" href="style/reduce-spacing.css" />
	  <link type="text/css" rel="stylesheet" href="style/ui-lightness/jquery-ui-1.8.16.custom.css" />
	<style type="text/css">
	.highlight { color: #0000EE !important; font-weight: bold }
	.highlight2 { color: #090 !important; font-weight: bold }
	</style>
	
	<script type = "text/javascript" src = "script/hover.js"></script>
<!--	<script type="text/javascript" src="script/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="script/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="script/jquery.color.js"></script> -->

<script type="text/javascript" src="script/jquery-1.7.min.js"></script>
<script type="text/javascript" src="script/jquery-ui-1.8.16.custom.min.js"></script>
<!--
  jQuery library
-->
<!--<script type="text/javascript" src="script/jquery-1.4.2.min.js"></script> -->

<script type="text/javascript" src="script/fader.js"></script>

<script src="script/js/jscal2.js"></script>
 <script src="script/js/lang/en.js"></script>


<script type="text/javascript">        
	
  function toggle(target) { 
		var bio1 = document.getElementById("bio1");
		var bio2 = document.getElementById("bio2");
		var bio3 = document.getElementById("bio3");
		var bio4 = document.getElementById("bio4");
		var bio5 = document.getElementById("bio5");
		
		bio1.style.display = 'none';
		bio2.style.display = 'none';
		bio3.style.display = 'none';
		bio4.style.display = 'none';
		bio5.style.display = 'none';
		
		target.style.display = 'block';  
  }
  
  function listToggle(target1, target2){
		var li1 = document.getElementById("li1");
		var li2 = document.getElementById("li2");
		var li3 = document.getElementById("li3");
		var li4 = document.getElementById("li4");
		var li5 = document.getElementById("li5");
		
		var li1c = document.getElementById("li1c");
		var li2c = document.getElementById("li2c");
		var li3c = document.getElementById("li3c");
		var li4c = document.getElementById("li4c");
		var li5c = document.getElementById("li5c");
  
		li1.style.display = 'block';
		li2.style.display = 'block';
		li3.style.display = 'block';
		li4.style.display = 'block';
		li5.style.display = 'block';
		
		li1c.style.display = 'none';
		li2c.style.display = 'none';
		li3c.style.display = 'none';
		li4c.style.display = 'none';
		li5c.style.display = 'none';
  
	target1.style.display = 'none';
	
	target2.style.display = 'block';
	
  }
  
  function changecss(theClass,element,value) {
		 var cssRules;
		 for (var S = 0; S < document.styleSheets.length; S++){
			  try{
			  	document.styleSheets[S].insertRule(theClass+' { '+element+': '+value+'; }',document.styleSheets[S][cssRules].length);
			  } catch(err){
			  		try{document.styleSheets[S].addRule(theClass,element+': '+value+';');

					}catch(err){

					 	try{
						    if (document.styleSheets[S]['rules']) {
							  cssRules = 'rules';
							 } else if (document.styleSheets[S]['cssRules']) {
							  cssRules = 'cssRules';
							 } else {
							  //no rules found... browser unknown
							 }

							  for (var R = 0; R < document.styleSheets[S][cssRules].length; R++) {
							   if (document.styleSheets[S][cssRules][R].selectorText == theClass) {
							    if(document.styleSheets[S][cssRules][R].style[element]){
							    document.styleSheets[S][cssRules][R].style[element] = value;
								break;
							    }
							   }
							  }
						  } catch (err){}
					}
			  }
		}
	}
	
	function hideLogin() {
		document.getElementById('log1').style.display='none';
		document.getElementById('log2').style.display='none';
		document.getElementById('log3').style.display='none';
		document.getElementById('log4').style.display='none';
		document.getElementById('log5').style.display='none';
	}

$('#scroll').tinyscrollbar();

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
<script type = "text/javascript">
	function linkToEventListing(event)
	{
		if (!event) {var event = window.event;}
		var x = 0;
		if(typeof event.offsetX == 'undefined')
		{
			//alert("undefined");
			x = event.pageX - document.getElementById("accordion").offsetParent.offsetLeft;
		}
		else
		{
			//alert("defined :)");
			x = event.offsetX;
		}
		if(x < 100)
		{
			getEventListing(1);
		}
		else if(x < 200)
		{
			getEventListing(2);
		}
		else if(x < 300)
		{
			getEventListing(3);
		}
		else if(x < 400)
		{
			getEventListing(4);
		}
		else
		{	
			getEventListing(5);
		}
	}
	function getEventListing(index)
	{
		switch(index)
		{
			case 1:
			//window.scrollTo(0, 260);
			listToggle(document.getElementById('li5'), document.getElementById('li5c'));
			toggle(document.getElementById('bio5'));
			break;
			case 2:
			//window.scrollTo(0, 260);
			listToggle(document.getElementById('li3'), document.getElementById('li3c'));
			toggle(document.getElementById('bio3'));
			break;
			case 3:
			//window.scrollTo(0, 260);
			listToggle(document.getElementById('li1'), document.getElementById('li1c'));
			toggle(document.getElementById('bio1'));
			break;
			case 4:
			break;
			case 5:
			break;
		}
	}
	function accordion(event)
	{
		if (!event) {var event = window.event;}
		var x = 0;
		if(typeof event.offsetX == 'undefined')
		{
			//alert("undefined");
			x = event.pageX - document.getElementById("accordion").offsetParent.offsetLeft;
		}
		else
		{
			//alert("defined :)");
			x = event.offsetX;
		}
		//alert("x");
		if(x < 100)
		{
			//alert(x);
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion3.png)";
			//animate(1);
		}
		else if(x < 200)
		{
			//alert(x);
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion2.png)";
			//animate(2);
		}
		else if(x < 300)
		{
			//alert(x);
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion1.png)";
			//animate(3);
		}
		else
		{
			//alert(x);
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion.png)";
			//animate(4);
		}
	}
	function animate(index)
	{
		//alert(index);
		switch(index)
		{
			//alert(index);
			case 1:
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion3.png)";
			break;
			case 2:
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion2.png)";
			break;
			case 3:
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion1.png)";
			break;
			case 4:
			document.getElementById('accordion').style.backgroundImage = "url(images/accordion0.png)";
			break;
		}
	}
</script>			
	<table style="position: relative; margin: auto; padding: 0; overflow: hidden;">
	<tr>
		<td>
			<div id = "accordion" 
				onclick = "linkToEventListing(event)"  onmousemove= "accordion(event)" 
				style = "background-image: url(images/accordion.png); float: top;">	
			</div>
		</td>		
		<td>
			<!-- element that will contain the calendar -->
			<div id="calendar-container"></div>
			<!-- here we will display selection information -->
			<div id="calendar-info" style="text-align: center; margin-top: 0.3em"></div>
		</td>
	</tr>
 <script type="text/javascript">


//<![CDATA[
var DATE_INFO = {
  20111112: { klass: "highlight", tooltip: "Water is Rising" },
  20120128: { klass: "highlight", tooltip: "Jason Moran" },
  20120210: { klass: "highlight", tooltip: "Juliard String Quartet" },
  20120302: { klass: "highlight", tooltip: "Ian Bostridge & Jullus Drake" },
  20120314: { klass: "highlight", tooltip: "Purbo Asmoro" }
};

function getDateInfo(date, wantsClassName) {
  var as_number = Calendar.dateToInt(date);
  return DATE_INFO[as_number];
};
Calendar.setup({
    cont          : "calendar-container",
    weekNumbers   : false,
    selectionType : Calendar.SEL_MULTIPLE,
    selection     : Calendar.dateToInt(new Date()),
    showTime      : false,
	bottomBar		: false,
	dateInfo :  getDateInfo,
    onSelect      : function() {
		//GO TO CORRESPONDING EVENT
		
		
		var date = this.selection.get();
		
		if(date == 20111112){
			window.scrollTo(0, 260); // horizontal and vertical scroll increments
			listToggle(document.getElementById('li1'), document.getElementById('li1c'));
			toggle(document.getElementById('bio1'));
		}
		else if(date == 20120128){
			window.scrollTo(0, 260);
			listToggle(document.getElementById('li2'), document.getElementById('li2c'));
			toggle(document.getElementById('bio2'));
		}
		else if(date == 20120210){
			window.scrollTo(0, 260);
			listToggle(document.getElementById('li3'), document.getElementById('li3c'));
			toggle(document.getElementById('bio3'));
		}
		else if(date == 20120302){
			window.scrollTo(0, 260);
			listToggle(document.getElementById('li4'), document.getElementById('li4c'));
			toggle(document.getElementById('bio4'));
		}
		else if(date == 20120314){
			window.scrollTo(0, 260);
			listToggle(document.getElementById('li5'), document.getElementById('li5c'));
			toggle(document.getElementById('bio5'));
		}
		
		
        var count = this.selection.countDays();
		
        }
});
//]]></script>
<div id="light" class="white_content">
	<div id="login">
		<p id="login_p">Login with Cornell</p>
		<form name="input" action="javascript:void(0)">
		<input id="affiliate" type="submit" value="Not affiliated with cornell?" 
			onclick = "document.getElementById('login').style.display='none'; document.getElementById('login2').style.display='block'"/>
			</form><form name="input" action="javascript:void(0)">
			<br/><br/><br/>Cornell Student/Faculty netid: <input type="text" name="user" /> 
			<br/><br/>Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="user" />
			<br/><br/><input type="submit" value="Submit" onclick = "changecss('.seats_button','display','block');  document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'; hideLogin()" />
		</form>
	</div>
	
	<div id="login2">
		<p id="login_p">Login with Bailey</p>
		<form name="input" action="register.php">
			<input id="affiliate" type="submit" value="Not registered with Bailey?" />
			</form><form name="input" action="javascript:void(0)">
			<br/><br/><br/>Bailey tickets email: <input type="text" name="user" /> 
			<br/><br/>Bailey tickets password: <input type="password" name="user" />
			<br/><br/><input type="submit" value="Submit" onclick = "changecss('.seats_button','display','block');  document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'; hideLogin()" />
		</form>
	</div>
 </div>
 
 <div id="light2" class="white_content">
	
 </div>

<div id="fade" class="black_overlay" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'; hideLogin()"></div>

<tr><td>
<div id="bio1" ><div class="listing">
	<p class='event_title'>Water is Rising: Artists from the Pacific Atolls of Kiribati, Tokelau, and Tuvalu</p>
	<p><img class ='list_img' src='images/water.jpg' alt="Water is Rising" /></p>
	<p>Date: Saturday, November 12, 2011</p>
	<p>Time: 8:00 PM</p>
	<p>Price Range : $15 for CU students - $35 for Mezz/Balcony Center</p>
	<p>Rating: <img src='images/3_starsc.png' alt='3 stars' /></p>
	<form name="input" action="seatSelect.php" method="post">
	<input type="hidden" name="event" value="Water is Rising">
	<?php if(!isset($_POST['login'])){echo "<span id='log1' onclick = 'document.getElementById(\"light\").style.display=\"block\";document.getElementById(\"fade\").style.display=\"block\"'>
	Login to purchase</span>";} 
	else{ echo "<input class='seats_button2' type='submit' value='Select Seats' />";} ?>
	
		
		<input class="seats_button" type="submit" value="Select Seats" />
	</form>
	
	<p class='bio_p'>Bio:</p>
	<p >Performance and purpose collide in this powerful American 
	stage premiere that illuminates the plight of the Pacific Islands. Scientists 
	report the vulnerable coral atolls of Kiribati Tokelau and Tuvalu are already 
	experiencing rising sea levels as result of global warming and climate change. 
	Thirty-six dancers and musicians express their deep connection to nature and their 
	ancestral past through multi-part harmonies, poetry, and gracious movement cascading 
	over dynamic rhythms inspiring us all to be better stewards of our shared planet. 
	Water is Rising harnesses the power of performance art in an impassioned plea for 
	global awareness and social change.<br/><br/><a target="_blank" HREF="http://www.facebook.com/#!/event.php?eid=141089849299304">Water is Rising event on Facebook</A></p>
	
</div></div>

<div id="bio2" ><div class="listing">
	<p class='event_title'>Jason Moran, piano with SPECIAL GUEST</p>
	<p><img class ='list_img' src='images/moran.jpg' alt="Jason Moran" width="150" height="232"/></p>
	<p>Date: Saturday, January 28, 2011</p>
	<p>Time: 8:00 PM</p>
	<p>Price Range : $25 for CU students, $35 for General Admission</p>
	<p>Rating: <img src='images/4_starsc.png' alt='4 stars' /></p>
		<form name="input" action="seatSelect.php" method="post">
		<input type="hidden" name="event" value="Jason Moran">
		<?php if(!isset($_POST['login'])){echo "<span id='log2' onclick = 'document.getElementById(\"light\").style.display=\"block\";document.getElementById(\"fade\").style.display=\"block\"'>
	Login to purchase</span>";} 
	else{ echo "<input class='seats_button2' type='submit' value='Select Seats' />";} ?>
		<input class="seats_button" type="submit" value="Select Seats" />
	</form>
	
	<p class='bio_p'>Bio:</p>
	<p >The multi-award winning jazz pianist, and now a MacArthur fellow, 
	returns to Cornell with another art-provoking performance, this time in the 
	intimacy of Barnes Hall and with a very special guest - to be announced soon!!!.
	<br/><br/>***NEW PRICE for re-billing of this special concert.*** 
General Admission [open seating in Barnes]: General Public $35, CU Students $25. 
 NOTE: Due to the very limited number of tickets for this engagement, we are unable to offer a non-CU student rate or CU employee 
 discount. Tickets purchased prior to the change, however, will be honored at the original price.</p>
	
</div></div>

<div id="bio3" ><div class="listing">
	<p class='event_title'>Juilliard String Quartet</p>
	<p><img class ='list_img' src='images/juliard.jpg' alt="Juliard String Quartet"/></p>
	<p>Date: Friday, February 10</p>
	<p>Time: 8:00 PM</p>
	<p>Price Range : $15 for CU students, $17 other students, $35 for Mezz/Balcony Center</p>
	<p>Rating: <img src='images/5_starsc.png' alt='5 stars' /></p>
		<form name="input" action="seatSelect.php" method="post">
		<input type="hidden" name="event" value="Juilliard String Quartet">
		<?php if(!isset($_POST['login'])){echo "<span id='log3' onclick = 'document.getElementById(\"light\").style.display=\"block\";document.getElementById(\"fade\").style.display=\"block\"'>
	Login to purchase</span>";} 
	else{ echo "<input class='seats_button2' type='submit' value='Select Seats' />";} ?>
		<input class="seats_button" type="submit" value="Select Seats" />
	</form>
	
	<p class='bio_p'>Bio:</p>
	<p >Long recognized as the quintessential American string quartet and admired for performances characterized by clarity of structure,
	beauty of sound, and an extraordinary unanimity of purpose, the JSQ returns to Bailey Hall with new first violinist Joseph Lin (in a 
	winter homecoming to Cornell). 
	</p>
	
</div></div>

<div id="bio4" ><div class="listing">
	<p class='event_title'>Ian Bostridge & Jullus Drake</p>
	<p><img class ='list_img' src='images/bostridge.jpg' alt="Ian Bostridge & Jullus Drake" /></p>
	<p>Date: Friday, March 02</p>
	<p>Time: 8:00 PM</p>
	<p>Price Range : $15 for CU students, $17 other students, $35 for Mezz/Balcony Center</p>
	<p>Rating: <img src='images/4_starsc.png' alt='4 stars' /></p>
		<form name="input" action="seatSelect.php" method="post">
		<input type="hidden" name="event" value="Ian Bostridge & Jullus Drake">
		<?php if(!isset($_POST['login'])){echo "<span id='log4' onclick = 'document.getElementById(\"light\").style.display=\"block\";document.getElementById(\"fade\").style.display=\"block\"'>
	Login to purchase</span>";} 
	else{ echo "<input class='seats_button2' type='submit' value='Select Seats' />";} ?>
		<input class="seats_button" type="submit" value="Select Seats" />
	</form>
	
	<p class='bio_p'>Bio:</p>
	<p >Ian Bostridge was a post-doctoral fellow in history at Oxford before embarking on a full-time career as a recitalist and operatic singer. 
	With a distinctively expressive, nuanced and clear voice [New York Times], he is considered to be one of todays finest interpreters of lieder. </p>
	
</div></div>

<div id="bio5" ><div class="listing">
	<p class='event_title'>Purbo Asmoro presents Arjuna's Profound Meditation</p>
	<p><img class ='list_img' src='images/asmoro.jpg' alt="Purbo Asmoro" /></p>
	<p>Date: Wednesday, March 14</p>
	<p>Time: 8:00 PM</p>
	<p>Price Range : $25 for CU students, $35 for General Admission</p>
	<p>Rating: <img src='images/3_starsc.png' alt='3 stars' /></p>
		<form name="input" action="seatSelect.php" method="post">
		<input type="hidden" name="event" value="Arjuna's Profound Meditation">
		<?php if(!isset($_POST['login'])){echo "<span id='log5' onclick = 'document.getElementById(\"light\").style.display=\"block\";document.getElementById(\"fade\").style.display=\"block\"'>
	Login to purchase</span>";} 
	else{ echo "<input class='seats_button2' type='submit' value='Select Seats' />";} ?>
		<input class="seats_button" type="submit" value="Select Seats" />
	</form>
	
	<p class='bio_p'>Bio:</p>
	<p >Shadow drama master Purbo Asmoro presents the living classical drama and musical traditions of Java. The remarkable visual effects, to the sounds 
	of a full gamelan ensemble, will be accompanied by projected English translations of the narrative. </p>
</div></div>
</td>
<td>
 <div class="scroll">
 <p id="upcoming_events">Upcoming Events </p>
  <ul id="list"> 
<li id="li1" class="changer" onClick="toggle(document.getElementById('bio1')); listToggle(document.getElementById('li1'), document.getElementById('li1c'))" onmouseover="colorFade('li1','background','f5f5f5','B31B1B')" onmouseout="colorFade('li1','background','B31B1B','f5f5f5',25,50)">
	<img src='images/waterc.jpg' alt="Water is Rising" /><span class='event_txt'>Water is Rising<br/><br/>Sat 11/12/2011 8:00 PM ET<br/>Bailey Hall</span> </li> 
<li id="li1c" class="nonchanger" ><img src='images/waterc.jpg' alt="Water is Rising" /><span class='event_txt'>Water is Rising<br/><br/>Sat 11/12/2011 8:00 PM ET<br/>Bailey Hall</span> </li>
	
<li id="li2" class="changer" onClick="toggle(document.getElementById('bio2')); listToggle(document.getElementById('li2'), document.getElementById('li2c'))" onmouseover="colorFade('li2','background','f5f5f5','B31B1B')" onmouseout="colorFade('li2','background','B31B1B','f5f5f5',25,50)">
	<img src='images/moranc.jpg' alt="Moranc" /><span class='event_txt'>Jason Moran, piano with SPECIAL GUEST<br/><br/>Sat 1/28/2012 8:00 PM ET<br/>Barnes Hall</span> </li>
<li id="li2c" class="nonchanger" ><img src='images/moranc.jpg' alt="Moranc" /><span class='event_txt'>Jason Moran, piano with SPECIAL GUEST<br/><br/>Sat 1/28/2012 8:00 PM ET<br/>Barnes Hall</span> </li>
	
	
<li id="li3" class="changer" onClick="toggle(document.getElementById('bio3')); listToggle(document.getElementById('li3'), document.getElementById('li3c'))" onmouseover="colorFade('li3','background','f5f5f5','B31B1B')" onmouseout="colorFade('li3','background','B31B1B','f5f5f5',25,50)">
	<img src='images/juliardc.jpg' alt="Juliard" /><span class='event_txt'>Juilliard String Quartet<br/><br/>Fri 2/10/2012 8:00 PM ET<br/>Bailey Hall</span> </li>
<li id="li3c" class="nonchanger"><img src='images/juliardc.jpg' alt="Juliard" /><span class='event_txt'>Juilliard String Quartet<br/><br/>Fri 2/10/2012 8:00 PM ET<br/>Bailey Hall</span> </li>


<li id="li4" class="changer" onClick="toggle(document.getElementById('bio4')); listToggle(document.getElementById('li4'), document.getElementById('li4c'))" onmouseover="colorFade('li4','background','f5f5f5','B31B1B')" onmouseout="colorFade('li4','background','B31B1B','f5f5f5',25,50)">
	<img src='images/bostridgec.jpg' alt="Bostridge" /><span class='event_txt'>Ian Bostridge & Jullus Drake<br/><br/>Fri 3/2/2012 8:00 PM ET<br/>Bailey Hall</span> </li> 
<li id="li4c" class="nonchanger"><img src='images/bostridgec.jpg' alt="Bostridge" /><span class='event_txt'>Ian Bostridge & Jullus Drake<br/><br/>Fri 3/2/2012 8:00 PM ET<br/>Bailey Hall</span> </li> 


<li id="li5" class="changer" onClick="toggle(document.getElementById('bio5')); listToggle(document.getElementById('li5'), document.getElementById('li5c'))" onmouseover="colorFade('li5','background','f5f5f5','B31B1B')" onmouseout="colorFade('li5','background','B31B1B','f5f5f5',25,50)">
	<img src='images/asmoroc.jpg' alt="Asmoro" /><span class='event_txt'>Purbo Asmoro<br/><br/>Wed 3/14/2012 8:00 PM ET<br/>Bailey Hall</span></li> 
<li id="li5c" class="nonchanger"><img src='images/asmoroc.jpg' alt="Asmoro" /><span class='event_txt'>Purbo Asmoro<br/><br/>Wed 3/14/2012 8:00 PM ET<br/>Bailey Hall</span></li> 

</ul> 
 </div>
 </td>
 
 <script type="text/javascript">
listToggle(document.getElementById('li1'), document.getElementById('li1c'));
</script>
 
 
	
	<script>
	<?php if(isset($_GET['search'])){ print("
	var search = '{$_GET['search']}';
	search = search.toLowerCase();
	if(search == 'water is rising'){
		window.scrollTo(0, 260);
		listToggle(document.getElementById('li1'), document.getElementById('li1c'));
		toggle(document.getElementById('bio1'));
	}
	else if(search == 'jason moran'){
		window.scrollTo(0, 260);
		listToggle(document.getElementById('li2'), document.getElementById('li2c'));
		toggle(document.getElementById('bio2'));
	}
	else if(search == 'julliard string quartet'){
		window.scrollTo(0, 260);
		listToggle(document.getElementById('li3'), document.getElementById('li3c'));
		toggle(document.getElementById('bio3'));
	}
	else if(search == 'ian bostridge & jullus drake'){
		window.scrollTo(0, 260);
		listToggle(document.getElementById('li4'), document.getElementById('li4c'));
		toggle(document.getElementById('bio4'));
	}
	else if(search == 'purbo asmoro'){
		window.scrollTo(0, 260);
		listToggle(document.getElementById('li5'), document.getElementById('li5c'));
		toggle(document.getElementById('bio5'));
	}");}?>
</script>
			</div>
		</div>
	</div>
</body>
</html>