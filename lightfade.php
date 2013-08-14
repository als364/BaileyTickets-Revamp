<html>
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

<div id="fade" class="black_overlay"></div>
</html>