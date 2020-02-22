<?php
$a=array(4,1,3,9,0,-1,5,6);
$c=count($a);
for($i=1;$i<$c;$i++){
  for($j=0;$j<$i+1;$j++){
    
    //echo $j;
    if($a[$i]<$a[$j]){
     list($a[$i],$a[$j])=array($a[$j],$a[$i]); 
      
    }

   print_r($a[$j]);
   echo "<br>";
   
  }
 echo "<br>";
 
}
print_r($a);
?>
