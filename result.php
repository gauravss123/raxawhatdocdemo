<html>
<head>
</head>
<?php 
//med qpm qh ivp 8,med qam 43 qhs iv
$freq=array("qam","qds","qpm","qh","qhs");
$rout=array("iv","ivp","op");
$freq1=array("every day before noon","four times a day","every day after noon or every evening","every hour","every night at bedtime","unknown");
$rout1=array("via intravenous route ","via intravenous push "," by mouth ","unknown");
$pres=$_POST["i"];

$pressc=explode(",",$pres);//separates each medical prescription to individual array element
//$size=sizeof($pressc);
$result="Prescription is \n";
convert($pressc,$result);
function convert($pressc,&$result){
    
    for($x=0;$x<sizeof($pressc);$x++){  
      
      $pressc1=strtolower($pressc[$x]);
      $pressc11=preg_replace("/^\s+|\s+$/",'',$pressc1);//to remove any leading or trailing spaces
      $pressc2=explode(" ",$pressc11);
      resultify($pressc11,$result);
	
    }
    
  }
  
function resultify($pressc11,&$result){
  global $freq,$rout,$freq1,$rout1;
  $pressc2=explode(" ",$pressc11); //separate each word in query to an element in array element
  $query=$pressc2[0]." ";
  $result="Take ".$pressc2[0]." ";
  $ind=array();
  $indw=array();
  $pressc2=preg_replace("/\./","",$pressc2);
  $notFound=array();
  $num;
  for($x=1;$x<sizeof($pressc2);$x++){
      $freqstat=in_array($pressc2[$x],$freq);
      $routstat=in_array($pressc2[$x],$rout);
      
      
      if($freqstat)
	array_push($ind,array_search($pressc2[$x],$freq));
      else if($routstat)
	array_push($indw,array_search($pressc2[$x],$rout));
      else if(is_numeric($pressc2[$x]))
	$num=$pressc2[$x];
      else
	array_push($notFound,$pressc2[$x]); //for unknown values
  }
  $b=0x00aeae;//font color value in hex
  $c=0xaeaeae;//offset to change font color
  for($x=0;$x<sizeof($ind);$x++){
    $b += $c;
    $query .= " <font color='$b'>".$freq[$ind[$x]]."</font>, ";
    $result .= " <font color='$b'>".$freq1[$ind[$x]]."</font>, ";
    }
  for($x=0;$x<sizeof($indw);$x++){
    $b += ($c*(sizeof($ind)));
    $query .= " <font color='$b'>".$rout[$ind[$x]]."</font>, ";
    $result.= " <font color='$b'>".$rout1[$indw[$x]]."</font>, ";
    }
  $b += ($c*(sizeof($indw)+sizeof($ind)));
  $result .= "<font color='$b'>for ".$num. " days.</font><br> ";
  $query .= "<font color='$b'>".$num."</font>";
  
  echo("Entered prescription : ".$query."<br>");
  echo("In layman language : ".$result."<br>");
  if(!empty($notFound)){
    $notFoundStr=" ";
    foreach($notFound as $val)
      $notFoundStr .=$val." ";
     echo ("Value for these abbreviations"."<font color=red>".$notFoundStr."</font>"."not found in database.<br><br>");
   }
    
 
 }

?>
<body>
</body>
</html>