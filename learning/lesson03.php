<script>
window.onload = function() {
	window.alert("lesson03.php..onload");
}
window.alert("lesson02.php: start");
var person_unknown = 
{
	name: "unknownname", 
	age: 0,
	sex: "unknownsex",
	printage: function() {
		//// window.alert('the age is: ' + this.age);
	},
	printall: function()
	{
		debugger;
		//// window.alert('name='+this.name+'; age='+this.age+'; sex='+this.sex);
	}
		
};

var person_steve = 
{
	name: "Steve Austin", 
	age: 32,
	sex: "male",
	printage: function() {
		//// window.alert('the age is: ' + this.age);
	},
	printall: function()
	{
		// debugger;
		//// window.alert('name='+this.name+'; age='+this.age+'; sex='+this.sex);
	}
		
};


person_unknown.printage();
// setage: person_* do not have methods to set the age.  Lets provide
// one outside.
function setage(newage)
{
	this.age = newage;
	//// window.alert('setage called');
	return this;
}
setage.call(person_unknown, 5).printall();
person_unknown.printall();

function setdetails(n,a,s)
{
	this.name = n;
	this.age = a;
	this.sex = s;
	//// window.alert('setdetails called');
}

var sd = setdetails.bind(person_unknown, 'Mary', 15);
sd('female');
person_unknown.printall();
person_steve.printall();
window.alert("lesson03.php: end");
</script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="lesson03theme.css"></link>
</head>
<body>
<div class=thirty style='top: 0px;left: 0px;height: 40px;width: 100px;position: absolute; border: red double 3px; transform: rotate(30deg); -webkit-transform: rotate(30deg)' align=center >
First
</div>
<div class=ten style='top: 40px;left: 0px;height: 40px;width: 100px;position: absolute; border: blue double 3px'  >
Ten
</div>
</body>
</html>


