<html>
<a href="index.php"><img src = "images/CornellUniversityLogo.gif" align = "left" style = "border-color: #d7cbb3;"/></a> <br/><br/>
<h1>Bailey Hall Ticket Sales</h1>
<form align="right" action="javascript:void(0)" method ="get" id="myform">

<div class="ui-widget">
	<label for="tags">Search: </label>
	<input ROWS=2  name = "search" id="tags"><input type = "submit" size="30" value = "Go" onclick="performSearch()"/>
</div>
</form>
<br/>
<br/>
<script>
	$(function() {
		var availableTags = [
			"Water is Rising",
			"Jason Moran",
			"Julliard String Quartet",
			"Ian Bostridge & Jullus Drake",
			"Purbo Asmoro"
		];
		$( "#tags" ).autocomplete({
			source: availableTags
		});
	});
	
	function performSearch() {
		var query = document.getElementById('tags').value;
		query = query.toLowerCase();
		
		if(query != "water is rising" && query != "jason moran" && query != "julliard string quartet" && query != "ian bostridge & jullus drake" && query != "purbo asmoro"){
			alert("No results were found.");
		}
		else{
			document.forms["myform"].action = "index.php";
			document.forms["myform"].submit();
		}
	}
	</script>
</html>