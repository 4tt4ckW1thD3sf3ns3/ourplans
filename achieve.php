<?php
$reg = $_GET["region"];
if($reg < 88 && $reg >= 0){
  echo "<b>[".$reg."]:</b> ";
  echo $locs[$reg];
}

?>