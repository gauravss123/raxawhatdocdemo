raxawhatdocdemo
===============
Use input.php to enter prescription and result will be shown in result.php
all other files are empty as of now

This is a demo app to show proposed functionality for "What Doctor Said"<br>
Currently there is no database implemented in it, but will be in final model which will be used for conversion.<br>
In this example only few abbreviations are used which are as given below<br>
to represent frequency of dosage <br>
qam	every day before noon<br>
qds	four times a day<br>
qpm	every day after noon or every evening<br>
qh	every hour<br>
qhs	every night at bedtime<br>
to represent route through which the medicine is to be taken<br>
iv Intravenous route 
ivp Intravenous push 
po By mouth 
<br>
Enter your prescription.<br>
Separate multiple prescriptions using commas<br>
with each starting with the medicine name having one or more than 1 abbreviations and a number to indicate days for repeating medicine<br>
each prescription should start with medicine name the order of abbreviations or number doesn't matter<br>
abbreviations may have "." after each character<br>
