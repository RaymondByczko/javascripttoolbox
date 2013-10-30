<?php
/**
  * @file lesson06.php
  * @author Raymond Byczko
  * @start_date 2013-28-10 Oct 28
  */
?>
<script>
window.onload = function() {
	window.alert("lesson06.php..onload");
}
window.alert("lesson06.php: start");
function morewindow()
{
	window.alert("hey from morewindow");
}


window.alert("lesson06.php: end");
</script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="lesson03theme.css"></link>
<script src="lib/toolset.js"></script>
</head>
<body>
<div id=id1 class=vlarge style='top: 0px;left: 0px;height: 400px;width: 20000px;position: absolute; border: red double 2px'>
<div id=idbuttons style='top: 100px; left: 40px; height: 125px; width: 85px; position: absolute; border: black double 2px'>
<button onclick="adjustScroll()">Right</button>
<button onclick="adjustScrollX(200+2)">200</button>
<button onclick="gotoSquare('id1', 3, 3, 6, 6)">gotoSquare</button>
<button onclick="adjustScrollXByDeltaR()">Delta&gt;&gt;</button>
<button onclick="adjustScrollXByDeltaL()">Delta&lt;&lt;</button>
<script>var xposition;</script>
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
function float_id1a()
{
	floatIt('id1a', 40, 40);
}
function float_idbuttons()
{
	floatIt('idbuttons', 40, 100);
}

function allonload()
{
	float_id1a();
	float_idbuttons();
}

window.onload=allonload;
window.onscroll=allonload;
</script>
<div id=id4 class=ten_old style='top: 260px;left: 0px;height: 40px;width: 100px;position: absolute; border: black double 3px'  >
</div>

</body>
</html>


