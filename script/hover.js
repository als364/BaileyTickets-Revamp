function debug()
{
	alert();
}

function linkToEventListing(x)
{
	/*alert();
	var x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("accordion").offsetLeft;
	var y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("accordion").offsetTop;*/
	alert(x);
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

function accordion()
{
	var x = e.g
	if(x < 100)
	{
		$('#accordion').animate(
			{
				background-image: url(images/accordion.png);
			}, 
		5000, function() 
	}
	else if(x < 200)
	{
		$('#accordion').animate(
			{
				background-image: url(images/accordion1.png);
			}, 
		5000, function() 
	}
	else if(x < 300)
	{
		$('#accordion').animate(
			{
				background-image: url(images/accordion2.png);
			}, 
		5000, function() 
	}
	else
	{	
		$('#accordion').animate(
			{
				background-image: url(images/accordion3.png);
			}, 
		5000, function() 
	}
}

