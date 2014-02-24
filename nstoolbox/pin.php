<?php 
$max_count = "10"; 
$host = $_POST['host'];
$count = $_POST['count1'];
  If ($count > $max_count) { 
   echo 'Maximum for count is '.$max_count; 
   
    $again = true;} 
    else { 
      If (ereg(" ",$host))  { 
          echo 'No Space in Host field allowed !'; 
   
         $again= True;} 
        else { 
           echo("Ping Output:<br>");  
           exec("ping -n $count $host",$list);  
         //  sleep($count + 1); 
           for ($i = 0; $i < count($list); $i++)  
           print $list[$i]."<br>"; }} 

 ?>