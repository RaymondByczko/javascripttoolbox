<script>
window.onload = function() {
	window.alert("lesson05.php..onload");
}
window.alert("lesson05.php: start");
function givemehref()
{
	return "/learning/lesson04c.html";
}
function morewindow()
{
	window.alert("hey from morewindow");
}


window.alert("lesson05.php: end");
</script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="lesson03theme.css"></link>
<script src="lib/toolset.js"></script>
</head>
<body>
<div id=id1 class=vlarge style='top: 0px;left: 0px;height: 400px;width: 60000px;position: absolute; border: red double 2px'>
<a href="/learning/lesson04b.html">First</a>
<div id=idbuttons style='top: 100px; left: 40px; height: 125px; width: 85px; position: absolute; border: black double 2px'>
<button onclick="adjustScroll()">Right</button>
<button onclick="adjustScrollX(200+2)">200</button>
<button onclick="adjustScrollX(400+2)">400</button>
<button onclick="adjustScrollXByDeltaR()">Delta&gt;&gt;</button>
<button onclick="adjustScrollXByDeltaL()">Delta&lt;&lt;</button>
<script>var xposition=0;</script>
</div>
<div id=idarea1 style='top: 60px; left: 400px; height: 30px; width: 75px; position: absolute; border: red double 2px'>
</div>
<div id=idarea2 style='top: 60px; left: 600px; height: 30px; width: 75px; position: absolute; border: green double 2px'>
</div>
</div>
<div id=id1a style='top: 40px;left: 40px; height: 20px; width: 60px; position: absolute; border: black double 10px'>
<span>In id1a</span>
</div>

<script>
var fb = new FloatClass();
var fc = new FloatClass();
function float_id1a()
{
	fb.floatIt('id1a', 40, 40);
}
function float_idbuttons()
{
	fc.floatIt('idbuttons', 40, 100);
}

function allonload()
{
	float_id1a();
	float_idbuttons();
}

function allkeydown(ea)
{
	var funcb = fb.setupProcessKeyMovement('id1a', 'id1', 'r', 'v');
	var funcc = fc.setupProcessKeyMovement('idbuttons', 'id1', 't', 'b');
	function invoke(ea)
	{
		funcb(ea);
		funcc(ea);
	}
	return invoke;
}

window.onload=allonload;
window.onscroll=allonload;
/* window.document.onkeydown = fc.setupProcessKeyMovement('idbuttons', 'id1', 'r', 'v'); */
window.document.onkeydown = allkeydown();
</script>
<div id=id4 class=ten_old style='top: 260px;left: 0px;height: 40px;width: 100px;position: absolute; border: black double 3px'  >
</div>

</body>
</html>


