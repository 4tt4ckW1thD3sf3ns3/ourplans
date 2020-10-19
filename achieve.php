<?php

//......

if($_GET["key"] !== "Con_goodjob")
	die("Please step by step.");

$reg = $_GET["region"];
if($reg < 87 && $reg >= 0){
  echo "<b>[".$reg."]:</b> ";
  echo $locs[$reg];
}
else{
  echo "<b>What's your problem?</b>";
}

?>