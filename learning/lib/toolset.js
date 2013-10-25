/* floatIt: this floats the element given by theEid at the
   cooardinates given by fpX, fpY.
*/
function floatIt(theEid, fpX, fpY)
{
	if (this.curFX == undefined)
	{
		this.curFX = fpX;
	}
	if (this.curFY == undefined)
	{
		this.curFY = fpY;
	}

	var theE = document.getElementById(theEid);
	var wTheE = theE.style.width;
	var hTheE = theE.style.height;
	var wmodTheE;
	var hmodTheE;
	var pattern = /px$/;
	var bHasPX = pattern.test(wTheE);
	if (bHasPX)
	{
		wmodTheE = wTheE.slice(0, wTheE.length-2);
	}
	else
	{
		wmodTheE = wTheE;
	}
	var bHasPX = pattern.test(hTheE);
	if (bHasPX)
	{
		hmodTheE = hTheE.slice(0, hTheE.length-2);
	}
	else
	{
		hmodTheE = hTheE;
	}
	var wnTheE = Number(wmodTheE);
	var hnTheE = Number(hmodTheE);
	var x;
	var y;
	if (window.innerWidth > wnTheE)
	{
		x = window.pageXOffset + this.curFX;
	}
	else
	{
		
	}

	if (window.innerHeight > hnTheE)
	{
		y = window.pageYOffset + this.curFY;
	}
	theE.style.left = x + "px";
	theE.style.posLeft = x;
	theE.style.top = y + "px";
	theE.style.posTop = y;
}

function scrollDetected()
{
	window.alert("scrolling");
}

function adjustScroll()
{
	/* window.alert("adjust scroll"); */
	/* var theE = document.getElementById(theEid); */
	var iw = window.innerWidth;
	/* window.pageXOffset = document.body.clientWidth - iw; */
	/* window.pageXOffset = 1300; */

	var vsWidth = document.body.clientWidth - document.body.offsetWidth;
	var goToX = document.body.scrollWidth - iw + vsWidth;
	/* window.scrollTo(2000-iw, 0); */
	window.scrollTo(goToX, 0);
}

function adjustScrollX(X)
{
	window.scrollTo(X, 0);
	this.xposition = X;
}

function adjustScrollXByDeltaR()
{
	this.xposition = this.xposition+1;	
	debugger;
	window.scrollTo(xposition, 0);
}

function adjustScrollXByDeltaL()
{
	this.xposition = this.xposition-1;	
	window.scrollTo(this.xposition, 0);
}


function setupProcessKeyMovement(theEid, boundingEid, upKey, downKey)
{
	var that = this;  // Assuming setup... is called as a METHOD.
	var lTheEid = theEid; /* l: local */
	var lBoundingEid = boundingEid;

	theB = document.getElementById(lBoundingEid);
	var bTop = theB.style.top;
	var bHeight = theB.style.height;

	var lupKey = upKey;
	var ldownKey = downKey;

	function processKey(e)
	{
		var key;
		if (window.event)
		{
			key = window.event.keyCode;
		}
		else
		{
			key = e.keyCode;
		}
		/* window.alert('key=' + key); */
		keyStr = String.fromCharCode(key);

		var tnTheE;
		var lnTheE;
		var theE;
		if ((keyStr == lupKey.toUpperCase()) || (keyStr == lupKey.toLowerCase()) || (keyStr == ldownKey.toUpperCase()) || (keyStr == ldownKey.toLowerCase())) /* UP */
		{
			theE = document.getElementById(lTheEid);

			var tTheE = theE.style.top;
			var lTheE = theE.style.left;
			tnTheE = convertNumberAttribute(tTheE);
			lnTheE = convertNumberAttribute(lTheE);
		}

		if ((keyStr == lupKey.toLowerCase()) || (keyStr == lupKey.toUpperCase())) /* UP */
		{
			that.curFY = tnTheE - 1;
			debugger;
			theE.style.top = (tnTheE - 1) + "px";
			theE.style.posTop = tnTheE - 1;
		}

		if ((keyStr == ldownKey.toLowerCase()) || (keyStr == ldownKey.toUpperCase())) /* DOWN */
		{
			that.curFY = tnTheE + 1;
			debugger;
			theE.style.top = (tnTheE + 1) + "px";
			theE.style.posTop = tnTheE + 1;
		}
	}
	return processKey;
}

function convertNumberAttribute(numA)
{
	var pattern = /px$/;
	var bHasPX = pattern.test(numA);
	if (bHasPX)
	{
		modNumA = numA.slice(0, numA.length-2);
	}
	else
	{
		modNumA = numA;
	}
	var num = Number(modNumA);
	return num;
}

function FloatClass()
{
	this.curFX = undefined;
	this.curFY = undefined;
	this.setupProcessKeyMovement = setupProcessKeyMovement;	
	this.floatIt = floatIt;
}
