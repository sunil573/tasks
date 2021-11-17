<!DOCTYPE html>
<html>
<body>

<?php
$str = '12,20,22,25,yyy,wwwwww,tttt';
echo $str;  echo '<br/>';
$mystr = '';
$main='';

for($i=0; $i< strlen($str); $i++){   
	  $main .=$str[$i];
      if(strlen($main) == strlen(',25')){    

    if($main == ',25'){
    	echo $mystr;
    	$mystr='';
        $main = '';
        echo '<br/>';
    }else{

        $sub_main = '';
        for($j=1;$j<strlen($main);$j++){
        $sub_main .= $main[$j];
        }

    $main = $sub_main;
    $mystr .=$str[$i];
    }
    }else{
        $mystr .=$str[$i];
    }
  }
    echo $mystr;
?> 
</body>
</html>