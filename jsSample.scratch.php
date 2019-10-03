<html>
<head>
<!--css and js here -->
<script>
function pageLoaded(){

//alert("Hello world");
var myVariable;
let myOtherVariable;
//myVariable = prompt("What's your name?");
//alert("Hellooooooo, " + + myVariable);
let myNum = 0;
for(let i = 0; i < 10; i++){
	myNum += 0.1;
}
//alert("My Num is 1: " + (myNum==1) + "\nMy Num: " + myNum);
console.log("My num is 1: " + (myNum == 1) + "\n Num: " + myNum);

let myParagraph = document.getElementById("myParagraph");
console.log(myParagraph);
myParagraph.innerText = number1 + " + " + number2 + " = ";
myParagraph.innerText += ()

}
</script>
</head>

<body onload="pageLoaded();">
<!-- html content -->
<p id ="myParagraph">It loaded, yay!</p>
</body>
</html>
