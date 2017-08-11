<?php
  $str = $_REQUEST["str"];
  $output = "chmod ";
  if (strlen($str) != 10) {
    echo "invalid input should be 10 characters long";
    return ;
  }

  if($str[0] == "d") {
    $output = $output."-R " ;
  }

  function computeValue($str, $startIndex, $endIndex){
    $val = 0 ;
    for($i = $startIndex; $i < $endIndex; $i++){
      if($str[$i] == "r") {
        $val += 4 ;
      }
      else if($str[$i] == "w") {
        $val += 2 ;
      }
      else if($str[$i] == "x") {
        $val += 1 ;
      }
      else{}//noop
    }
    return $val ;
  }

  $output = $output.computeValue($str, 1, 4);
  $output = $output.computeValue($str, 4, 7);
  $output = $output.computeValue($str, 7, 10);

  echo $output;
?>
