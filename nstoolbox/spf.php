<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php

if(!empty($_POST['hostname'])){

    // Grab variable from form and define valid types

    $host = $_POST['hostname'];
   
    if(!defined("DNS_TXT") ){
       echo "Invalid DNS Type!";
    }
	
	else
	
	{

       $type = constant("DNS_TXT");
       $rec = dns_get_record($host, $type);
      
 $recvals=array("Hostname" => "host","Type" => "type", "Record" => "txt");
    echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
      echo "<tr>";
	
    echo "<td align='left' valign='top' class='topline' width='100%'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
      echo "<tr>";
        echo "<td width='2%' align='left' valign='top' class='txt'><img src='images/topleft.jpg' width='17' height='57'></td>";
		
		
      foreach ($recvals as $headkey=>$heading) {
          echo "        <td width='32%' height='57' align='center' valign='middle' class='txt'>".$headkey."</td>";
      }
	  echo "<td width='2%' align='right' valign='top' class='txt'><img src='images/righttop.jpg' width='17' height='57'></td>";
      
      echo "</tr>";
      
      if(empty($rec)) {
        echo "<tr>"; 
		echo "<td></td>";
		?>
		
        <td height="44" align="center" valign="middle" class="txt" <?php if($type == DNS_ALL) { ?> colspan='14' <?php }  elseif($type == DNS_MX) { ?> colspan='4' <?php } if($type == DNS_SOA) { ?> colspan='9' <?php } else { ?> colspan='3' <?php } ?> style='empty-cells:show;'> No Records Found. </td>
         <td ></td>
					
					<?php
		echo "</tr>";
		
			echo "<tr>";
        echo "<td align='left' valign='top' > &nbsp;</td>"; ?>
        <td height='19' align='center' valign='middle' width='96%' <?php if($type == DNS_ALL) { ?> colspan='14' <?php }  elseif($type == DNS_MX) { ?> colspan='4' <?php } if($type == DNS_SOA) { ?> colspan='9' <?php } else { ?> colspan='3' <?php } ?> class='botline' >&nbsp;</td>
        <?php echo "<td align='right' valign='top' class='botline'></td>";
      echo "</tr> ";
	  
      } else {
	  
	  //print_r($rec);
	  //print_r($recvals);
	  	$k = 0;
		foreach ($rec as $arr => $num){ // first forloop
            echo "<tr>";
			echo "<td width='2%' align='left' valign='top' class='lline'>&nbsp;</td>";
            foreach ($recvals as $title => $value){ // second forloop								
				echo "<td height='44' width='32%' align='center' valign='middle' class='txt' style='empty-cells:show;'>&nbsp;&nbsp;&nbsp;".$num[$value]."&nbsp;&nbsp;&nbsp;</td>";					
            } // second forloop			 
			echo "<td width='2%' align='right' valign='top' class='rline'>&nbsp;</td>";	
            echo "</tr>";
     
			
   	echo "<tr>"; $arrcount = count($rec); ?>
        <td align='left' valign='top' <?php if($k+1 != $arrcount) { ?> class='lline' <?php } ?> ><?php if($k+1 == $arrcount) { ?><img src='images/leftbot.jpg' width='17' height='19'><?php } else { echo "&nbsp;"; } ?></td>
		<?php foreach ($recvals as $title => $value){ ?>
        <td height='19' align='center' valign='middle' width='96%' <?php if($k+1 == $arrcount) { ?> class='botline' <?php } ?> >&nbsp;</td>
		 <?php  } ?>
        <td align='right' valign='top' <?php if($k+1 != $arrcount) { ?> class='rline' <?php } ?> ><?php if($k+1 == $arrcount) { ?><img src='images/botright.jpg' width='17' height='19'><?php } else { echo "&nbsp;"; } ?></td>
      <?php echo "</tr>";
	  	$k++; 
	     }
	  } //first foreach
      	
	
	  echo "</table>";
	  echo "</td>";
	  echo "</tr>";
	   
echo "</table>";	 
    }
} 

else {

     echo "Either hostname or record type is missing";
}

?>
 