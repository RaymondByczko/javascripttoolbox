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
