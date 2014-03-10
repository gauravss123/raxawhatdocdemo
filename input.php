<html>
<head>
<link rel="stylesheet" href="input.css" type="text/css">
</head>

This is a demo app to show proposed functionality for "What Doctor Said"<br>
Currently there is no database implemented in it, but will be in final model.<br>
In this example only few terms are used which are as given below<br>
frequency<br>
qam	every day before noon<br>
qds	four times a day<br>
qpm	every day after noon or every evening<br>
qh	every hour<br>
qhs	every night at bedtime<br>
routes<br>
iv Intravenous route 
ivp Intravenous push 
po By mouth 
<br>
Enter your prescription. Separate multiple prescription using commas with each starting with the medicine name having keyword specified above and a number to indicate days for repeating medicine<br>
<div class="sp-input">
<form method="post" action="result.php" name = "m">
<input type="text" name="i">
<a href="javascript:document.m.submit();">Submit</a>

</div>
</form>


<body>
</body>

</html>