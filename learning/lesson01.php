<?php
/**
  * @file javascripttoolbox/learning/lesson01.php
  * @author Raymond Byczko
  * @start_date 2013-10 October 2013
  * @purpose To play around with this and bind.
  */
?>
<script>
window.alert("lesson01.php");
var person = {  name: "unknownname", 
		age: 0,
		sex: "unknownsex",
		printage: function() {
			window.alert('the age is: ' + this.age);
		},
		printall: function()
		{
			debugger;
			window.alert('name='+this.name+'; age='+this.age+'; sex='+this.sex);
		}
		
};
person.age = 12;
/* To quote 'Javascript: The Good Parts', "When a function is stored as a */
/* property of an object, we call it a method.  When a method is invoked, */
/* this is bound to that object." (location 865). Here we see how when    */
/* printage is called, then this.age picks up the age property correctly. */
person.printage();
function setage(newage)
{
	this.age = newage;
	window.alert('setage called');
}
var sa = setage.bind(person);
sa(14);
person.printage();

function setdetails(n,a,s)
{
	this.name = n;
	this.age = a;
	this.sex = s;
	window.alert('setdetails called');
}

var sd = setdetails.bind(person, 'Mary', 15);
sd('female');
person.printall();
</script>
